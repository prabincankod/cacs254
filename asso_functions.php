<?php
$se = [
    "prabin" => 30,
    "ronit" => 40,
    "sandesh" => 10,
];
$wt = [
    "prabin" => 30,
    "ronit" => 12,
    "sandesh" => 17,
];



$new = array_merge_recursive($se, $wt);
// print_r($new);


$keys = array_keys($new);
$values = array_values($new);
print_r($keys);
print_r($values);
