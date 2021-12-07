<div class="row">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-header border-0">
                <div class="row align-items-center">
                    <div class="col-sm-6 col-md-3">
                        <h4 class="page-header-title">
                            Danh sách sản phẩm
                        </h4>
                    </div>
                    <div class="col-3">
                        <a href="index.php?act=product&add" class="btn btn-primary btn-icon-split">
                                        <span class="icon text-white-50">
                                        <i class="fas fa-plus"></i>
                                        </span>
                                        <span class="text">Thêm</span>
                                    </a>
                    </div>

                    <div class=" col-12 col-lg-6 text-right">
                        <!-- thực hiện form tìm kiếm sản phẩm theo tên và danh mục -->
                        <form action="index.php?act=product" method="post" style="display:flex;gap:20px">
                            <input type="text" style='width:50%' name="key_search">
                            <select style="width:35%" name="cateId">
                                <option value="0">Tất Cả </option>
                                <?php
                                foreach ($listcategory as $category) {
                                ?>
                                    <option value="<?= $category['cateId'] ?>"><?= $category['cateName'] ?></option>
                                <?php } ?>

                            </select>
                            <button name="search" type="submit" class="btn btn-warning " style='width:10%' ><i class="fas fa-search"></i></button>
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
                                <th width="10%">Ngày nhập</th>
                                <th width="7%">sửa</th>
                                <th width="7%">Xoá</th>
                                <!-- <th width="10%">Tùy chọn</th> -->

                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($listProduct as $value) {
                                extract($value);
                            ?>
                                <tr>
                                    <td><?= $prodId ?></td>
                                    <td class="sup_parent"><img width="100" src="<?= BASE_URL ?>uploads/<?= $image ?>" alt="">
                                        <!-- sup -->
                                        <?php if ($type == 0) {
                                            echo ' <span class=" sup_new sup_title rotate-15">Mới</span>';
                                        } else if ($type == 1) {
                                            echo ' <span class=" sup_nomal sup_title rotate-15">Thường</span>';
                                        } else {
                                            echo ' <span class="sup_bestsale  sup_title rotate-15">Bán Chạy</span>';
                                        } ?>

                                        <!-- end sup -->
                                    </td>
                                    <td class="text-left"><?= $prodName ?>
                                        <br>
                                        <b>Số lượng còn lại: <?= $quantity ?></b>
                                        <br>
                                        <b>Giá Bán: <?= number_format($price, 0, ',', '.') ?> <b>VNĐ</b>
                                    </td>
                                    <td class="text-left">
                                        <?php
                                        $listCategory = loadAll_category();
                                        foreach ($listCategory as $valueCate) {
                                            if ($cateId == $valueCate['cateId']) {
                                                echo $valueCate['cateName'];
                                            }
                                        }
                                        ?>

                                        <br>
                                        <b>Loại :
                                            <?php
                                            $listChildCate = loadAll_categorychild($cateId);
                                            foreach ($listChildCate as $valueChild) {
                                                if ($cateChildId == $valueChild['cateChildId']) {
                                                    echo $valueChild['cateChildName'];
                                                }
                                            }
                                            ?>
                                        </b>
                                    </td>
                                    <td><?php
                                    $des=json_decode($prodDesc,true)?>
                                  <b>  màu sắc:</b><?=$des['color']?><br>
                                  <!-- <b>  Khối lượng:</b><?=$des['mass']?><br>
                                  <b>  chất liệu:</b><?=$des['material']?><br> -->
                                  <b>  Mô tả:</b> <?= textShorten($des['des'],  100) ?></td>
                                    <td><?= $view ?></td>
                                    <td><?=
                                        formatDate($dateInput);

                                        // $dateInput 
                                        ?></td>

                                    <td><a href="index.php?act=product&edit=<?= $prodId ?>" class="btn btn-primary btn-icon-split"> <span class="icon text-white-50"><i class="far fa-edit"></i></span>
                                            <!-- <span class="text">Sửa</span> -->
                                        </a>
                                    </td>
                                    <td> <a href="index.php?act=product&delete=<?= $prodId ?>" onclick="return confirm('Are you sure?')" class="btn btn-danger btn-icon-split "><span class="icon text-white-50"><i class="fas fa-trash"></i></span>
                                            <!-- <span class="text">Xoá</span> -->
                                        </a></td>
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
<br>
<?php
if(isset($countProduct)){ ?>
<div class="row">
    <div class="col-sm-12 col-xl-8">
        <div class="dataTables_info" id="dataTable_info" role="status" aria-live="polite">Showing 1 to 10 </div>
    </div>
    <div class="col-sm-12 col-xl-4">
        <div class="dataTables_paginate paging_simple_numbers" id="dataTable_paginate">
            <ul class="pagination jc-end">
              <?php
              
                $pagecount =ceil($countProduct/$limit);
              for($i=1;$i<=$pagecount ;$i++){ ?>
                <li class="paginate_button page-item <?php echo $page==$i?"active":""; ?>"><a href="index.php?act=product&list&page=<?=$i ?>" aria-controls="dataTable" data-dt-idx="1" tabindex="0" class="page-link"><?=$i ?></a></li>
              <?php } ?>
               
            </ul>
        </div>
    </div>
</div>
<?php }?>