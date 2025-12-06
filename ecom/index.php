<?php

$title = "Homepage";
require "templates/header.php";
include "data.php";
?>
<div>
    <?php foreach ($products as $key => $product) {  ?>
        <div class="product_info">
            <img src="/uploads/nice.jpeg">
            <h2>
                <?php echo $product['name']; ?>
            </h2>
            <p>
                <?php echo $product['description']; ?>
            </p>
        </div>
    <?php } ?>
</div>




<?php
require "templates/footer.php"
?>