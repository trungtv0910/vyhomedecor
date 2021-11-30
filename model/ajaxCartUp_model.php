<?php

include_once 'account_model.php';
include_once 'global.php';
init();
include_once 'cart_model.php';
include_once 'product_model.php';

$prodIdAjax = $_POST['prodId'];
$count = 1;
$mycartAjax = $_SESSION['login']['mycart'];
foreach ($mycartAjax as $key => $value) {
    if ($prodIdAjax == $key) {
          $_SESSION['login']['mycart'][$key]['quantity'] += 1;
        break;
    }
}
$mycart = $_SESSION['login']['mycart'];

?>


<h3 class="cart__heading">Giỏ hàng của tôi</h3>
<table class="cart__body">
    <thead class="cart__title">
        <th class="cart__title-method"></th>
        <th class="cart__title-info">Thông tin sản phẩm</th>
        <th class="cart__title-price">Giá</th>
        <th class="cart__title-quantity">Số lượng</th>
        <th class="cart__title-total">Tổng giá trị</th>
        <th class="cart__title-total"></th>
    </thead>
    <tbody class="cart__list" id="cart__list">
        <?php
        $i = 1;
        $total = 0;
        foreach ($mycart as $key => $value) {
            $price_quantity = $value['price'] * $value['quantity'];
            $total += $price_quantity;
        ?>
            <!-- <form action="" method="post"> -->
            <tr style="border-bottom: 1px solid #ccc;" class="cart__item">
                <td class="cart__method">
                    <a href="index.php?act=shoppingcart&remove_product=<?= $key ?>" class="cart__delete"><i class="fas fa-times-circle"></i></a>
                    <!-- <button class="cart__delete" value="<?= $key ?>" ><i class="fas fa-times-circle"></i></button> -->

                </td>
                <td class="cart__info">
                    <a href="#" class="cart__link">
                        <img src="<?= BASE_URL ?>uploads/<?= $value['image'] ?>" alt="" class="cart__img">
                    </a>
                    <h4 class="cart__name"><?= $value['prodName'] ?></h4>
                </td>
                <td class="cart__price"><?= number_format($value['price'], 0, ',', '.') ?>₫</td>
                <td class="cart__quantity<?= $i ?>">
                    <!-- <input onclick="var result = document.querySelector('.quantity<?= $i ?>'); var qty = result.value; if( !isNaN(qty) &amp;&amp; qty > 1 ) result.value--;return false;" type='button' value='-' class="quantity-control downQuality"/> -->
                    <button onclick="var result = document.querySelector('.quantity<?= $i ?>'); var qty = result.value; if( !isNaN(qty) &amp;&amp; qty > 1 ) result.value--;return false;" type='button' value='<?= $key ?>' class="quantity-control downQuality">-</button>

                    <input class='quantity quantity<?= $i ?>' min='1' name='quantity' type='text' value='<?= $value['quantity'] ?>' />
                    <!-- <input onclick="var result = document.querySelector('.quantity<?= $i ?>'); var qty = result.value; if( !isNaN(qty)) result.value++;return false;" type='button' value='+' class="quantity-control upQuality"/> -->
                    <button onclick="var result = document.querySelector('.quantity<?= $i ?>'); var qty = result.value; if( !isNaN(qty)) result.value++;return false;" type='button' value='<?= $key ?>' class="quantity-control upQuality">+</button>

                </td>
                <td class="cart__total"><?= number_format($price_quantity, 0, ',', '.'); ?>₫</td>
                <td class="cart__update"><button type="submit"><i class="fas fa-redo"></i></button></td>
            </tr>
            <!-- </form> -->
        <?php $i++;
        } ?>
    </tbody>
</table>
<div class="cart__footer row">
    <div class="col l-6">
        <div class="cart__note">
            <p class="cart__note-heading">Ghi chú đơn hàng</p>
            <input type="text" class="cart__note-input">
        </div>
    </div>
    <div class="col l-6">
        <div class="cart__control">
            <p class="cart__control-heading">Tất cả <span class="cart__control-price"><?= number_format($total, 0, ',', '.') ?>₫</span></p>
            <span class="cart__control-desc">(Chưa bao gồm phí vận chuyển)</span>
            <div class="cart__control-btn">
                <a href="index.php" class="cart__control-link"><i class="fas fa-arrow-left"></i> Tiếp tục mua sắm</a>
                <a href="index.php?act=bill-confirm" class="cart__control-link">Thanh toán</a>
            </div>
        </div>
    </div>
</div>
<script src="<?=BASE_URL?>js/jquery.js"></script>
        <script>
    $(document).ready(function() {

        $('.upQuality').click(function() {
            console.log($(this).val());
            var prodId = $(this).val();
            // $.post("model/ajaxCartUp_model.php",{prodId:prodId},function(data){
            //     $('body').html(data);
            // });
            // $.post("model/ajaxCartUp_model.php",{prodId:prodId});
            $('#shopping-cart').load("model/ajaxCartUp_model.php", {
                prodId: prodId
            });

        });
        $('.downQuality').click(function() {
            //  alert($(this).val()); 
            console.log($(this).val());
            var count = 0;
            console.log(count);
        });




    });
</script>