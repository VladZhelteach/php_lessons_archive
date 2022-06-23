<?php
include("include/db_config.php");

if (empty($_POST) == false) {
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $bday = $_POST["bdate"];
    $phone = $_POST["phone"];
    $fav_lang = $_POST["fav_lang"];
    if ($_POST["knowsphp"] == "on") {
        $knows_php = "1";
    } else {
        $knows_php = "0";
    }
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    if (!$conn) {
        echo("Connection failed: " . mysqli_connect_error());
    } else {
        $sql = "INSERT INTO `lessons`(`name`, `surname`, `birthday`, `phone`, `fav_lang`, `knows_php`) VALUES ('$fname','$lname','$bday','$phone','$fav_lang','$knows_php')";
        $result = mysqli_query($conn, $sql);
        if ($result == true) {
        echo("New record created successfully<br>");
        echo("<a href='lesson22.php'>Back to Database lesson</a><br>\n");
        } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    }
    mysqli_close($conn);
}

?>