<?php
$title = "Login Page";
include "templates/header.php";
include "db.php";

if ($_SERVER['REQUEST_METHOD'] == "POST") {

    $username = $_POST['username'];
    $password = $_POST['password'];


    $sql = "SELECT * FROM users WHERE phoneno = '$username' LIMIT 1";
    $result = mysqli_query($conn, $sql);
    $user_exists = mysqli_num_rows($result);


    if (!$user_exists) {
        echo "User Doesnot Exists";
    } else {


        $user = mysqli_fetch_assoc($result);

        if (password_verify($password, $user['password'])) {

            $_SESSION['phoneno'] = $username;
            $_SESSION['role'] = 2;

            header("Location: /admin/");
        } else {
            echo "sorry password doesnot matched";
        }
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