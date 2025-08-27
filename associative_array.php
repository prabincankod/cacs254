<?php

// associative array


$students = [];
$students["prabin"] = 25;
$students["ronit"] = 28;
$students["sandesh"] = 22;

// $students[] = 22; // avoid this in associative array 

$marks = [
    "prabin" => 25,
    "ronit" => 28,
    "sandesh" => 22,
];



// print_r($marks);
// print_r($students);

// var_dump($students);
// var_dump($marks);



// foreach ($marks as $mark) {

//     echo "$mark \n";
// }

// foreach ($marks as $name => $mark) {

//     echo "$name secured $mark marks \n";
// }







$keys =  array_keys($marks);
$values = array_values($marks);

// for ($i = 0; $i < count($marks); $i++) {

//     $key = $keys[$i];

//     echo "marks $keys[$i] scored  $marks[$key]  \n";
// }

for ($i = 0; $i < count($keys); $i++) {

    $key = $keys[$i];

    echo "marks socred by $key  =>  $values[$i]  \n";
}
