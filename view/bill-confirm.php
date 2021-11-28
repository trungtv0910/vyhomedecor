<div class="grid wide">
    <div class="checkout">
        <div class="row">
            <div class="col l-6">
                <div class="checkout-info">
                    <form action="" method="POST" id="checkout__form">
                        <h3 class="checkout__heading">Thông tin vận chuyển</h3>
                        <div class="form-group">
                            <label for="fullname" class="form-label">Họ và tên</label>
                            <input id="fullname" type="text" placeholder="Enter here ..." class="form-control">
                            <span class="form-message"></span>
                        </div>
                        <div class="form-group">
                            <label for="fullname" class="form-label">Số điện thoại</label>
                            <input id="phone" name="fullname" type="text" placeholder="Enter here ..." class="form-control">
                            <span class="form-message"></span>
                        </div>

                        <div class="form-group">
                            <label for="email" class="form-label">Email</label>
                            <input id="email" name="email" type="text" placeholder="example@gmail.com" class="form-control">
                            <span class="form-message"></span>
                        </div>

                        <div class="form-group">
                            <label for="password" class="form-label">Địa chỉ</label>
                            <input id="address" name="address" type="text" placeholder="Enter here ..." class="form-control">
                            <span class="form-message"></span>
                        </div>

                        <div class="form-group">
                            <label for="password" class="form-label">Phương thức thanh toán</label>
                            <div class="checkout__payment">
                                <input name="payment" type="radio" class="form-control"><img src="./images/pay/atm.svg" alt="" class="checkout__payment-img"><span class="checkout__payment-desc">Thanh toán khi giao hàng (COD)</span>
                            </div>
                            <div class="checkout__payment">
                                <input name="payment" type="radio" class="form-control"><img src="./images/pay/cod.svg" alt="" class="checkout__payment-img"><span class="checkout__payment-desc">Thanh toán online</span>
                            </div>
                            <span class="form-message"></span>
                        </div>

                        <div class="checkout__control">
                            <a href="#" class="checkout__control-back"><i class="fas fa-arrow-left"></i> Quay lại giỏ hàng</a>
                            <button class="form-submit">Đồng ý thanh toán</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col l-6">
                <div class="checkout-cart">
                    <h3 class="checkout__heading">Thông tin giỏ hàng</h3>
                    <ul class="checkout-cart__list">
                        <li class="checkout-cart__item">
                            <div class="checkout-cart__product">
                                <img src="./uploads/1637847684xamnhat_3_c4e2eb411d0b4faea89abf900c277937_master (1).png" alt="" class="checkout-cart__img">
                                <div class="checkout-cart__quantity">1</div>
                            </div>
                            <span class="checkout-cart_name">Bộ bàn ăn LUKI-EIRA</span>
                            <span class="checkout-cart__price">2,850,000₫</span>
                        </li>
                        <li class="checkout-cart__item">
                            <div class="checkout-cart__product">
                                <img src="./uploads/1637847684xamnhat_3_c4e2eb411d0b4faea89abf900c277937_master (1).png" alt="" class="checkout-cart__img">
                                <div class="checkout-cart__quantity">1</div>
                            </div>
                            <span class="checkout-cart_name">Bộ bàn ăn LUKI-EIRA</span>
                            <span class="checkout-cart__price">2,850,000₫</span>
                        </li>
                    </ul>
                    <div class="checkout-cart__about">
                        <div class="checkout-cart__info">
                            <span>Tạm tính</span><span class="checkout-cart__info-total">5,718,000đ</span>
                        </div>
                        <div class="checkout-cart__info">
                            <span>Phí vận chuyển</span><span class="checkout-cart__info-total">-</span>
                        </div>
                    </div>
                    <div class="checkout-cart__info">
                        <span class="checkout-cart__title">Tổng</span><span class="checkout-cart__total">5,718,000đ</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>