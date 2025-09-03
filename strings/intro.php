<?php

$fname =  "prabnin";
$lname = "subedi";
// echo $fname[0];

// string concatenation
$full_name = $fname . " " . $lname;
// echo ($full_name);


// string interploation
// echo "Hello $full_name";

// finding length
// echo strlen($full_name);



$random = "   abc   ";

// trimming , rtrim ,  ltrim and trim.


// string positon 
$fruit = "dragon apple";

$char = "q";
$pos = strpos($fruit, $char);

if($pos){
    echo "exisit"; 
}else{
    echo " doesnot exist";
}

// echo  "The character $char is at index : $pos";
