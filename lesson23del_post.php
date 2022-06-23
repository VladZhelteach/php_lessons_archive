<?php
include("include/db_config.php");

if (empty($_POST) == false) {
    $id = $_POST["id"];
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    if (!$conn) {
        echo("Connection failed: " . mysqli_connect_error());
    } else {
        $sql = "DELETE FROM `lessons` WHERE `id` = $id";
        $result = mysqli_query($conn, $sql);
        if ($result == true) {
        echo("Record $id deleted successfully<br>");
        echo("<a href='lesson22.php'>Back to Database lesson</a><br>\n");
        } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    }
    mysqli_close($conn);
}

?>