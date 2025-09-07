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

// if($pos){
//     echo "exisit"; 
// }else{
//     echo " doesnot exist";
// }

// echo  "The character $char is at index : $pos";


// reverse of a string 
$str = "orange";
$str1 = strrev($str);

// echo "$str and $str1 ";


// palindrome of a string

$pal = "racecar";
$pal_rev = strrev($pal);

if (strcmp($pal, $pal_rev) == 0) {
    // echo " $pal is palindrome ";
} else {
    // echo " $pal is not palindrome";
}






// implode / explode
$users = "ram shyam sita geeta";
// print_r(explode(' ', $users));


// $users = "ram, shyam , sita, geeta";
// print_r(explode(',', $users));


$u_array = explode(" ", $users);

print_r(implode(" ", $u_array));
