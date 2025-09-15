<?php

$name_error = '';
if ($_SERVER['REQUEST_METHOD'] == "GET") {

    echo "GET Request";

    if (isset($_GET['signup'])) {
        // echo " signup form submitted "; 

        $name = $_GET['name'];
        $namelen = strlen($name);



        if (!$namelen) {

            echo "<br> The name is empty, is is required";

            $name_error = "<span style='color:red'>Name is Required</span>";
        } else {
            echo "<br> your name is $name ";
        }
    }
}



?>



<h2>Sign Up Form </h2>

<form action="">


    Name : <input type="text" name="name"> <?php echo $name_error; ?>
    <br>
    <!-- Email : <input type="email" name="email" required> -->

    <br>
    <input type="reset" value="Clear">
    <input type="submit" name="signup" value="Signup">

</form>