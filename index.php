<?php
$age = 20;
$name = "prabin";

// string concatenation
echo "Hello " . $name . ". Your age is " . $age . "<br>";

echo "I'm fine <br>";

echo ' Ram said "I am fine" <br>';
// escape sequence
echo "Ram said \"i am fine\" <br>";


// string interpolation
echo "Hello $name. Your age is $age <br>";
echo 'Hello $name. Your age is $age <br>'; // x 
echo "Hello \$name. Your age is \$age <br>"; // x

// to prinnt "$name is prabin, $age is 20"
echo "\$name is $name, \$age is $age <br>";





$name = "prabin";
$phone = "9811012158";
$student = true;
$todays_expenses = 100;
$joined_date = date("y-m-d");


if ($student) {
    $todays_expenses = $todays_expenses * 0.9;
}


echo "todays expenses is $todays_expenses <br>";


?>


<h1>

</h1>