<style>
    /* .table td,
    .table th {
        white-space: normal
    }

    .table th:nth-child(1),
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
                    <h4 class="page-header-title">
                        Quản lý bình luận
                    </h4>
                    </div>
                    <div class="col">
                        <!-- <a href="index.php?act=product&add"> <button class="btn btn-success float_right">Thêm Sản Phẩm</button></a> -->

                    </div>



                </div>
            </div>
            <div class="table-responsive">
                <form action="" method="post">
                    <!-- Projects table -->
                    <table class="table align-items-center table-flush">
                        <thead class="thead-light">
                            <tr>
                                <th>Số TT</th>
                                <th width="10%">Mã Sản Phẩm</th>
                                <th width="10%">Hình</th>
                                <th width="40%">Thông Tin Sản Phẩm</th>
                                <th>Số Lượng</th>
                                <th>Ngày Bình luận Cuối cùng</th>
                                <th>Tùy chọn</th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                foreach ($list_comments_product as $value) {
                                    extract($value);
                            ?>

                            <tr>
                                <td>1</td>
                                <td><?=$prodId?></td>
                                <td class="sup_parent"><img width="100" src="<?= BASE_URL ?>uploads/<?= $image ?>" alt="">
                                    <!-- sup -->
                                    <!-- <span class="sup_nomal sup_title">Thường</span>
                                    <span class="sup_new sup_title">Mới</span> -->
                                    <span class="sup_bestsale sup_title">Bán Chạy</span>
                                    <!-- end sup -->
                                </td>
                                <td class="text-left" ><?=$prodName?>
                                    <br>
                                    <b>Số lượng còn lại: <?=$quantity?></b>
                                    <br>
                                    <b>Giá bán hiện tại: </b><?= number_format($price, 0, ',', '.') ?> <b>đ</b>
                                </td>
                                <td>
                                    <?=$countComm?> <b>Bình luận</b>
                                </td>
                                <td>
                                    <?=$lastDate?>
                                </td>
                                <td><a class="btn btn-primary" href="index.php?act=comment&comment_detail">Xem toàn bộ</a>
                                </td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </form>
            </div>
        </div>
    </div>
</div>