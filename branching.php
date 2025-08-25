<?php


$age = 91;




// if 

if ($age < 18) {

    echo ("You cannot vote \n");
    // die();
    // exit();
} else {

    if ($age == 18) {
        echo ("Welcome new Voter \n");
    }


    echo ("You can vote \n");
}




// if else 
// if else if 



if ($age > 80) {
    echo ("welcome senior citizen to voting arena.");
} else if ($age > 18) {
    echo ("Hello Voter, welcome to voting arena.");
} else if ($age == 18) {
    echo ("Welcome new Voter");
}else{
    echo "Sorry, You cannot vote";
}

echo("\n");




$day = 2; 

switch ($day) {
    case 1:
        echo "";
        break;
    case 2:
        echo "MONDAY";
        break;
    default : 
        echo "OOB"; 

}


echo ("\n");

switch($day){
    case 1:
    case 2:
    case 3:
        echo "College Day";
        break;
    default:
        echo "Holiday";
        break;
}