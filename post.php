<?php
include("include/functions.php");
include("include/header.php");
//include("include/menu.php");
include("include/db_config.php");

$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    echo("Connection failed: " . mysqli_connect_error());
} else {
    $sql_text = "SELECT * FROM `posts` WHERE `id` = 1";
    $result = mysqli_query($conn, $sql_text);
    if (mysqli_num_rows($result) > 0) {
        echo("<h3>Post:</h3>");
        while($row = mysqli_fetch_assoc($result)) {
            echo($row["id"] . "<br>\n");
            echo($row["author"] . "<br>\n");
            echo($row["date_publ"] . "<br>\n");
            echo($row["title"] . "<br>\n");
        }
    } else {
        echo("Error loading post");
    }
    $sql_text2 = "SELECT * FROM `comments` WHERE `post_id` = 1";
    $result2 = mysqli_query($conn, $sql_text2);
    if (mysqli_num_rows($result2) > 0) {
        echo("<h3>Comments:</h3>");
        while($row = mysqli_fetch_assoc($result2)) {
            echo($row["id"] . "<br>\n");
            echo($row["author"] . "<br>\n");
            echo($row["date_publ"] . "<br>\n");
            echo($row["comments"] . "<br>\n");
            echo($row["likes"] . "<br>\n");
            echo($row["dislikes"] . "<br>\n");
        }
    } else {
        echo("Error loading post");
    }
}

include("include/footer.php");
?>