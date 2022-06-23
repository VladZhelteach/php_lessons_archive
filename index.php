<?php
include("include/functions.php");
include("include/header.php");
print_page_address();
echo("<br>\n");
include("main.php");
include("include/menu.php");
$file_text = file_get_contents("include/main_php.txt");
echo("$file_text<br>\n");
say_hello();
?>
<h3>Comments:</h3>
<form action="lesson14_submit.php" method="post">
<input name="name" id="name" placeholder="Name"><br>
<textarea name="comment" id="comment" placeholder="Message" cols="50" rows="7"></textarea><br>
<input type="submit">
<input type="reset"><br>
</form><br>
<?php
$fd = fopen("files/hello.txt", 'r');
while(!feof($fd))
{
    $str = fgets($fd);
    $str_array = explode("|", $str);
    echo("<div style='background-color:#03fc84'>\n");
    echo("<p><b>" . $str_array[0] . "</b><br>\n");
    echo($str_array[1] . "</p>\n");
    echo("</div>\n");
}
fclose($fd);
include("include/footer.php");
?>