<?php
include("include/functions.php");
include("include/header.php");
echo("<h4>NULL:</h4>\n");
print_page_address();
include("include/menu.php");
$var_null = NULL;
echo("Null variable: " . $var_null . "<br>\n");
var_dump($var_null);
echo("<br>\n");
echo("Fake variable: " . $fake_var . "<br>\n");
var_dump($fake_var);
echo("<br>\n");

$check_null1 = is_null($var_null);
echo("Null check: ");
if ($check_null1) {
    echo("Yes<br>\n");
} else {
    echo("No<br>\n");
}

$array1 = array();
echo("Empty array: $array1<br>\n");
var_dump($array1);
echo("<br>\n");
$check_null2 = is_null($array1);
echo("Null check: ");
if ($check_null2) {
    echo("Yes<br>\n");
} else {
    echo("No<br>\n");
}

$var_n1 = 10;
echo("Just created variable: $var_n1<br>\n");
$check_null3 = is_null($var_n1);
echo("Null check: ");
if ($check_null3) {
    echo("Yes<br>\n");
} else {
    echo("No<br>\n");
}
unset($var_n1);
echo("Just unset variable: $var_n1<br>\n");
var_dump($var_n1);
echo("<br>\n");
$check_null4 = is_null($var_n1);
echo("Null check: ");
if ($check_null4) {
    echo("Yes<br>\n");
} else {
    echo("No<br>\n");
}
$var_n1 = 12.6;
echo("Variable: $var_n1<br>\n");
var_dump($var_n1);
echo("<br>\n");
$check_null5 = is_null($var_n1);
echo("Null check: ");
if ($check_null5) {
    echo("Yes<br>\n");
} else {
    echo("No<br>\n");
}
$prog_langs2 = array("PHP", "Java", "Pascal", "C++", "Python", "Ruby", "Perl");
echo("<br>Element #3 is $prog_langs2[3]<br>\n");
echo("Element #10 is $prog_langs2[10]<br>\n");
$check_null6 = is_null($prog_langs2[10]);
echo("Null check for element #10: ");
if ($check_null6) {
    echo("Yes<br>\n");
} else {
    echo("No<br>\n");
}
include("include/footer.php");
?>