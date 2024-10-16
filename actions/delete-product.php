<?php
    include "../classes/Product.php";

    $product = new product;

    $product->deleteProduct($_GET['product_id']);