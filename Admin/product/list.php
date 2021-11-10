<style>
    /* .table th:nth-child(1),
    .table th:nth-child(2) {
        width: 20px;
        padding-right: 0px;
        padding-left: 0px;
    } */
</style>
<div class="row">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-header border-0">
                <div class="row align-items-center">
                    <div class="col ">
                        <h3 class="mb-0">Tất Cả Sản Phẩm</h3>
                    </div>
                    <div class="col">
                        <a href="index.php?act=product&add"> <button class="btn btn-success float_right">Thêm Sản Phẩm</button></a>
                    </div>

                    <div class=" col-md-6 text-right">
                        <!-- thực hiện form tìm kiếm sản phẩm theo tên và danh mục -->
                        <form action="" method="post" style="display:flex;gap:20px">
                            <input type="text" style='width:250px' name="key_search">
                            <select style="width:200px" name="id_cat">
                                <option value="0">Tất Cả </option>

                                <option value="">Tên</option>

                            </select>
                            <button name="search" class="btn btn-warning ">Tìm kiếm <i class="fas fa-search"></i></button>
                        </form>
                    </div>

                </div>
            </div>
            <div class="table-responsive">
                <form action="" method="post">
                    <!-- Projects table -->
                    <table class="table align-items-center table-flush">
                        <thead class="thead-light">
                            <tr>
                                <th>Mã Sản Phẩm</th>
                                <th width="10%">Hình</th>
                                <th>Tên Sản Phẩm</th>
                                <th>Danh Mục</th>
                                <th width="20%">Mô tả</th>
                                <th>Lượt xem</th>
                                <th>Ngày nhập</th>
                                <th width="7%">sửa</th>
                                <th width="7%">Xoá</th>
                                <!-- <th width="10%">Tùy chọn</th> -->

                            </tr>
                        </thead>
                        <tbody>
                          
                            <tr>
                                <td>123</td>
                                <td class="sup_parent"><img width="100" src="img_tam/26-120x120.jpg" alt="">
                                    <!-- sup -->
                                    <span class=" sup_bestsale sup_title rotate-15">Bán Chạy</span>
                                    <!-- end sup -->
                                </td>
                                <td class="text-left">Ghế Xoay
                                    <br>
                                    <b>Số lượng còn lại:200</b>
                                    <br>
                                    <b>Giá Bán: 200.000 <b>VNĐ</b>
                                </td>
                                <td class="text-left">
                                    Phòng Khách
                                    <br>
                                    <b>Loại : Bàn Ghế</b>
                                </td>
                                <td>Ghế Xoay Danlinh một sản phẩm mới với nhiều lựa chọn màu sắc khách nhau, người sử dụng có thể...</td>
                                <td>2000 </td>
                                <td>11/05/2021 </td>

                                <td><a href="index.php?act=product&edit" class="btn btn-info btn-icon-split"> <span class="icon text-white-50"><i class="far fa-edit"></i></span>
                                        <span class="text">Sửa</span></a>
                                </td>
                                <td> <a href="" onclick="return confirm('Are you sure?')" class="btn btn-danger btn-icon-split "><span class="icon text-white-50"><i class="fas fa-trash"></i></span>
                                        <span class="text">Xoá</span></a></td>
                            </tr>
                            <tr>
                                <td>123</td>
                                <td class="sup_parent"><img width="100" src="img_tam/26-120x120.jpg" alt="">
                                    <!-- sup -->
                                    <span class=" sup_nomal sup_title rotate-15">Thường</span>
                                    <!-- end sup -->
                                </td>
                                <td class="text-left">Ghế Xoay
                                    <br>
                                    <b>Số lượng còn lại:200</b>
                                    <br>
                                    <b>Giá Bán: 200.000 <b>VNĐ</b>
                                </td>
                                <td class="text-left">
                                    Phòng Khách
                                    <br>
                                    <b>Loại : Bàn Ghế</b>
                                </td>
                                <td>Ghế Xoay Danlinh một sản phẩm mới với nhiều lựa chọn màu sắc khách nhau, người sử dụng có thể...</td>
                                <td>2000 </td>
                                <td>11/05/2021 </td>

                                <td><a href="index.php?act=product&edit" class="btn btn-info btn-icon-split"> <span class="icon text-white-50"><i class="far fa-edit"></i></span>
                                        <span class="text">Sửa</span></a>
                                </td>
                                <td> <a href="" onclick="return confirm('Are you sure?')" class="btn btn-danger btn-icon-split "><span class="icon text-white-50"><i class="fas fa-trash"></i></span>
                                        <span class="text">Xoá</span></a></td>
                            </tr>
                            <tr>
                                <td>123</td>
                                <td class="sup_parent"><img width="100" src="img_tam/26-120x120.jpg" alt="">
                                    <!-- sup -->
                                    <span class=" sup_new sup_title rotate-15">new</span>
                                    <!-- end sup -->
                                </td>
                                <td class="text-left">Ghế Xoay
                                    <br>
                                    <b>Số lượng còn lại:200</b>
                                    <br>
                                    <b>Giá Bán: 200.000 <b>VNĐ</b>
                                </td>
                                <td class="text-left">
                                    Phòng Khách
                                    <br>
                                    <b>Loại : Bàn Ghế</b>
                                </td>
                                <td>Ghế Xoay Danlinh một sản phẩm mới với nhiều lựa chọn màu sắc khách nhau, người sử dụng có thể...</td>
                                <td>2000 </td>
                                <td>11/05/2021 </td>

                                <td><a href="index.php?act=product&edit" class="btn btn-info btn-icon-split"> <span class="icon text-white-50"><i class="far fa-edit"></i></span>
                                        <span class="text">Sửa</span></a>
                                </td>
                                <td> <a href="" onclick="return confirm('Are you sure?')" class="btn btn-danger btn-icon-split "><span class="icon text-white-50"><i class="fas fa-trash"></i></span>
                                        <span class="text">Xoá</span></a></td>
                            </tr>
                        </tbody>
                    </table>
                </form>
            </div>
        </div>
    </div>
</div>