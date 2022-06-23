<?php
include("include/functions.php");
include("include/header.php");
echo("<h1>Loops</h1>\n");
print_page_address();
include("include/menu.php");
echo("<h4>While</h4>\n");
$x = 0;
while($x <= 100) {
    echo("The number is: $x <br>\n");
    $x+=10;
}

echo("<h4>Loop posts on website</h4>\n");
$x = 6;
while($x <= 10) {
    echo("<div style='background-color:#03fc84'><h4>");
    echo("<a href='#'>Post #$x</a>");
    echo("</h4>");
    echo("Lorem Ipsum is simply dummy text of the printing and typesetting industry.<br>");
    echo("<img src='https://lurkmore.so/images/thumb/e/e8/Test_ttp_big.jpg/220px-Test_ttp_big.jpg'></div>");
    $x++;
}

echo("<h4>While</h4>\n");
$x = 7;
while($x <= 35) {
    echo("<div style='background-color:#03fc84'><h4>");
    echo("<a href='#'>Sunday post #$x</a>");
    echo("</h4>");
    echo("This is digest post for every Sunday.<br>");
    echo("<img src='https://lurkmore.so/images/thumb/e/e8/Test_ttp_big.jpg/220px-Test_ttp_big.jpg'></div>");
    $x+=7;
}

echo("<h4>Do-While</h4>\n");
$x = 1;
do {
    echo "The number is: $x <br>\n";
    $x++;
} while ($x <= 5);

echo("<h4>While</h4>\n");
$x = 0;
while($x >= 100) {
    echo("The number is: $x <br>\n");
    $x+=10;
}

echo("<h4>Do-While</h4>\n");
$x = 0;
do {
    echo "The number is: $x <br>\n";
    $x++;
} while ($x >= 100);

//раздел
echo("<h4>Break</h4>\n");
for ($x = 0; $x < 10; $x++) {
    if ($x == 4) {
        break;
    }
    echo "The number is: $x <br>\n";
}

echo("<h4>Continue</h4>\n");
for ($x = 0; $x < 10; $x++) {
    if ($x == 4) {
        continue;
    }
    echo "The number is: $x <br>\n";
}

echo("<h1>Loops</h1>\n");

echo("<h4>Interactive #1</h4>\n");
$inter1 = array("C++", "Pascal", "Python", "PHP", "C#", "Java");
for ($x = 0; $x < 10; $x++) {
    if ($x == 4) {
        break;
    }
    echo "The number is: $x <br>\n";
}

echo("<h4>Interactive #2</h4>\n");
$inter2 = array("PHP", "HTML", "CSS", "Pascal", "Javascript");
for ($x = 0; $x < 10; $x++) {
    if ($x == 4) {
        continue;
    }
    echo "The number is: $x <br>\n";
}
include("include/footer.php");
?>