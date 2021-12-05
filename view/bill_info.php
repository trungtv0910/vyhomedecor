<style>
    .info {
        width: 40%;
        font-size: 12px;
    }

    .discount {
        width: 40%;
        font-size: 12px;
    }

    .count {
        width: 20%;
        font-size: 12px;
    }
</style>
<?php
$infoBill = $infoBill[0];
?>
<div class="grid wide" style="min-height:500px">
    <h3 class="mybill__heading">Thông Tin Hoá Đơn </h3>
    <div class="container" style="display: flex;">

        <div class="info">
            <h2>Thông Tin Khách Hàng</h2>
            <br>
            <p><b>Tên Khách Hàng:</b> <?= $infoBill['billCustName']; ?></p>
            <p><b>Mã hoá đơn:</b> <?= $infoBill['billId']; ?></p>
            <p><b>Địa Chỉ:</b> <?= $infoBill['billAddress'] ?></p>
            <p><b>Số điện thoại:</b> <?= $infoBill['billPhone'] ?></p>
            <p><b>Email:</b> <?= $infoBill['billEmail'] ?></p>
            <p><b>Ngày Mua Hàng:</b> <?= $infoBill['date'] ?></p>
        </div>
        <div class="discount">
            <h2>Thanh Toán</h2>
            <br>
            <p><b>Phí Vận Chuyển:</b> <?php
                                        $transportFee = $infoBill['billTransportFee'];
                                        if ($transportFee == 0) {
                                            echo 'Miễn phí';
                                        } ?></p>
            <p><b>Phí VAT:</b> <?= $infoBill['billVAT'] * 100 ?>%</p>
            <p><b>Phương Thức Thanh Toán:</b> <?php
                                                $payMethod = $infoBill['payMethod'];
                                                if ($payMethod == 0) {
                                                    echo 'Thanh toán khi nhận hàng COD';
                                                } else if ($payMethod == 1) {
                                                    echo 'Thanh toán bằng MoMo';
                                                } else if ($payMethod == 2) {
                                                    echo 'Thanh toán bằng ViettelPay';
                                                } else if ($payMethod == 3) {
                                                    echo 'Thanh toán bằng ZaloPay';
                                                }
                                                ?></p>
            <p><b>Tổng Tiền:</b> <?= number_format($infoBill['billTotal'], 0, ',', '.') ?>đ</p>

        </div>
        <div class="count">
            <h2>Tích Điểm</h2>
            <br>
        </div>
    </div>
</div>