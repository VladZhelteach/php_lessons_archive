<?php
include("include/functions.php");
include("include/header.php");
print_page_address();
include("include/menu.php");

$str1 = "example text";
$str_len = strlen($str1);
echo("'$str1' is $str_len characters long.<br>\n");

$str2 = "Example TEXT to check Lower case";
$str2_low = strtolower($str2);
echo("$str2_low<br>\n"); 

$str3 = "Example TEXT to check Upper case";
$str3_up = strtoupper($str3);
echo("$str3_up<br>\n"); 

$tables  = "posts -|- pages -|- comments -|- users";
$tables_array = explode(" -|- ", $tables);
echo("<ol>\n");
for ($i = 0; $i < count($tables_array); $i++) {
    echo("<li>" . $tables_array[$i] . " </li>\n");
}
echo("</ol>\n");

$users_array = array('admin', 'moderator', 'user', 'guest');
$users_str = implode(" -|- ", $users_array);
echo("$users_str<br>\n");

$text_html = '<p>Paragraph.</p><!-- Comment --> <a href="#">Link text</a>';
$text_no_html = strip_tags($text_html);
echo("$text_html<br>\n");
echo("$text_no_html<br><br>\n");

$text_for_replace = "Hello World!";
$text_with_replace = str_replace("World", "Vladyslav", $text_for_replace);
echo("<b>Before replace:</b> $text_for_replace<br>\n");
echo("<b>After replace:</b> $text_with_replace<br><br>\n");

$mystring = "text to find substring; find first; find last";
$findme   = 'find';
$pos = strpos($mystring, $findme);

if ($pos === false) {
    echo("String <b>'$findme'</b> is not found in <b>'$mystring'</b><br>\n");
} else {
    echo("String <b>'$findme'</b> is found in <b>'$mystring'</b>; Position: <b>$pos</b><br><br>\n");
}

$fd = fopen("example.txt", 'a') or die("Can not create file!");
$str = "new text for example\n";
fwrite($fd, $str);
fclose($fd);
echo("File created!<br>\n");

include("include/footer.php");
?>