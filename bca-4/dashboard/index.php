<?php
session_start();


// checking if user is logged in or not
if (!isset($_SESSION['role'])) {
    header("Location: /login.php");
}


echo $_SESSION['username'];
echo $_SESSION['name'];
?>
<!-- hello -->