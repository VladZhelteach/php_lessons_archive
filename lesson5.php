<?php
include("include/functions.php");
include("include/header.php");
echo("<h1>Complex data types and loops</h1>\n");
print_page_address();
include("include/menu.php");
echo("<h4>Array of programming languages:</h4>\n");
$prog_langs = array("PHP", "Java", "Pascal", "C++", "Python", "Ruby", "Perl");
echo("$prog_langs<br>\n");
var_dump($prog_langs);
echo("<br>\n");
echo("<ul>\n");
echo("<li> $prog_langs[0] </li>\n");
echo("<li>" . $prog_langs[1] . "</li>\n");
echo("<li>" . $prog_langs[2] . "</li>\n");
echo("<li>" . $prog_langs[3] . "</li>\n");
echo("<li>" . $prog_langs[4] . "</li>\n");
echo("<li>" . $prog_langs[5] . "</li>\n");
echo("<li>" . $prog_langs[6] . "</li>\n");
echo("</ul>\n");
$prog_langs_count = count($prog_langs);
echo("Number of elements is $prog_langs_count<br>\n");
echo("First element is $prog_langs[0]<br>\n");
echo("Element #3 is $prog_langs[3]<br>\n");
echo("Element #10 is $prog_langs[10]<br>\n");

echo("<h4>Array of numbers:</h4>\n");
$num_array = array(8, 12.3, 2, 7.7, 42.1, 26, 34);
var_dump($num_array);
echo("<br>\n");

echo("<h4>Array of frontend languages:</h4>\n");
$front_array[]="HTML";
$front_array[]="Javascript";
$front_array[]="CSS";
var_dump($front_array);
echo("<br>\n");
echo("<ul>\n");
echo("<li>" . $front_array[0] . "</li>\n");
echo("<li>" . $front_array[1] . "</li>\n");
echo("<li>" . $front_array[2] . "</li>\n");
echo("</ul>\n");

echo("<h4>Array of backend languages:</h4>\n");
$web_lang[0]="PHP";
$web_lang[10]="Javascript";
$web_lang[8]="Java";
$web_lang[-3]="Python";
$web_lang[4]="Ruby";
var_dump($web_lang);
echo("<br>\n");

echo("<h4>Array of tables:</h4>\n");
$tables = array(0 => "users", -1 =>"pages", 20 => "posts", 3 =>"comments");
var_dump($tables);
echo("<br>\n");

echo("<h4>Array of roles:</h4>\n");
$roles = array(
    "admin",
    "moderator",
6 => "user",
    "guest",
    "banned",
    "hacker",
);
var_dump($roles);
echo("<br>\n");

echo("<h4>Random example array:</h4>\n");
$example_array = array("PHP", 1, true, 2.12, array("html", "css"));
var_dump($example_array);
echo("<br>\n");
echo("String element is $example_array[0]<br>\n");
echo("Bool element is $example_array[2]<br>\n");
echo("Array element is " . $example_array[4][0] . "<br>\n");

echo("<h4>Associative frontend array:</h4>\n");
$lang_front["Markup"]="HTML";
$lang_front["Style"]="CSS";
$lang_front["Dynamics"]="Javascript";
var_dump($lang_front);
echo("<br>\n");
echo($lang_front["Style"] . " is used for style<br>\n");
$markup = $lang_front["Markup"];
echo("$markup is used for markup<br>\n");

echo("<h4>Associative backtend array:</h4>\n");
$lang_back = array("Server"=>"PHP", "Database"=>"SQL", "CGI"=>"Perl");
var_dump($lang_back);
echo("<br>\n");

echo("<h4>PHP specs array:</h4>\n");
$php_specs = array(
    "name"    => "PHP",
    "version"  => 7.3,
    "crossplatform"  => true,
);
var_dump($php_specs);
echo("<br>\n");
echo("<ul>\n");
echo("<li>Language: " . $php_specs["name"] . "</li>\n");
echo("<li>Version: " . $php_specs["version"] . "</li>\n");
echo("<li>Crossplatform: ");
if ($php_specs["crossplatform"]) {
    echo("Yes</li>\n");
} else {
    echo("No</li>\n");
}
echo("</ul>\n");

echo("<h4>Multilevel webdev array:</h4>\n");
$webdev["Frontend"] = array("Markup"=>"HTML", "Style"=>"CSS", "Dynamics"=>"Javascript");
$webdev["Backend"] = array("Server"=>"PHP", "Database"=>"SQL", "CGI"=>"Perl");
var_dump($webdev);
echo("<br>\n");
var_dump($webdev["Frontend"]);
echo("<br>\n");
var_dump($webdev["Backend"]);
echo("<br>\n");
echo("Frontend language for markup is " . $webdev["Frontend"]["Markup"] . "<br>\n");
$back_db = $webdev["Backend"]["Database"];
echo("Backend language for databases is $back_db<br>\n");

$num_array = array(8, 12.3, 2, 7.7, 42.1, 26, 34);
$min_elem = min($num_array);
echo("Min element: $min_elem<br>\n");
$max_elem = max($num_array);
echo("Max element: $max_elem<br>\n");

echo("<h4>NULL:</h4>\n");
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