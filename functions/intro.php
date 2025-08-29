<?php


// introduction to php
// named function
function hello()
{

    echo "HEllo bca 4th \n";
}
// hello();

// parameterised funtion , (also supports default value)
function hello_user($name = "Ronit")
{
    echo "Hello $name from Computer \n";
}
$user = "Prabin Subedi";
// hello_user(); // no arguments
// hello_user($user);// with arguments




function add($a, $b = 2, $c = 3)
{
    echo ($a + $b + $c);
}


// add(3);


function div($a, $b)
{

    echo $a / $b;
}
// calling function with named arguments
// div(b: 2, a: 4);



// function returning values
function can_user_vote($age)
{
    if ($age >= 18) {
        return true;
    } else {
        return  false;
    }
}


if(can_user_vote(17)){
    echo "user can vote";
}else{
    echo "user can't vote";

}