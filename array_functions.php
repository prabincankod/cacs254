<?php

// array
$boys = array("RAM", "HARI", "SHYAM");
$girls = ["sita", "gita", "sunita"];

// print_r($boys);

// sort($boys);
// print_r($boys);
// rsort($boys);
// print_r($boys);

$students = array_merge($boys, $girls);

// sort($students);
// print_r($students);
array_push($students, "sanam", "nana", "tanchohang");
array_pop($students); // removes tanchohang

array_unshift($students, "salman");
array_unshift($students, "jackie");
array_shift($students); // removes jackie from begining 
print_r($students);

$sliced = array_slice($students, 0, 6);
print_r($sliced);


array_splice($sliced, 0, 2);
print_r($sliced);