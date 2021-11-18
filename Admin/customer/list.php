
<style>
    th,
    td {
        text-align: left;

    }

    td:nth-child(2) {
        max-width: 140px;
    }

    th:nth-child(2) {
        max-width: 140px;
    }

    td:nth-child(6) {
        width: 200px;
        padding-left: 0px;
        padding-right: 0px;
    }
</style>
<div class="row">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-header border-0">
                <div class="row align-items-center">
                    <div class="col">
                    <h4 class="page-header-title">
                        Quản lý khách hàng
                    </h4>
                    </div>
                    <div class="col text-right">
                        <!-- <a href="index.php?act=customer&add" class="btn btn-sm btn-primary">Thêm Khách Hàng</a> -->
                        <span>
                         
                        </span>
                    </div>
                </div>
            </div>
            <div class="table-responsive">
                <form action="" method="post">
                    <!-- Projects table -->
                    <table class="table align-items-center table-flush ">
                        <thead class="thead-light">
                            <tr class="table_01">

                                <th>Mã KH</th>
                                <th>Tên Khách Hàng</th>
                                <th>Tài Khoản</th>
                                <th>Email</th>
                                <th>Số Điện Thoại</th>
                                <th>Địa chỉ</th>
                                <th>Hoạt Động</th>
                                <th>Vai trò</th>
                                <th>Tùy Chỉnh</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                foreach ($listcustomer as $customer) {
                                    extract($customer);
                                    ?>
                                    <tr>
                                    <td><i class="fas fa-barcode"><?=$custId?></td>
                                    <td class="text-center">
                                        <div class="reply_img text-center">
                                           <img width="50" src="img_tam/anhavatar.png" alt="">
                                        </div>
                                        <?=$custName?>
                                    </td>
                                    <td>
                                    <?=$username?> 
                                    </td>
                                    <td><i class="ni ni-email-83"></i> <?=$email?> </td>
                                    <td><i class="fas fa-phone"></i> <?=$phone?></td>
                                    <td><?=$address?></td>
                                    <td><span class="text-seccess"><?php
                                           if($status==0){
                                               echo " <i class='fas fa-circle fa-red'></i> Khoá ";
                                           }else{
                                               echo "<i class='fas fa-circle fa-green'></i> Hoạt động  ";
                                           }
                                       ?></span></td>
                                    <td>
                                       <?php
                                           if($role==1){
                                            echo '<div style="font-size:100% ;color:#fff" class="badge bg-warning rounded-pill">Admin</div>';
                                               
                                           }else{
                                            echo '<div style="font-size:100% ;color:#fff" class="badge bg-primary text-white rounded-pill">Thành viên</div>';
                                           }
                                       ?>
                                    </td>
                                    <td><a class="btn  btn-primary" href="index.php?act=customer&edit=<?=$custId ?>"><span class="icon text-white-50"><i class="far fa-edit"></i></span></a>
                                    
                                        <a class="btn btn_xoa btn-danger" onclick="return confirm('Bạn có chắc xóa khách hàng này')" href="index.php?act=customer&delete=<?=$custId ?>"><span class="icon text-white-50"><i class="fas fa-trash"></i></span></a>
                                    </td>
                                </tr>
                             <?php  }
                                 
                            ?>
                        </tbody>
                    </table>
                </form>
            </div>
        </div>
    </div>

 


</div>