<?php
if(isset($_SESSION['login']))
{
    $billConfirm=$_SESSION['login'];
    // echo '<pre>';
    // print_r($billConfirm);
    // echo '</pre>';
    
}else{
    echo 'Thoát';
}
?>
<div class="grid wide">
    <div class="checkout">
        <div class="row">
            <div class="col l-6">
                <div class="checkout-info">
                    <form action="index.php?act=bill-confirm" method="POST" id="checkout__form">
                        <h3 class="checkout__heading">Thông tin vận chuyển</h3>
                        <div class="form-group">
                            <label for="fullname" class="form-label">Họ và tên</label>
                            <input id="fullname" type="text" value="<?=$billConfirm['custName']?>" class="form-control">
                            <span class="form-message"></span>
                        </div>
                        <div class="form-group">
                            <label for="fullname" class="form-label">Số điện thoại</label>
                            <input id="phone" name="fullname" type="text" value="<?=$billConfirm['phone']?>" class="form-control">
                            <span class="form-message"></span>
                        </div>

                        <div class="form-group">
                            <label for="email" class="form-label">Email</label>
                            <input id="email" name="email" type="text" value="<?=$billConfirm['email']?>" class="form-control">
                            <span class="form-message"></span>
                        </div>

                        <div class="form-group">
                            <label for="password" class="form-label">Địa chỉ</label>
                            <input id="address" name="address" type="text" value="<?=$billConfirm['address']?>" class="form-control">
                            <span class="form-message"></span>
                        </div>

                        <div class="form-group">
                            <label for="" class="form-label">Phương thức thanh toán</label>
                            <div class="checkout__payment">
                                <input id="atm" name="payment" type="radio" class="form-control"><img src="./images/pay/atm.svg" alt="" class="checkout__payment-img"><span for="atm" class="checkout__payment-desc">Thanh toán khi giao hàng (COD)</span>
                            </div>
                            <!-- <div class="checkout__payment">
                                <input name="payment" type="radio" class="form-control"><img src="./images/pay/cod.svg" alt="" class="checkout__payment-img"><span class="checkout__payment-desc">Thanh toán online</span>
                            </div> -->
                            <div class="checkout__payment">
                                <input name="payment" type="radio" class="form-control"><img src="./images/pay/momo.svg" alt="" class="checkout__payment-img"><span class="checkout__payment-desc">Thanh toán bằng Momo</span>
                            </div>
                            <div class="checkout__payment">
                                <input name="payment" type="radio" class="form-control"><img src="./images/pay/viettelpay.png" alt="" class="checkout__payment-img"><span class="checkout__payment-desc">Thanh toán bằng viettel Pay</span>
                            </div>
                            <div class="checkout__payment">
                                <input name="payment" type="radio" class="form-control"><img src="./images/pay/zalo.svg" alt="" class="checkout__payment-img"><span class="checkout__payment-desc">Thanh toán bằng Zalo</span>
                            </div>
                            <span class="form-message"></span>
                        </div>

                        <div class="checkout__control">
                            <a href="index.php?act=shoppingcart" class="checkout__control-back"><i class="fas fa-arrow-left"></i> Quay lại giỏ hàng</a>
                            <button type="submit" name="acceptBill" class="form-submit">Đồng ý thanh toán</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col l-6">
                <div class="checkout-cart">
                    <h3 class="checkout__heading">Thông tin giỏ hàng</h3>
                    <ul class="checkout-cart__list">
                        <?php
                        $mycart =$billConfirm['mycart'];
                        $total=0;
                        foreach($mycart as $key => $value){
                        $price_quantity=$value['price']*$value['quantity'];
                        $total+= $price_quantity;
                        ?>

                       

                        <li class="checkout-cart__item">
                            <div class="checkout-cart__product item">
                                <img src="<?=BASE_URL?>uploads/<?=$value['image']?>" alt="" class="checkout-cart__img">
                                <div class="checkout-cart__quantity"><?=$value['quantity']?></div>
                            </div>
                            <div class="checkout-cart_name item"><?=$value['prodName']?></div>
                            <div class="checkout-cart__price item"><?=number_format($price_quantity,0,',','.')?>₫</div>
                        </li>
                        <?php
                         }
                        ?>
                        <!-- <li class="checkout-cart__item">
                            <div class="checkout-cart__product">
                                <img src="./uploads/1637847684xamnhat_3_c4e2eb411d0b4faea89abf900c277937_master (1).png" alt="" class="checkout-cart__img">
                                <div class="checkout-cart__quantity">1</div>
                            </div>
                            <span class="checkout-cart_name">Bộ bàn ăn LUKI-EIRA</span>
                            <span class="checkout-cart__price">2,850,000₫</span>
                        </li> -->
                    </ul>
                    <div class="checkout-cart__about">
                        <div class="checkout-cart__info">
                            <span>Tạm tính</span><span class="checkout-cart__info-total"><?=number_format($total,0,',','.')?>đ</span>
                        </div>
                        <div class="checkout-cart__info">
                            <span>Phí vận chuyển</span><span class="checkout-cart__info-total"><?php $transportFee=0;
                                                                                                    if($transportFee==0){echo 'Miễn phí';} ?></span>
                        </div>
                    </div>
                    <div class="checkout-cart__info">
                        <span class="checkout-cart__title">Tổng</span><span class="checkout-cart__total"><?php $total=$total-($total*$transportFee);
                                                                                                             echo   number_format($total,0,',','.');
                                                                                                                ?>đ</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>