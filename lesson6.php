<?php
include("include/functions.php");
include("include/header.php");
echo("<h1>Complex data types and loops</h1>\n");
print_page_address();
include("include/menu.php");
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
if ($php_specs["crossplatform"] == true) {
    echo("Yes</li>\n");
} else {
    echo("No</li>\n");
}
echo("</ul>\n");

echo("<h4>Homework:</h4>\n");
$homework["name"] = "Vladyslav";
$homework["age"] = 28;
$homework["knows php"] = true;
$homework["also knows"] = "C++, Java";
echo("<ul>\n");
echo("<li>Name: " . $homework["name"] . "</li>\n");
echo("<li>Age: " . $homework["age"] . "</li>\n");
echo("<li>Knows PHP: ");
if ($homework["knows php"] == true) {
    echo("Yes</li>\n");
} else {
    echo("No</li>\n");
}
echo("<li>Also knows: " . $homework["also knows"] . "</li>\n");
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
include("include/footer.php");
?>