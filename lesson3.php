<?php
include("include/functions.php");
include("include/header.php");
echo("<h1>Complex data types and loops</h1>\n");
print_page_address();
include("include/menu.php");
echo("<h4>Array of programming languages:</h4>\n");
$prog_langs = array("PHP", "Java", "Pascal", "C++", "Python", "Ruby", "Perl");
echo("$prog_langs<br>\n");
echo($prog_langs);
echo("<br>\n");
var_dump($prog_langs);
echo("<br>\n");
$prog_langs_count = count($prog_langs);
echo("Number of elements is $prog_langs_count<br>\n");
echo("First element is $prog_langs[0]<br>\n");
echo("Element #3 is $prog_langs[3]<br>\n");
echo("Element #10 is $prog_langs[10]<br>\n");
echo("<ul>\n");
echo("<li>" . $prog_langs[0] . "</li>\n");
echo("<li>" . $prog_langs[1] . "</li>\n");
echo("<li>" . $prog_langs[2] . "</li>\n");
echo("<li>" . $prog_langs[3] . "</li>\n");
echo("<li>" . $prog_langs[4] . "</li>\n");
echo("<li>" . $prog_langs[5] . "</li>\n");
echo("<li>" . $prog_langs[6] . "</li>\n");
echo("</ul>\n");

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
$web_lang[1]="Javascript";
$web_lang[2]="Java";
$web_lang[3]="Python";
$web_lang[4]="Ruby";
var_dump($web_lang);
echo("<br>\n");

echo("<h4>Array of tables:</h4>\n");
$tables = array(
0 => "users",
1 =>"pages",
2 => "posts",
3 =>"comments",
);
var_dump($tables);
echo("<br>\n");

echo("<h4>Array of roles:</h4>\n");
$roles = array(
    "admin",
    "moderator",
6 => "user",
    "guest",
);
var_dump($roles);
echo("<br>\n");

echo("<h4>Random example array:</h4>\n");
$example_array = array("PHP", 1, true, 2.12, array("html", "css"));
var_dump($example_array);
echo("<br>\n");
echo("String element is $example_array[0]<br>\n");
echo("Bool element is $example_array[2]<br>\n");

echo("<h4>Random languages array:</h4>\n");
$multi_array = array(
    1    => 'Fortran',
    '1'  => 'Focal', // "Focal" overwrite "Fortran"
    1.5  => 'C++', // "C++" overwrite "Focal"
    -1 => 'Lisp',
    '01'  => 'Prolog', // no rewriting 1
    '1.5' => 'COBOL', // no rewriting 1
    true => 'Coke', // "Coke" overwrite "C++"
    false => 'Perl', //"h" written to 0
    '' => 'Clojure',
    null => 'Assembly', // "j" overwrite "i"
    'Lua', // k" written to 2. because > 1
    2 => 'Haxe', // "l" overwrite "k"
);
var_dump($multi_array);
echo("<br>\n");

echo("<h4>Associative frontend array:</h4>\n");
$lang_front["Markup"]="HTML";
$lang_front["Style"]="CSS";
$lang_front["Dynamics"]="Javascript";
var_dump($lang_front);
echo("<br>\n");
echo($lang_front["Style"] . " is used for style<br>\n");
$markup = $lang_front["Markup"];
echo($lang_front["Markup"] . " is used for markup<br>\n");

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
if ($php_specs["crossplatform"] == true) {
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

echo("<h4>NULL:</h4>\n");
$var_null = NULL;
echo("Null variable: " . $var_null . "<br>\n");
echo("Fake variable: " . $fake_var . "<br>\n");
var_dump($var_null);
echo("<br>\n");
var_dump($fake_var);
echo("<br>\n");

$check_null1 = is_null($var_null);
echo("Null check: $check_null1<br>\n");
var_dump($check_null1);
echo("<br>\n");

$array1 = array();
echo("Empty array: $array1<br>\n");
var_dump($array1);
echo("<br>\n");

$var_n1 = 10;
echo("Just created variable: $var_n1<br>\n");
$check_null2 = is_null($var_n1);
echo("Just created variable is null: ");
var_dump($check_null2);
echo("<br>\n");
unset($var_n1);
echo("Just unset variable: $var_n1<br>\n");
var_dump($var_n1);
echo("<br>\n");
$check_null3 = is_null($var_n1);
echo("Just unset variable is null: ");
var_dump($check_null3);
echo("<br>\n");



/*for ($x=0; $x<10; $x++) {
    echo $x;
}

foreach ($names as $key => $value) {
    echo "<b>$value $key</b><br>";
}

foreach ($names as $value) {
    echo "<b>$value</b><br>";
}

while ($x <= 10):
    echo $x;
    $x++;
endwhile;

do {
    echo $x;
} while ($x++<10);*/

$php_specs1 = array( "PHP", 7.3, true);
echo("<br>\n");
echo("<ul>\n");
echo("<li>Language: " . $php_specs[0] . "</li>\n");
echo("<li>Version: " . $php_specs[1] . "</li>\n");
echo("<li>Crossplatform: ");
if ($php_specs[2] == true) {
    echo("Yes</li>\n");
} else {
    echo("No</li>\n");
}
echo("</ul>\n");

$homework = array( "Vladyslav", 28, true, "C++, Java");
echo("<br>\n");
echo("<ul>\n");
echo("<li>Language: " . $php_specs[0] . "</li>\n");
echo("<li>Version: " . $php_specs[1] . "</li>\n");
echo("<li>Knows PHP: ");
if ($php_specs[2] == true) {
    echo("Yes</li>\n");
} else {
    echo("No</li>\n");
}
echo("<li>Also knows: " . $php_specs[3] . "</li>\n");
echo("</ul>\n");
include("include/footer.php");
?>