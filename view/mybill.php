<!-- <div class="container"> -->
<div class="grid wide">
    <div class="mybill">
        <?php
        $total = 0;
        if (isset($_SESSION['login']['login']) == true) {
            $account = $_SESSION['login'];
            $listmybill = loadAll_bill_custId($account['custId']);
        }
        ?>
        <?php
        if (empty($listmybill)) {
        ?>
            <div class="mybill--nobill">
                <img src="./images/bill/no-bill.png" alt="" class="mybill--nobill__img">
                <p class="mybill--nobill__heading">Chưa có đơn hàng nào</p>
            </div>
        <?php
        } else {
        ?>
            <h3 class="mybill__heading">Danh sách đơn hàng của tôi</h3>
            <ul class="mybill__list">

                <?php

                foreach ($listmybill as $value) {
                    extract($value);
                    $loadOne_mybill = loadOne_bill($billId);

                ?>
                    <li class="mybill__item">
                        <div class="mybill__status">
                            <a href="index.php?act=mybill-showInfoBill&billId=<?=$billId?>" class="mybill__status-info">Mã đơn hàng: <?= $billId ?></a>
                            <?php
                            if ($billStatus == 4) {
                            ?>
                                <p class="mybill__status-desc remove"><i class="fas fa-truck mybill__status-icon"></i>
                                    <?php
                                    if ($billStatus == 0) {
                                        echo "Chờ xác nhận";
                                    } else if ($billStatus == 1) {
                                        echo "Đang xử lý";
                                    } else if ($billStatus == 2) {
                                        echo "Đang giao hàng";
                                    } else if ($billStatus == 3) {
                                        echo "Giao hàng thành công";
                                    } else {
                                        echo "Đã bị huỷ";
                                    }
                                    ?>
                                </p>
                            <?php } else { ?>
                                <p class="mybill__status-desc"><i class="fas fa-truck mybill__status-icon"></i>
                                    <?php
                                    if ($billStatus == 0) {
                                        echo "Chờ xác nhận";
                                    } else if ($billStatus == 1) {
                                        echo "Đang xử lý";
                                    } else if ($billStatus == 2) {
                                        echo "Đang giao hàng";
                                    } else if ($billStatus == 3) {
                                        echo "Giao hàng thành công";
                                    } else {
                                        echo "Đã bị huỷ";
                                    }
                                    ?>
                                </p>
                            <?php } ?>
                        </div>
                        <?php
                        $totalOneBill = 0;
                        foreach ($loadOne_mybill as $mybill) {
                            extract($mybill);
                            $totalOneBill += $price * $quantity;

                        ?>
                            <div class="mybill__info">
                                <div class="mybill__info-product">
                                    <a href="#" class="mybill__link">
                                        <img src="<?= BASE_URL ?>uploads/<?= $image ?>" alt="" class="mybill__img">
                                    </a>
                                    <span class="mybill__name"><?= $prodName ?></span>
                                </div>
                                <div class="mybill__info-price">
                                    <span class="mybill__quantity">x<?= $quantity ?></span>
                                    <span class="mybill__price"><?= number_format(($price * $quantity), 0, ',', '.') ?>đ</span>
                                </div>
                            </div>
                        <?php } ?>
                        <div class="mybill__control">
                           <!-- <a href="index.php?act=mybill&showBill" style="position:absolute; font-size:12px; text-decoration:none; color:black">Thông tin đơn hàng:</a> -->
                         
                           <div class="mybill__total">
                                <p class="mybill__total-title">Tổng số tiền: </p>
                                <p class="mybill__total-price"><?= number_format($billTotal, 0, ',', '.') ?>đ </p>
                            </div>

                            <p class="mess_total">(Đã bao gồm VAT và phí vận chuyển)</p>
                            <?php
                            if ($billStatus == 0) {
                            ?>
                                <a href="index.php?act=mybill&remove&billId=<?= $billId ?>" onclick="return confirm('Xác nhận Huỷ đơn hàng ? Mã đơn hàng:<?= $billId ?>')" class="mybill__control-btn">Huỷ đơn hàng</a>
                            <?php } ?>
                        </div>

                    </li>

                <?php } ?>
            <?php } ?>

            </ul>
    </div>
</div>
<!-- </div> -->