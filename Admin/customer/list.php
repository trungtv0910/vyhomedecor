<br>
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
                        <h3 class="mb-0">Quản Lý Khách Hàng</h3>
                    </div>
                    <div class="col text-right">
                        <a href="index.php?act=customer&add" class="btn btn-sm btn-primary">Thêm Khách Hàng</a>
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
                                <tr>
                                    <td><i class="fas fa-barcode"> 3251</td>
                                    <td>
                                        <div class="reply_img text-center">
                                           <img width="50" src="img_tam/anhavatar.png" alt="">
                                        </div>
                                        <i class="ni ni-single-02">Nguyễn Thị Thanh Vi
                                    </td>
                                    <td>
                                    socnau_2049 
                                    </td>
                                    <td><i class="ni ni-email-83"></i> socnau@gmail.com </td>
                                    <td><i class="fas fa-phone"></i> 0912532221</td>
                                    <td>Điện bàn - Quảng Nam</td>
                                    <td><span class='text-success'>Hoạt Động</span></td>
                                    <td>
                                       Thành viên
                                    </td>
                                    <td><a class="btn  btn-primary" href="index.php?act=customer&edit"><span class="icon text-white-50"><i class="far fa-edit"></i></span></a>
                                    
                                        <a class="btn btn_xoa btn-danger" onclick="return confirm('Bạn có chắc xóa khách hàng này')" href="index.php?act=customer&delete"><span class="icon text-white-50"><i class="fas fa-trash"></i></span></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td><i class="fas fa-barcode"> 3251</td>
                                    <td>
                                        <div class="reply_img text-center">
                                           <img width="50" src="img_tam/anhavatar.png" alt="">
                                        </div>
                                        <i class="ni ni-single-02">Nguyễn Thị Huy
                                    </td>
                                    <td>
                                    socnau_2049 
                                    </td>
                                    <td><i class="ni ni-email-83"></i> socnau@gmail.com </td>
                                    <td><i class="fas fa-phone"></i> 0912532221</td>
                                    <td>Điện bàn - Quảng Nam</td>
                                    <td><span class='text-danger'>Khoá</span></td>
                                    <td>
                                       Thành viên
                                    </td>
                                    <td><a class="btn  btn-primary" href="index.php?act=customer&edit"><span class="icon text-white-50"><i class="far fa-edit"></i></span></a>
                                    
                                        <a class="btn btn_xoa btn-danger" onclick="return confirm('Bạn có chắc xóa khách hàng này')" href="index.php?act=customer&delete"><span class="icon text-white-50"><i class="fas fa-trash"></i></span></a>
                                    </td>
                                </tr>
                        </tbody>
                    </table>
                </form>
            </div>
        </div>
    </div>




</div>