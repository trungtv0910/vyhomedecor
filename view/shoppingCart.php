<?php
if(isset($_SESSION['login']['mycart']))
{
    $mycart=$_SESSION['login']['mycart'];
}else{
    echo 'Thoát';
}
?>
        <!-- <div class="container"> -->
            <div class="grid wide">
                <div class="shopping-cart">
                    <h3 class="cart__heading">Giỏ hàng của tôi</h3>
                    <table class="cart__body">
                        <thead class="cart__title">
                            <th class="cart__title-method"></th>
                            <th class="cart__title-info">Thông tin sản phẩm</th>
                            <th class="cart__title-price">Giá</th>
                            <th class="cart__title-quantity">Số lượng</th>
                            <th class="cart__title-total">Tổng giá trị</th>
                        </thead>
                        <tbody class="cart__list">
                            <?php
                            $total=0;
                            foreach($mycart as $key => $value){
                            $price_quantity=$value['price']*$value['quantity'];
                            $total+= $price_quantity;
                            ?>
                            <tr style="border-bottom: 1px solid #ccc;" class="cart__item">
                                <td class="cart__method">
                                    <a href="index.php?act=shoppingcart&remove_product=<?=$key?>" class="cart__delete"><i class="fas fa-times-circle"></i></a>
                                </td>
                                <td class="cart__info">
                                    <a href="#" class="cart__link">
                                        <img src="<?=BASE_URL?>uploads/<?=$value['image']?>" alt="" class="cart__img">
                                    </a>
                                    <h4 class="cart__name"><?=$value['prodName']?></h4>
                                </td>
                                <td class="cart__price"><?= number_format($value['price'],0,',','.')?>₫</td>
                                <td class="cart__quantity"><?=$value['quantity']?></td>
                                <td class="cart__total"><?=number_format($price_quantity,0,',','.'); ?>₫</td>
                            </tr>
                           <?php } ?>
                           
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
                                <p class="cart__control-heading">Tất cả <span class="cart__control-price"><?=number_format($total ,0,',','.')?>₫</span></p>
                                <span class="cart__control-desc">(Chưa bao gồm phí vận chuyển)</span>
                                <div class="cart__control-btn">
                                    <a href="#" class="cart__control-link"><i class="fas fa-arrow-left"></i> Tiếp tục mua sắm</a>
                                    <a href="#" class="cart__control-link">Thanh toán</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <!-- </div> -->
       