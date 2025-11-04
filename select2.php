<?php

$countries = [
    "np" => "Nepal",
    "in" => "India",
    "jp" => "Japan",
    "ch" => "China"
];

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $country = $_POST['country'];
    if (key_exists($country, $countries)) {
        echo "You selected $country";
    } else {
        echo "please select a country";
    }
}




?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form action="" method="post">

        Select your country:

        <select name="country" id="">


            <option value="">

                Select A country
            </option>

            <?php



            echo $country;
            foreach ($countries as $code => $name) {

                $isSelected = ($code == $country);
                echo $isSelected;


                echo (" <option value=\"$code\" selected='' >");
                echo ($name);
                echo (" </option >");
            }


            ?>


        </select>


        <input type="submit" value="Submit">
    </form>

</body>

</html>