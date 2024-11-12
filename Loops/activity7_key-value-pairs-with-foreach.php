<?php
$studentinfo = [
    "name" => "Jay",
    "age" => 19,
    "grade" => "A",
    "city" => "Baguio"
];

foreach ($studentinfo as $key => $value){
    echo $key . ": " . $value . "\n";
}
?>