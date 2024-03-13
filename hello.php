<?php
function findMaxMin($num1, $num2, $num3) {
    $max = max($num1, $num2, $num3);
    $min = min($num1, $num2, $num3);
    echo "Наибольшее число: " . $max . "<br>";
    echo "Наименьшее число: " . $min . "<br>";
}

$num1 = 10;
$num2 = 25;
$num3 = 7;

findMaxMin($num1, $num2, $num3);
?>



