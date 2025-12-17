<?php
include "db.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name     = $_POST['name'];
    $phone    = $_POST['phone'];
    $address  = $_POST['address'];
    $password = $_POST['password'];


    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);


    // echo "hashed password: $hashedPassword";


    // checking phonenumber if it exists 
    $sql = "SELECT * FROM users WHERE phoneno='$phone' LIMIT 1";

    $result = mysqli_query($conn, $sql);
    $phone_exists = mysqli_num_rows($result);
    if ($phone_exists) {
        echo "Error occured: phone already exists!";
    } else {
        $sql = "INSERT INTO users (name, phoneno, address,  password)
            VALUES ('$name', '$phone', '$address', '$hashedPassword')";

        if (mysqli_query($conn, $sql)) {
            header("Location: /login.php");
        } else {
            echo "Error: " . mysqli_error($conn);
        }
    }
}
?>

<form action="register.php" method="POST">
    <input type="text" name="name" placeholder="Full Name" required><br>
    <input type="" name="phone" placeholder="Phone Number" required><br>
    <input type="text" name="address" placeholder="Address" required><br>
    <input type="password" name="password" placeholder="Password" required><br>
    <button type="submit">Register</button>
</form>