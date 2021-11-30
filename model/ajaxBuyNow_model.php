<?php

include_once 'pdo.php';
include_once 'account_model.php';
init();
include_once 'cart_model.php';
include_once 'product_model.php';

$prodId = $_POST['prodId'];
$price = $_POST['price'];
$quantity = $_POST['quantity'];
$image = $_POST['image'];

$get_prod =  loadOne_product($prodId);
$addToCart =    addTocart($prodId, $price, $image, $quantity, $get_prod);
$count_cart = count($_SESSION['login']['mycart']);

echo "<script>window.location='index.php?act=shoppingcart'</script>";
?>

