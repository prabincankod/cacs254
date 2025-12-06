<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: /login.php");
} else {
    if (!isset($_SESSION['role'])) {
        echo "no role";
        exit();
    } else {
        if ($_SESSION['role'] == 1) {
            header("Location: /admin/");
        } elseif ($_SESSION['role'] != 2) {
            echo "wrong place";
            exit();
        }
    }
}

?>
this is admin