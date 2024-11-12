<?php
$password = "password123";
$input = "";

do {
    $input = readline("Please enter the password: ");
    if ($input === $password) {
        echo "Access Granted\n";
    } else {
        echo "Incorrect Password\n";
    }

} while ($input !== $password);
?>