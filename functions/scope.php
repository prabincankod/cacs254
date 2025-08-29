<?php

$name = "ramji";
$age = 20;


function  add()
{

    $GLOBALS['name'] = "prabin"; // changing value of $name defined in global scope
    global $name; // making $name accessible in local scope

    $addr = "biratnagar"; // local scoped variable 
    $GLOBALS['address'] = $addr;  // inserting it to the global scope
    echo "$name lives in $addr \n";
}

add();
echo "Hello $name , your age is $age  : $address\n";


// print_r($GLOBALS);
