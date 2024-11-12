<?php
$first = 0;
$second = 1;
$count = 0;

echo "First 10 Fibonacci Numbers: \n";

while ($count < 10){
    echo $first . " ";
    $next = $first + $second;
    $first = $second;
    $second = $next;
    $count++;
}

echo "\n";
?>