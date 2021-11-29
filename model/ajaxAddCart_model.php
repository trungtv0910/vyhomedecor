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

echo $slq = '<p class="header__nav-control-cart-about">                         
    <span id="show_quantity" class="header__nav-control-cart-quantity">' . $count_cart . '</span>
    ( items )
</p>
<ul class="header__nav-control-cart-list header__nav-control-cart-list--no-item" style="display:flex">
<li class="header__nav-control-cart-item" style="width:100%">
    <div class="header__nav-control-cart-item-name">
        <div class="status" style="display:flex; gap:10px">
            <img width="20px" src="images/cart-icon/Flat_tick_icon.svg" alt="">
            <p class="text">Thêm vào giỏ hàng thành công!</p>
        </div>
        <div class="dieuhuong">
            <button class="btn-view-cart" href="index.php?act=shoppingcart">Xem giỏ hàng và thanh toán</button>
        </div>
    </div>
</li>
</ul>



';
?>

