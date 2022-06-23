<?php
include("include/functions.php");
include("include/header.php");
print_page_address();
echo("<br>\n");
include("include/menu.php");
include("include/db_config.php");

$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    echo("Connection failed: " . mysqli_connect_error());
} else {
    $sql = "SELECT * FROM `lessons`";
    $result = mysqli_query($conn, $sql);
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
mysqli_close($conn);
include("include/footer.php");
?>



