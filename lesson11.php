<?php
//include("include/functions.php");
include("include/header.php");
echo("<h1>Functions</h1>\n");
//print_page_address();
include("include/menu.php");
function say_hello() {
    echo("Hello<br>\n");
    echo("This is function<br>\n");
    echo("Testing...<br>\n");
}

say_hello();
say_hello();

function say_num($num1) {
    echo("You entered: $num1<br>\n");
}

say_num(10);
say_num(15);
say_num(25.3);

say_num("Hello");
say_num(true);

function my_summ($num1, $num2, $num3) {
    $result = $num1 + $num2 + $num3;
    echo("Result: $result<br>\n");
}

my_summ(5, 9, 12);
my_summ(1, -40, 12.43);

function my_summ2($num1, $num2, $num3) {
    $result = $num1 + $num2 + $num3;
    return $result;
}

my_summ2(10, 20, 30);

$sum1 = my_summ2(10, -40, 8.47);
echo("Sum result: $sum1<br>\n");

$sum2 = my_summ2(5, -2, 2.21);
echo("Sum result: $sum2<br>\n");

function summ_array($arr) {
    $result = 0;
    foreach ($arr as $value) {
        $result = $result + $value;
    }
    return $result;
}

$array1 = array(21, 33, -5, 12.12, 17.1, -8);
$array2 = array(65, 121, -27);

$array1_summ = summ_array($array1);
$array2_summ = summ_array($array2);

echo("Array summ #1: $array1_summ<br>\n");
echo("Array summ #2: $array2_summ<br>\n");

include("include/footer.php");
?>

