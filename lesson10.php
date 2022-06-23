<?php
include("include/functions.php");
include("include/header.php");
echo("<h1>Loops</h1>\n");
print_page_address();
include("include/menu.php");
echo("<h4>Loop posts on website</h4>\n");
$x = 1;
while($x <= 5) {
    echo("<div style='background-color:#03fc84'><h4>");
    echo("<a href='#'>Post #$x</a>");
    echo("</h4>");
    if ($x == 2) {
        echo("<b>This is post #2.</b><br>");
        echo("<img src='https://web-creator.ru/uploads/Page/43/php.svg' width='250px'></div>");
    } else {
        echo("Lorem Ipsum is simply dummy text of the printing and typesetting industry.<br>");
        echo("<img src='https://lurkmore.so/images/thumb/e/e8/Test_ttp_big.jpg/220px-Test_ttp_big.jpg'></div>");
    }
    $x++;
}

echo("<h4>Break</h4>\n");
for ($x = 0; $x < 10; $x++) {
    echo "The number is: $x <br>\n";
    if ($x == 4) {
        echo("Number $x means stop!<br>\n");
        break;
    }
}

echo("<h4>Continue</h4>\n");
for ($x = 0; $x < 10; $x++) {
    if ($x == 4) {
        continue;
    }
    echo "The number is: $x <br>\n";
}

echo("<h4>Break</h4>\n");
$x = 0;
while($x < 10) {
    echo "The number is: $x <br>\n";
    if ($x == 4) {
        echo("Number $x means stop!<br>\n");
        break;
    }
    $x++;
}

echo("<h4>Continue</h4>\n");
$x = 0;
while($x < 10) {
    echo "The number is: $x <br>\n";
    $x++;
    if ($x == 4) {
        continue;
    }
}

echo("<h4>Interactive #1</h4>\n");
$inter1 = array("C++", "Pascal", "Python", "PHP", "C#", "Java");
$inter1_count = count($inter1);
for ($x = 0; $x < $inter1_count; $x++) {
    if ($inter1[$x] == "PHP") {
        echo("PHP found!");
        break;
    }
    echo("Current search is: $inter1[$x] <br>\n");
}

echo("<h4>Interactive #2</h4>\n");
$inter2 = array("PHP", "HTML", "CSS", "Pascal", "Javascript");
$inter2_count = count($inter2);
echo("<ul>");
$x = 0;
while($x < $inter2_count) {
    echo("<li>$inter2[$x]</li>\n");
    $x++;
    if ($inter2[$x] == "Pascal") {
        continue;
    }
}
echo("</ul>");
include("include/footer.php");
?>