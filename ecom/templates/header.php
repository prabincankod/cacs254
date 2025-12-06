<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="static/css/main.css">
    <title>
        <?php
        echo $title ?? "Homepage";
        ?>| Ecommerce Website
    </title>
</head>

<body>

    <nav>
        <a href="/">
            Home
        </a>
        <a href="/about.php">
            About
        </a>
        <a href="/login.php">
            Login
        </a>
    </nav>