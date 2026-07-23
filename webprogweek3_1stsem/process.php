<?php
$n1 = $_POST["num1"];
$n2 = $_POST["num2"];

$add = number_format($n1 + $n1, 2);
#$add = $n1 + $n2;  

#echo "The Sum of $n1 and $n2 is $add".number_format($add, 2);
echo "The Sum of $n1 and $n2 is $add";
?>