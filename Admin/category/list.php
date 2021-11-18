<div class="row">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-header border-0">
                <div class="row align-items-center">
                    <div class="col">
                        <h3 class="mb-0">Tất Cả Danh Mục</h3>
                    </div>
                    <div class="col text-right">
                        <a href="index.php?act=category&add" class="btn btn-sm btn-primary">Thêm danh mục</a>
                    </div>
                </div>
            </div>
            <div class="table-responsive">
                <!-- Projects table -->
                <table class="table align-items-center table-flush">
                    <thead class="thead-light">
                        <tr>
                            <th scope="col" class="text-center">Tên danh mục</th>
                            <th scope="col" class="text-center">Loại hàng</th>
                            <th colspan="3" class="text-center">Thao tác</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            foreach ($listcategory as $category) {
                                extract($category);
                                $listcategory_child = loadAll_categorychild($cateId);
                        ?>
                        <tr>
                            <th scope="row">
                                <?=$cateName?>
                            </th>
                            
                            <td class="text-left">
                            <?php
                                foreach ($listcategory_child as $category_child) {
                                    extract($category_child);
                            ?>
                                <button class="btn btn-outline-secondary border-bottom-secondary"><?=$cateChildName?></button>
                            <?php
                                }
                            ?>
                            </td>
                            <td><a href="" class="btn btn-light btn-icon-split"> <span class="icon text-white-50"><i class="far fa-plus-square"></i></span>
                                    <span class="text">Thêm</span></a></td>
                            <td><a href="index.php?act=category&listChild" class="btn btn-info btn-icon-split"> <span class="icon text-white-50"><i class="far fa-edit"></i></span>
                                    <span class="text">Sửa</span></a></td>
                            <td> <a href="" class="btn btn-danger btn-icon-split "><span class="icon text-white-50"><i class="fas fa-trash"></i></span>
                                    <span class="text">Xoá</span></a></td>
                        </tr>
                        <?php
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>