<?php
function reverseString($input){
    $reversed = '';

    for ($i = strlen($input) - 1; $i >= 0; $i -- ) {
        $reversed .= $input[$i];
    }

    return $reversed;
}
$inputString = "Hello, World!";
echo "Original String: " . $inputString . "\n";
echo "Reversed StringL " . reverseString($inputString) . "\n";
?>

