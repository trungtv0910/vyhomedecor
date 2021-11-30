<?php
if (isset($_SESSION['login'])) {
    $billConfirm = $_SESSION['login'];
} else {
    echo '<script>window.location="index.php"</script>';
}
?>
<div class="grid wide">
    <div class="checkout">
        <form action="index.php?act=bill-confirm" method="post">

            <div class="row">

                <div class="col l-6">
                    <div class="checkout-info">

                        <h3 class="checkout__heading">Thông tin vận chuyển</h3>
                        <div class="form-group">
                            <label for="fullname" class="form-label">Họ và tên</label>
                            <input id="fullname" type="text" value="<?= $billConfirm['custName'] ?>" class="form-control" name="custName" required>
                            <input id="" type="hidden" value="<?= $billConfirm['custId'] ?>" class="form-control" name="custId">
                            <span class="form-message"></span>
                        </div>
                        <div class="form-group">
                            <label for="fullname" class="form-label">Số điện thoại</label>
                            <input id="phone" type="text" value="<?= $billConfirm['phone'] ?>" class="form-control" name="phone" required>
                            <span class="form-message"></span>
                        </div>

                        <div class="form-group">
                            <label for="email" class="form-label">Email</label>
                            <input id="email" type="text" value="<?= $billConfirm['email'] ?>" class="form-control" name="email" required>
                            <span class="form-message"></span>
                        </div>

                        <div class="form-group">
                            <label for="password" class="form-label">Địa chỉ</label>
                            <input id="address" type="text" value="<?= $billConfirm['address'] ?>" class="form-control" name="address" required>
                            <span class="form-message"></span>
                        </div>

                        <div class="form-group">
                            <label for="" class="form-label">Phương thức thanh toán</label>
                            <div class="checkout__payment">
                                <input id="atm" name="payment" type="radio" class="form-control" checked value="0"><img src="./images/pay/atm.svg" alt="" class="checkout__payment-img"><label for="atm" class="checkout__payment-desc">Thanh toán khi giao hàng (COD)</label>
                            </div>
                            <div class="checkout__payment">
                                <input name="payment" type="radio" id="momo" value="1" class="form-control"><img src="./images/pay/momo.svg" alt="" class="checkout__payment-img"><label for="momo" class="checkout__payment-desc">Thanh toán bằng Momo</label>
                            </div>
                            <div class="checkout__payment">
                                <input name="payment" type="radio" id="viettelpay" value="2" class="form-control"><img src="./images/pay/viettelpay.png" alt="" class="checkout__payment-img"><label for="viettelpay" class="checkout__payment-desc">Thanh toán bằng viettel Pay</label>
                            </div>
                            <div class="checkout__payment">
                                <input name="payment" type="radio" id="zalo" value="3" class="form-control"><img src="./images/pay/zalo.svg" alt="" class="checkout__payment-img"><label for="zalo" class="checkout__payment-desc">Thanh toán bằng ZaloPay</lable>
                            </div>
                            <span class="form-message"></span>
                        </div>

                        <div class="checkout__control">
                            <a href="index.php?act=shoppingcart" class="checkout__control-back"><i class="fas fa-arrow-left"></i> Quay lại giỏ hàng</a>
                            <button type="submit" name="acceptBill" class="form-submit" onclick="return confirm('Xác Nhận Đặt Hàng')">Đồng ý thanh toán</button>
                        </div>

                    </div>
                </div>
                <div class="col l-6">
                    <div class="checkout-cart">
                        <h3 class="checkout__heading">Thông tin giỏ hàng</h3>
                        <ul class="checkout-cart__list">
                            <?php
                            $mycart = $billConfirm['mycart'];
                            $total = 0;
                            foreach ($mycart as $key => $value) {
                                $price_quantity = $value['price'] * $value['quantity'];
                                $total += $price_quantity;
                            ?>



                                <li class="checkout-cart__item">
                                    <div class="checkout-cart__product item">
                                        <img src="<?= BASE_URL ?>uploads/<?= $value['image'] ?>" alt="" class="checkout-cart__img">
                                        <div class="checkout-cart__quantity"><?= $value['quantity'] ?></div>
                                    </div>
                                    <div class="checkout-cart_name item"><?= $value['prodName'] ?></div>
                                    <div class="checkout-cart__price item"><?= number_format($price_quantity, 0, ',', '.') ?>₫</div>
                                </li>
                            <?php
                            }
                            ?>
                        </ul>
                        <div class="checkout-cart__about">
                            <div class="checkout-cart__info">
                                <span>Tạm tính</span><span class="checkout-cart__info-total"><?= number_format($total, 0, ',', '.') ?>đ</span>
                            </div>
                            <div class="checkout-cart__info">
                                <span>Phí vận chuyển</span><span class="checkout-cart__info-total"><?php $transportFee = 0;
                                                                                                    if ($transportFee == 0) {
                                                                                                        echo 'Miễn phí';
                                                                                                    } ?></span>
                            </div>
                            <div class="checkout-cart__info">
                                <span>Thuế VAT</span><span class="checkout-cart__info-total"><?php $VAT = 0.05;
                                                                                                echo $VAT * 100 . '%'; ?></span>
                            </div>
                           
                        </div>
                        <div class="checkout-cart__info">
                            <span class="checkout-cart__title">Tổng</span><span class="checkout-cart__total"><?php $total = $total + ($total * $transportFee)+($total*$VAT);
                                                                                                                echo   number_format($total, 0, ',', '.');
                                                                                                                ?>đ</span>
                            <input type="hidden" name="transportFee" value=<?=$transportFee ?>>
                            <input type="hidden" name="vat" value=<?=$VAT ?>>
                            <input type="hidden" name="total" value=<?=$total ?>>
                        </div>
                    </div>
                </div>

            </div>
        </form>
    </div>
</div>