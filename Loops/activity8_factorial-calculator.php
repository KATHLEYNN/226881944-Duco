<?php

function calculateFactorial($number) {

    if ($number == 0 || $number == 1) {
        return 1;
    }

    $factorial = 1;

    for ($i = 1; $i <= $number; $i++) {
        $factorial *= $i; 
    }

    return $factorial;
}

$number = 5; 


echo "The factorial of $number is: " . calculateFactorial($number);
?>