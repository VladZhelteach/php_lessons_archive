<?php
include("include/functions.php");
include("include/header.php");
echo("<h1>Math in PHP</h1>\n");
print_page_address();
include("include/menu.php");
$num1 = 46;
$num2 = 14;
$sum1 = $num1 + $num2;
echo("Sum: $num1 + $num2 = $sum1<br>\n");
echo("Sum: $num1 + $num2 = " . ($num1 + $num2) . "<br>\n");
$diff1 = $num1 - $num2;
echo("Diff: $num1 - $num2 = $diff1<br>\n");

$multip1 = $num1 * $num2;
echo("Multiply: $num1 * $num2 = $multip1 <br>\n");
$divide1 = $num1 / $num2;
echo("Divide: $num1 / $num2 = $divide1<br>\n");
echo("Divide: $num1 / $num2 = " . round($divide1, 4) . "<br>\n");
$modulo1 = $num1 % $num2;
echo("Divide: $num1 % $num2 = $modulo1<br>\n");
$minus1 = $num2 - $num1;
$abs1 = abs($minus1);
echo("Absolute for $minus1 is $abs1<br>\n"); //abs
$for_ceil = 2.35;
$ceil1 = ceil($for_ceil);
echo("Ceil for $for_ceil is $ceil1<br>\n");
$for_floor = 2.95;
$floor1 = floor($for_floor);
echo("Floor for $for_floor is $floor1<br>\n");
$pi = pi();
echo("&#960 = " . round($pi, 4) . "<br>\n");
echo("Min: " . min(12, 42, 8.5, 10) . "<br>\n");
echo("Max: " . max(12, 42, 8.5, 10) . "<br>\n");
$pow1 = pow(2, 3);
echo("2<sup>3</sup> = $pow1<br>\n");
$pow2 = 2 ** 3;
echo("2<sup>3</sup> = $pow2<br>\n");
$for_sqrt = 25;
$sqrt1 = sqrt($for_sqrt);
echo("&#8730 $for_sqrt = $sqrt1<br>\n");
$rand1 = rand();
echo("Random: $rand1<br>\n");
$rand1 = rand(10, 60);
echo("Random: $rand1<br>\n");
echo("<h4>Discriminant example:</h4>\n");
$a = 1;
$b = -4;
$c = -5;

echo("$a" . "x<sup>2</sup>");
if ($b < 0) {
    echo(" - ");
} else {
    echo(" + ");
}
echo(abs($b) . "x");
if ($c < 0) {
    echo(" - ");
} else {
    echo(" + ");
}
echo(abs($c) . " = 0<br>\n");

$d = pow($b, 2) - 4 * $a * $c;
echo("D = $d<br>\n");
if ($d < 0) {
    echo("No answers!");
} elseif ($d == 0) {
    $x = (-$b) / (2 * $a);
    echo("X = $x<br>\n");
} else {
    $x1 = (-$b + sqrt($d)) / (2 * $a);
    $x2 = (-$b - sqrt($d)) / (2 * $a);
    echo("X<sub>1</sub> = $x1<br>\n");
    echo("X<sub>2</sub> = $x2<br>\n");
}
include("include/footer.php");
?>