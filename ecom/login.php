<?php
$title = "Login Page";
require "templates/header.php";
include "data.php";

if ($_SERVER['REQUEST_METHOD'] == "POST") {

    $username = $_POST['username'];
    $password = $_POST['password'];

    if (!key_exists($username, $users)) {
        echo "Username Doesnot Exists";
        exit();
    }

    if (password_verify($password, $users[$username])) {
        // echo "password matched";

        $_SESSION['username'] = $username;
        $_SESSION['role'] = 2;


        echo $_SESSION['username'];
        header("Location: /admin/");
    } else {
        echo "sorry password doesnot matched";
    }
}

?>



<form action="" method="post">
    username : <input type="text" name="username">
    <br>
    password : <input type="password" name="password">
    <br>
    <input type="submit" value="Login">

</form>

<?php
require "templates/footer.php";
?>