<div class="row">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-header border-0">
                <div class="row align-items-center">
                    <div class="col">
                    <h4 class="page-header-title">
                        Quản lý đơn hàng
                    </h4>
                    </div>
                    <div class="col text-right">
                        <!-- <a href="#!" class="btn btn-sm btn-primary">See all</a> -->
                    </div>
                </div>
            </div>
            <div class="table-responsive">
                <form action="" method="post">
                    <!-- Projects table -->
                    <table class="table align-items-center table-flush">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col">STT</th>
                                <th scope="col">Mã Đơn Hàng</th>
                                <th scope="col">Tên Khách Hàng</th>
                                <th scope="col">Ngày Tạo Đơn</th>
                                <th scope="col">Trạng Thái</th>
                                <th scope="col">Đơn Giá</th>
                                <th scope="col">Phương Thức Pay</th>
                                <th scope="col">View</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php 
                           $STT = 1;
                           foreach ($listBill as $value) {
                               extract($value);
                            
                        ?>
                            <tr>
                                <td><?=$STT++?></td>
                                <td><i class="fas fa-barcode"> </i><?=$billId?></td>
                                <td><i class="ni ni-single-02"></i>
                                   <?php
                                       $nameCust = loadOne_customer($custId);
                                       echo $nameCust['custName'];
                                   ?>
                                </td>
                                <td><i class="ni ni-time-alarm"></i><?=$date?></td>
                                <td>
                                    <span class="text-primary">
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
                                    </span>
                                    
                                    <!-- <span class="text-success">Đã Thanh Toán</span>
                                         <span class="text-danger">Huỷ Đơn</span> -->
                                </td>
                                <td><?= number_format($billTotal ,0, ',', '.') ?>đ</td>
                                <td><i class="fas fa-money-check-alt"></i>
                                    <?php
                                        if($payMethod==0){
                                            echo 'Thanh toán khi nhận hàng COD';
                                        }else if($payMethod==1){
                                            echo 'Thanh toán Online ATM';
                                        }
                                    ?>
                                </td>
                                <td><a class="btn btn-primary" href="index.php?act=bill&edit=<?=$billId?>&custId=<?=$custId?>">Xem Chi tiết</a></td>
                            </tr>
                        <?php
                        }
                        ?>
                          
                        </tbody>
                    </table>
                </form>
            </div>
        </div>
    </div>
</div>