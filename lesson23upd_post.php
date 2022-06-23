<?php
include("include/db_config.php");

if (empty($_POST) == false) {
    $id = $_POST["id"];
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $bday = $_POST["bdate"];
    $phone = $_POST["phone"];
    $fav_lang = $_POST["fav_lang"];
    if ($_POST["knowsphp"] == "on") {
        $lnows_php = "1";
    } else {
        $lnows_php = "0";
    }
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    if (!$conn) {
        echo("Connection failed: " . mysqli_connect_error());
    } else {
        $sql = "UPDATE `lessons` SET `name`='$fname',`surname`='$lname',`birthday`='$bday',`phone`='$phone',`fav_lang`='$fav_lang',`knows_php`='$lnows_php' WHERE `id` = $id";
        $result = mysqli_query($conn, $sql);
        if ($result == true) {
        echo("Record $id updated successfully<br>");
        echo("<a href='lesson22.php'>Back to Database lesson</a><br>\n");
        } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    }
    mysqli_close($conn);
}

?>