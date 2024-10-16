<?php

// echo 'test1';

include_once "../classes/product.php";

$product = new Product();

// echo $_POST['add_product'];

if(isset($_POST['add_product']))
{
    // echo 'test2';

    $product_name = $_POST['product_name'];
    $price = $_POST['price'];
    $quantity = $_POST['quantity'];

    $product->addProduct($product_name, $price, $quantity);
}
elseif(isset($_POST['edit_product']))
{
    $product_id = $_GET['product_id'];
    $product_name = $_POST['product_name'];
    $price = $_POST['price'];
    $quantity= $_POST['quantity'];

    $product->editProduct($product_id, $product_name, $quantity, $price);
}

