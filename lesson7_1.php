<!DOCTYPE html>
<html>
<head>
    <title>Loops</title>
</head>
<body>
<?php
echo("<h1>Loops</h1>\n");

for ($x=0; $x<10; $x++) {
    echo("test<br>");
    echo("$x<br>");
    echo("end<br>");
}

echo("<h4>Array of programming languages:</h4>\n");
$prog_langs = array("PHP", "Java", "Pascal", "C++", "Python", "Ruby", "Perl", "Golang", "Rust", "Dart");
echo("$prog_langs<br>\n");
var_dump($prog_langs);
echo("<ul>\n");
echo("<li> $prog_langs[0] </li>\n");
echo("<li>" . $prog_langs[1] . "</li>\n");
echo("<li>" . $prog_langs[2] . "</li>\n");
echo("<li>" . $prog_langs[3] . "</li>\n");
echo("<li>" . $prog_langs[4] . "</li>\n");
echo("<li>" . $prog_langs[5] . "</li>\n");
echo("<li>" . $prog_langs[6] . "</li>\n");
echo("<li>" . $prog_langs[7] . "</li>\n");
echo("<li>" . $prog_langs[8] . "</li>\n");
echo("<li>" . $prog_langs[9] . "</li>\n");
echo("</ul>\n");
$prog_langs_count = count($prog_langs);
echo("Number of elements is $prog_langs_count<br>\n");

echo("<br>\n");
echo("<ul>\n");
for ($x=0; $x<$prog_langs_count; $x++) {
    echo("<li>" . $prog_langs[$x] . "</li>\n");
}
echo("</ul>\n");

echo("<ul>\n");
foreach ($prog_langs as $value) {
    echo("<li><b>" . $value . "</b></li>\n");
}
echo("</ul>\n");

echo("<h4>PHP specs array:</h4>\n");
$php_specs = array(
    "name"    => "PHP",
    "version"  => 7.3,
    "crossplatform"  => true,
    "task"  => "backend",
);
var_dump($php_specs);
echo("<ul>\n");
echo("<li>Language: " . $php_specs["name"] . "</li>\n");
echo("<li>Version: " . $php_specs["version"] . "</li>\n");
echo("<li>Crossplatform: ");
if ($php_specs["crossplatform"]) {
    echo("Yes</li>\n");
} else {
    echo("No</li>\n");
}
echo("<li>Task: " . $php_specs["task"] . "</li>\n");
echo("</ul>\n");

echo("<ul>\n");
foreach ($php_specs as $key => $value) {
    echo "<li>$key: $value</li>";
}
echo("</ul>\n");

$main_menu = array(
    "lessons_1_2"    => "Hello World",
    "lesson3"  => "Complex data types and loops",
    "lesson4"  => "Math in PHP",
);

echo("<ul>\n");
foreach ($main_menu as $key => $value) {
    echo "<li><a href='$key.php'>$value</a></li>";
}
echo("</ul>\n");

?>
</body>
</html>