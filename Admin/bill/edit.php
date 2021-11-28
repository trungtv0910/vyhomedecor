<style>
    /* td,
    th:nth-child(2) {
        text-align: left;
    }

    td:nth-child(5) {
        text-align: center;
    } */
</style>
<?php
    
?>
<div class="row">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-header border-0">
                <div class="row align-items-center">
                    <div class="col">
                        <h3 class="mb-0">Thông Tin Đơn Hàng </h3>
                    </div>
                    <div class="col text-right">
                        <a href="#!" class="btn btn-sm btn-primary">Mã đơn: <?=$billId?></a>
                    </div>
                </div>
            </div>
            <div class="table-responsive">  
                <!-- Projects table -->
                <table class="table align-items-center table-flush">
                
                    <tbody>
                        <tr>
                            <td width="150" scope="row">Tên khách hàng :</td>
                            <td width="800"><?=$loadOne_cust['custName']?></td>
                        </tr>
                        <tr>
                            <td>Số điện thoại :</td>
                            <td><?=$loadOne_cust['phone']?></td>
                        </tr>
                        <tr>
                            <td>Địa chỉ Giao hàng :</td>
                            <td><?=$loadOne_cust['address']?></td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<br>

<div class="row">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-header border-0">
                <div class="row align-items-center">
                    <div class="col">
                        <h3 class="mb-0">Giỏ Hàng</h3>
                    </div>
                    <div class="col text-right">
                        <!-- <a href="#!" class="btn btn-sm btn-primary">See all</a> -->

                    </div>
                </div>
            </div>
            <div class="table-responsive">
                <!-- Projects table -->
                <form action="" method="post">
                    <table class="table align-items-center table-flush">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col">STT</th>
                                <th scope="col">Ảnh Sản Phẩm</th>
                                <th scope="col">Tên Sản Phẩm</th>
                                <th scope="col">số Lượng</th>
                                <th scope="col">Thành Tiền</th>
                            </tr>
                            
                        </thead>
                        <tbody>    
                           <?php
                              $total = 0;
                              $STT = 1;
                              foreach ($loadOne_bill as $value) {
                                  extract($value);
                                  $total+= $price * $quantity;
                              
                           ?>
                           
                                <tr>
                                    <td><?=$STT++?></td>
                                    <td><img width="100" src="<?= BASE_URL ?>uploads/<?= $image ?>" alt=""></td>
                                    <td><?=$prodName?></td>
                                    <td><?=$quantity?></td>
                                    <td><?=number_format (($quantity * $price), 0, ',', '.')?></td>
                                </tr>
                                <!-- <tr>
                                    <td>1</td>
                                    <td>123451</td>
                                    <td><img width="100" src="img_tam/26-120x120.jpg" alt=""></td>
                                    <td>Ghế Xoay 360</td>
                                    <td>2</td>
                                    <td> 400.00 VNĐ</td>
                                </tr> -->
                            <?php
                              }
                            ?>
                        </tbody>
                        <tr> <div class="border-left-primary">Tổng Tiền :<b><?=number_format ($total, 0, ',', '.')?></b></div> </tr>
                    </table>
                 
            </div>
                </form>

        </div>
    </div>


</div>














                                  


                                

<br>
<div class="dieu_khien">
    <form action="index.php?act=bill&update" method="post">
        <input type="hidden" name="billId" value="<?=$billId?>">
        <button class="btn btn-primary " onclick="return confirm('Xác nhận Đơn Hàng Đang chờ xác nhận ?')" type="submit" name="billStatus" value="0">Đang chờ xác nhận</button>
        <button class="btn btn-secondary " onclick="return confirm('Xác nhận Đơn Hàng Đang xử lý ?')" type="submit" name="billStatus" value="1">Đang xử lý</button>
        <button class="btn btn-info " onclick="return confirm('Xác nhận Đơn Hàng Đang giao hàng ?')" type="submit" name="billStatus" value="2">Đang giao hàng</button>
        <button class="btn btn-success " onclick="return confirm('Xác nhận Đơn Hàng Giao hàng thành công ?')" type="submit" name="billStatus" value="3">Giao hàng thành công</button>
        <button class="btn btn-danger " onclick="return confirm('Xác nhận Đơn Hàng Đã bị huỷ ?')" type="submit" name="billStatus" value="4">Đã bị huỷ</button>
    </form>
</div>
<!-- điều khiển