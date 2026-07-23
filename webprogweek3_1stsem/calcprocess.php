<?php
$n1 = $_POST["num1"];
$n2 = $_POST["num2"];

$operations = $_POST["operators"];


$add = number_format($n1 + $n1, 2);
$subtract = number_format($n1 - $n1, 2);
$multiply = number_format($n1 * $n1, 2);
$divide = number_format($n1 / $n1, 2);

if ($operations == $add) {
    echo "The Sum of $n1 and $n2 is $add";
}
elseif ($operations == $diff) {
    echo "The Diffenrence of $n1 and $n2 is $subtract";
}
elseif ($operations == $prod) {
    echo "The Product of $n1 and $n2 is $multiply";
}
elseif ($operations == $quot) {
    echo "The Quotient of $n1 and $n2 is $divide";
}
?>