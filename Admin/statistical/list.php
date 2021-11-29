<style>
    .new-comment{
        overflow: hidden;
        display: -webkit-box;
        -webkit-box-orient: vertical;
        -webkit-line-clamp: 1;
    }
</style>
<div class="row">
    
    <div class="col-xl-3 col-md-6">
        <div class="card card-stats">
            <!-- Card body -->
            <div class="card-body">
                <div class="row">
                    
                    <div class="col">
                        <h5 class="card-title text-uppercase text-muted mb-2">Khách hàng mới</h5>
                        <?php
                            $newCustomer = new_customer();
                            foreach ($newCustomer as $value) {
                                extract($value);
                        ?>
                        <span class="text-info font-weight-light mb-0">
                                <li><?=$newCustomer?></li>
                        </span>
                        <?php } ?>
                    </div>
                    <div class="col-auto">
                        <div class="icon icon-shape bg-gradient-orange  rounded-circle shadow">
                        <i class="fas fa-user"></i>
                        </div>
                    </div>
                </div>
                <p class="mt-3 mb-0 text-sm">

                    <span class="text-nowrap"><a href="index.php?act=customer&list">Xem Chi Tiết</a></span>
                </p>
            </div>
        </div>
    </div>
    
    <div class="col-xl-3 col-md-6">
        <div class="card card-stats">
            <!-- Card body -->
            <div class="card-body">
                <div class="row">

                    <div class="col">
                        <h5 class="card-title text-uppercase text-muted mb-2">Bình luận mới</h5>
                        <?php
                            $newComment = new_comment();
                            foreach ($newComment as $value) {
                                extract($value);
                        ?>
                        <span class="text-warning font-weight-light mb-0 new-comment">
                            <li><?=$newComment?></li>
                        </span>
                        <?php } ?>
                    </div>
                    <div class="col-auto">
                        <div class="icon icon-shape bg-gradient-green rounded-circle shadow">
                       
                        <i class="fas fa-box-open"></i>
                        </div>
                    </div>
                </div>
                <p class="mt-3 mb-0 text-sm">
                    <span class="text-nowrap"><a href="index.php?act=comment&list">Xem Chi Tiết</a></span>
                </p>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-md-6">
        <div class="card card-stats">
            <!-- Card body -->
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <h5 class="card-title text-uppercase text-muted mb-2">Sản phẩm mới</h5>
                        <?php
                            $newProduct = new_product();
                            foreach ($newProduct as $value) {
                                extract($value);
                        ?>
                        <span class="text-success font-weight-light mb-0 new-comment">
                            <li> <?=$newProduct?></li>
                        </span> 
                        <?php } ?>
                    </div>
                    <div class="col-auto">
                        <div class="icon icon-shape-rounded-circle shadow">
                        <i class="fas fa-wallet"></i>
                        </div>
                    </div>
                </div>
                <p class="mt-3 mb-0 text-sm">
                    <span class="text-nowrap"><a href="index.php?act=product&list">Xem Chi Tiết</a></span>
                </p>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-md-6">
        <div class="card card-stats">
            <!-- Card body -->
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <h5 class="card-title text-uppercase text-muted mb-2">Đơn hàng mới</h5>
                        <?php
                            $newBill = new_bill();
                            foreach ($newBill as $value) {
                                extract($value);
                        ?>
                        <span class="text-danger font-weight-light mb-0">
                            <li> Mã đơn hàng: <?=$newBill?></li>
                        </span>
                        <?php } ?>
                    </div>
                    <div class="col-auto">
                        <div class="icon icon-shape bg-gradient-red  rounded-circle shadow">
                        <i class="fas fa-archive"></i>
                        </div>
                    </div>
                </div>
                <p class="mt-3 mb-0 text-sm">
                    <span class="text-nowrap"><a href="index.php?act=bill&list">Xem Chi Tiết</a></span>
                </p>
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
                    <div class="col ">
                        <h4 class="page-header-title">
                            Thống kê Sản phẩm theo Danh mục
                        </h4>
                    </div>
                    <!-- <div class="col text-end">
                        <a href="index.php?act=statistical&chart"> <button class="btn btn-success float_right">Biểu Đồ Chart</button></a>

                    </div> -->
                </div>
            </div>
            <div class="table-responsive">
                <form action="" method="post">
                    <!-- Projects table -->
                    <table class="table align-items-center table-flush">
                        <thead class="thead-light">
                            <tr>
                                <th>Số TT</th>
                                <th>Tên Danh mục</th>
                                <th>Giá Bán Cao Nhất</th>
                                <th>Giá Bán Thấp Nhất</th>
                                <th>Giá Bán Trung Bình</th>
                                <!-- <th>Doanh Thu</th> -->
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                            $i = 1;
                            $statiscal = statiscal_product_category();
                            foreach ($statiscal as $value){
                                extract($value);
                        ?>
                            <tr>
                                <td><?=$i?></td>
                                <td class="text-left"><?=$cateName?>
                                    <br>
                                    <b>Số lượng: <?=$products?> Sản Phẩm</b>
                                </td>
                                <!-- giá tiền cao nhất -->
                                <td><?= number_format($maxPrice, 0, ',', '.') ?> <b>đ</b></td>
                                <!-- giá tiền thấp nhất -->
                                <td><?= number_format($minPrice, 0, ',', '.') ?><b>đ</b></td>
                                <!-- giá tiền trung bình -->
                                <td><?= number_format($avgPrice, 0, ',', '.') ?> <b>đ</b></td>
                                <!-- <td> Chưa cập nhập ????</td> -->
                            </tr>
                        <?php $i++; } ?>
                        </tbody>
                    </table>
                </form>
            </div>
        </div>
    </div>
</div>