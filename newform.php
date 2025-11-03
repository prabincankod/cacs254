<?php

$gender = "";
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    print_r($_POST);
    $gender = $_POST['gender'];
    if (strcmp($gender, "M") == 0) {
        $gender = "Male";
    } elseif (strcmp($gender, "F") == 0) {
        $gender = "Female";
    } else {
        $gender = "Others";
    }
    echo "you selected $gender";
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
    <form method="POST">
        Gender:

        <input type="radio" name="gender" value="M"> Male
        <?php


        if ($gender == "Male") {

            echo "checked";
        }
        ?>

        <input type="radio" name="gender" value="F"> Female

        <?php
        if ($gender == "Female") {

            echo "checked";
        }
        ?>
        <input type="radio" name="gender" value="O"> Others

        <?php
        if ($gender == "Others") {

            echo "checked";
        }
        ?>
        <input type="submit" value="Find Gender">


    </form>
</body>

</html>