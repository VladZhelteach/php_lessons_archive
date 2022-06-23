<?php
/*echo("GET<br>");
var_dump($_GET);
echo("<br>POST<br>");
var_dump($_POST);
echo("<br>REQUEST<br>");
var_dump($_REQUEST);*/

if (empty($_POST) == false) {
    $fd = fopen("files/hello.txt", 'a') or die("Can not create file!");
    $str = implode($_POST, "|");
    fwrite($fd, $str);
    fwrite($fd, "\n");
    fclose($fd);
    echo("File created!<br>\n");
    echo("<a href='lesson14_form.php'>Back to Guestbook</a><br>\n");
}
?>