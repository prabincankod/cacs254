<?php



// Numeric Index Array
$boys = array("RAM", "HARI", "SHYAM");
$girls = ["sita", "gita", "sunita"];
$age = 10;

// var_dump($boys);
// var_dump($girls);
// var_dump($age);



// $cities = [];
// $cities[] = "BRT"; // 0 index
// $cities[] = "Dharan"; // 1 index

// print_r($cities);


// $mix_max = ["ram", "shyam", 99, 10, ["prabin","subedi"]];
// print_r($mix_max);


// echo count($boys);
// echo "\n";
// echo sizeof($boys);

$count = count($boys);

for ($i = 0 ;$i< $count; $i ++ ){

    echo "Hello $boys[$i] \n";
}


// with value only
foreach ($girls as $girl ) {
    echo "Hello $girl \n";
    
}


// with key and value
foreach ($girls as $key => $girl ) {
    echo "Hello id:$key $girl \n";
    
}