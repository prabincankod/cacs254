<?php

echo  "<pre>";
print_r($_GET);
echo  "</pre>";

if(isset($_GET['q_submit'])){

    echo "q_search button clicked";
}


?>

<form action="">

    Search : <input type="text" name="q" id="q">

    <br>
    <input type="reset" value="reset">
    <input type="submit" value="search" name="q_submit">
    <!-- <input type="submit" value="search" > -->
</form>

<form action="">

    Country Search : <input type="text" name="country" id="country">

    <br>
    <input type="reset" value="reset">
    <input type="submit" value="submit" name="country_submit">

</form>