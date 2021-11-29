
        <!-- <div class="container"> -->
            <div class="grid wide">
                <div class="mybill">
                    <!-- <div class="mybill--nobill">
                        <img src="./images/bill/no-bill.png" alt="" class="mybill--nobill__img">
                        <p class="mybill--nobill__heading">Chưa có đơn hàng</p>
                    </div> -->
                    <h3 class="mybill__heading">Danh sách đơn hàng của tôi</h3>
                    <ul class="mybill__list">
                    <?php
                        $total = 0;
                        if (isset($_SESSION['login']['login']) == true) {
                            $account= $_SESSION['login'];
                            $listmybill = loadAll_bill_custId($account['custId']);
                            
                        }
                    ?>
                    <?php
                       
                       foreach ($listmybill as $value) {
                           extract($value);
                           $loadOne_mybill = loadOne_bill($billId);
                           
                    ?>
                        <li class="mybill__item">
                            <div class="mybill__status">
                                <p class="mybill__status-info"><?=$custId?></p>
                                <p class="mybill__status-desc"><i class="fas fa-truck mybill__status-icon"></i>
                                <?php
                                            if($billStatus==0){
                                                echo "Chờ xác nhận";
                                            }else if($billStatus==1){
                                                echo "Đang xử lý";
                                            }else if($billStatus==2){
                                                echo "Đang giao hàng";
                                            }else if($billStatus==3){
                                                echo "Giao hàng thành công";
                                            }else{
                                                echo "Đã bị huỷ";
                                            }
                                        ?>
                            </p>
                            </div>
                            <?php
                               $totalOneBill = 0;
                               foreach ($loadOne_mybill as $mybill) {
                                   extract($mybill);
                                   $totalOneBill+= $price * $quantity;
                                   
                            ?>
                            <div class="mybill__info">
                                <a href="#" class="mybill__link">
                                    <img src="<?= BASE_URL ?>uploads/<?= $image ?>" alt="" class="mybill__img">
                                </a>
                                <span class="mybill__name"><?=$prodName?></span>
                                <span class="mybill__quantity">x<?=$quantity?></span>
                                <span class="mybill__price"><?=number_format (($price * $quantity), 0, ',', '.')?>đ</span>
                            </div>
                            <?php } ?>
                            <div class="mybill__control">
                                <div class="mybill__total">
                                    <p class="mybill__total-title">Tổng số tiền: </p>
                                    <p class="mybill__total-price"><?=number_format ($totalOneBill, 0, ',', '.')?></p>
                                </div>
                                <?php
                                    if($billStatus == 0) {
                                ?>
                                    <a href="#" class="mybill__control-btn">Huỷ đơn hàng</a>
                                <?php } ?>
                            </div>
                        </li>
                        <?php } ?>
                        <!-- <li class="mybill__item">
                            <div class="mybill__status">
                                <p class="mybill__status-info">Mã đơn hàng: 21</p>
                                <p class="mybill__status-desc"><i class="fas fa-truck mybill__status-icon"></i>Giao hàng thành công</p>
                            </div>
                            <div class="mybill__info">
                                <a href="#" class="mybill__link">
                                    <img src="./uploads/11__1024x768__b798322985f54db2a844f711d7242d27_master.png" alt="" class="mybill__img">
                                </a>
                                <span class="mybill__name">Túi Chống Sốc Laptop Anki (Full Size) T004</span>
                                <span class="mybill__quantity">x1</span>
                                <span class="mybill__price">175.000đ</span>
                            </div>
                            <div class="mybill__info">
                                <a href="#" class="mybill__link">
                                    <img src="./uploads/11__1024x768__b798322985f54db2a844f711d7242d27_master.png" alt="" class="mybill__img">
                                </a>
                                <span class="mybill__name">Túi Chống Sốc Laptop Anki (Full Size) T004</span>
                                <span class="mybill__quantity">x1</span>
                                <span class="mybill__price">175.000đ</span>
                            </div>
                            <div class="mybill__control">
                                <div class="mybill__total">
                                    <p class="mybill__total-title">Tổng số tiền: </p>
                                    <p class="mybill__total-price">305.500đ</p>
                                </div>
                            </div>
                        </li> -->
                    </ul>
                </div>
            </div>
        <!-- </div> -->
       

