<?php
    $num1 = 10;
    $num2 = 20;
    $num3 = 30;
    $num4 = 40;

    $sum = $num1 + $num2;
    $diff = $num3 - $num2;
    $prod = $num1 * $num4;
    $quot = $num4 / $num2;
    $total = $sum + $diff + $prod + $quot;
    $average = $total / 4;

    echo "The Sum of $num1 and $num2 is $sum. <br><br>";
    echo "The Difference between $num3 and $num2 is $diff. <br><br>";
    echo "The Product of $num1 and $num4 is $prod. <br><br>";
    echo "The Quotient of $num4 and $num2 is $quot. <br><br>";
    echo "The Total of all result is $total. <br><br>";
    echo "The Average of all results is $average.";
?>