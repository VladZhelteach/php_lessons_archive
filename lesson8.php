<?php
include("include/functions.php");
include("include/header.php");
echo("<h1>Loops</h1>\n");
print_page_address();
include("include/menu.php");
/*for ($x=0; $x<10; $x++) {
    echo("test<br>");
    echo("$x<br>");
    echo("end<br><br>");
}*/

$prog_langs = array("PHP", "Java", "Pascal", "C++", "Python", "Ruby", "Perl", "Golang", "Rust", "Dart", "C#", "Lua");
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
//echo("Number of elements is $prog_langs_count<br>\n");

echo("<ul>\n");
for ($id=0; $id<$prog_langs_count; $id++) {
    echo("<li>" . $prog_langs[$id] . "</li>\n");
}
echo("</ul>\n");

echo("<ul>\n");
for ($id=$prog_langs_count-1; $id>=0; $id--) {
    echo("<li>" . $prog_langs[$id] . "</li>\n");
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
    if ($key == "crossplatform") {
        if ($value) {
            echo("<li>$key: Yes</li>\n");
        } else {
            echo("<li>$key: No</li>\n");
        }
    } else {
        echo("<li>$key: $value</li>");
    }
}
echo("</ul>\n");

$main_menu = array(
    "lessons_1_2"    => "Hello World",
    "lesson3"  => "Complex data types",
    "lesson4"  => "Math in PHP",
);

echo("<ul>\n");
foreach ($main_menu as $key => $value) {
    echo "<li><a href='$key.php'>$value</a></li>";
}
echo("</ul>\n");
include("include/footer.php");
?>