<?php
$arr = [1, 2, 3, 4, 5, 6, 7, 8];


$new_arr = array_slice($arr, 1, 2);


// var_dump($arr);
// var_dump($new_arr);



// removing some , adding none
array_splice($arr, 1, 3);
// var_dump($arr); // this could be verbose
print_r($arr);


// removing none , adding some
array_splice($arr, 1, 0, ['ram', 'shyam', 'hari']);
// var_dump($arr); // this could be verbose
print_r($arr);


// removing some , adding some
array_splice($arr, 0, 5, ['ram', 'shyam', 'hari']);
// var_dump($arr); // this could be verbose
print_r($arr);

$newnew = array_slice($arr, -4, 2);

print_r($newnew);