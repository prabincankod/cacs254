<?php

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $country = $_POST['country'];
    if (strlen($country) == 0) {
        echo "please select a country";
    } else {
        echo "You selected $country";
    }
}

$countries = ['']


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
            <option value="nepal">

                Nepal
            </option>
            <option value="india">

                India
            </option>
            <option value="el-salvador">

                El Salvador
            </option>
        </select>


        <input type="submit" value="Submit">
    </form>

</body>

</html>