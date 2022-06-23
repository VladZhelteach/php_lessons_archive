<?php
include("include/functions.php");
include("include/header.php");
print_page_address();
echo("<br>\n");
include("include/menu.php");
include("include/db_config.php");

$conn = mysqli_connect($servername, $username, $password, $dbname);

function print_table($sql_text, $con) {    
    if (!$con) {
        echo("Connection failed: " . mysqli_connect_error());
    } else {
        $result = mysqli_query($con, $sql_text);
        if (mysqli_num_rows($result) > 0) {
            echo("<table border='1'>\n");
            echo("<tr>");
            echo("<th>id</th>\n");
            echo("<th>name</th>\n");
            echo("<th>surname</th>\n");
            echo("<th>birthday</th>\n");
            echo("<th>phone</th>\n");
            echo("<th>Favourite language</th>\n");
            echo("<th>Knows PHP</th>\n");
            echo("</tr>\n");
            while($row = mysqli_fetch_assoc($result)) {
                echo("<tr>\n");
                echo("<td>" . $row["id"]. "</td>\n");
                echo("<td>" . $row["name"]. "</td>\n");
                echo("<td>" . $row["surname"]. "</td>\n");
                echo("<td>" . $row["birthday"]. "</td>\n");
                echo("<td>" . $row["phone"]. "</td>\n");
                echo("<td>" . $row["fav_lang"]. "</td>\n");
                if ($row["knows_php"] == true) {
                    echo("<td>Yes</td>\n");
                } else {
                    echo("<td>No</td>\n");
                }
                echo("</tr>\n");
            }
            echo("</table>\n");
            } else {
            echo("0 results");
            }
    }
}

function print_table_crop($sql_text, $con) {    
    if (!$con) {
        echo("Connection failed: " . mysqli_connect_error());
    } else {
        $result = mysqli_query($con, $sql_text);
        if (mysqli_num_rows($result) > 0) {
            $row_count = mysqli_num_rows($result);
            echo("Number of rows: $row_count<br>");
            echo("<table border='1'>\n");
            echo("<tr>");
            echo("<th>id</th>\n");
            echo("<th>name</th>\n");
            echo("<th>surname</th>\n");
            echo("<th>Favourite language</th>\n");
            echo("<th>Knows PHP</th>\n");
            echo("</tr>\n");
            while($row = mysqli_fetch_assoc($result)) {
                echo("<tr>\n");
                echo("<td>" . $row["id"]. "</td>\n");
                echo("<td>" . $row["name"]. "</td>\n");
                echo("<td>" . $row["surname"]. "</td>\n");
                echo("<td>" . $row["fav_lang"]. "</td>\n");
                if ($row["knows_php"] == true) {
                    echo("<td>Yes</td>\n");
                } else {
                    echo("<td>No</td>\n");
                }
                echo("</tr>\n");
            }
            echo("</table>\n");
            } else {
            echo("0 results");
            }
    }
}
echo("<h3>Full select, full table</h3><br>");
$sql = "SELECT * FROM `lessons` ORDER BY `fav_lang`, `birthday`";
print_table($sql, $conn);

echo("<h3>Only Python-fav select, full table</h3><br>");
$sql = "SELECT * FROM `lessons` WHERE `fav_lang` = 'Python'";
print_table($sql, $conn);

echo("<h3>Full select, croped table</h3><br>");
$sql = "SELECT `id`, `name`, `surname`, `fav_lang`, `knows_php` FROM `lessons`";
print_table_crop($sql, $conn);

echo("<h3>Only Python-fav select, croped table</h3><br>");
$sql = "SELECT `id`, `name`, `surname`, `fav_lang`, `knows_php` FROM `lessons` WHERE `fav_lang` = 'Python'";
print_table_crop($sql, $conn);

mysqli_close($conn);
include("include/footer.php");
?>



