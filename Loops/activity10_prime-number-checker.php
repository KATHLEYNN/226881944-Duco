<?php
echo "Enter a number: ";
$number = trim(fgets(STDIN));

function isPrime($number) {
    if ($number <= 1){
        return false;
    }

    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i == 0) {
            return false;
        }
    }

    return true;
}

if (isPrime($number)) {
    echo "$number is a prime number.\n";
} else {
    echo "$number is not a prime number\n";
}
?>