<?php


if ($_SERVER["REQUEST_METHOD"] == 'POST') {
    session_start();

    $username = $_POST['username'];
    $name = $_POST['name'];


    $_SESSION['username'] = $username;
    $_SESSION['name'] = $name;
    $_SESSION['role'] = "admin";
    
    header('Location: /dashboard/');
}

?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
</head>

<body>


    <form action="" method="post">


        Username : <input type="text" name="username" id="">
        Name : <input type="text" name="name" id="">
        <!-- Password : <input type="text" name="password"> -->

        <input type="submit" name="Login">
    </form>
</body>

</html>