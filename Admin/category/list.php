<style>
    .btn-updateCateChild{
        display: none;
    }
    .btn-deleteCateChild{
        margin-left: 8px;
    }
    .mb-8{
        margin-bottom: 8px;
    }
    </style>
<div class="row">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-header border-0">
                <div class="row align-items-center">
                    <div class="col">
                    <h4 class="page-header-title">
                        Danh Mục
                    </h4>
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
                            $i=0;
                                foreach ($listcategory_child as $category_child) {
                                    extract($category_child);
                            ?>
                                <form action="" method="post" class="mb-8">
                                    <input class="editCategoryChild<?=$cateChildId?> btn btn-outline-secondary border-bottom-secondary" data-id="<?=$cateChildId?>" value="<?=$cateChildName?>"></input>
                                    <a class="btn-deleteCateChild btn btn_xoa btn-danger" onclick="return confirm('Bạn có chắc xóa khách hàng này')" href="index.php?act=category&deleteChild=<?=$cateChildId?>"><span class="icon text-white-50"><i class="fas fa-trash"></i></span></a>
                                    <input type="hidden" class="cateChildId" name="cateChildId" value=""/>
                                    <input type="hidden" class="cateChildName" name="cateChildName" value=""/>
                                    <input class="btn-updateCateChild btn btn-success" id="updateCateChild" type="submit" name="updateCateChild" value="Lưu">
                                    <script>
                                        var editCategoryChilds = [];
                                        var editCategoryChild = document.querySelector('.editCategoryChild<?=$cateChildId?>')
                                        editCategoryChilds.push(editCategoryChild);
                                        for (var i = 0; i < editCategoryChilds.length; i++) {
                                            editCategoryChilds[i].oninput = function() {
                                                var parentElement = this.parentElement;
                                                parentElement.action = 'index.php?act=category&updateCateChild'
                                                var cateChildName = this.value;
                                                var cateChildId = this.dataset.id;
                                                parentElement.querySelector('.cateChildId').value = cateChildId;
                                                parentElement.querySelector('.cateChildName').value = cateChildName;
                                            }
                                        }
                                    </script>
                                </form>
                            <?php
                                }
                            ?>
                            </td>
                            <td><a href="index.php?act=category&addChild=<?=$cateId?>" class="btn btn-light btn-icon-split"> <span class="icon text-white-50"><i class="far fa-plus-square"></i></span>
                                    <span class="text">Thêm</span></a></td>
                            <td><a href="index.php?act=category&edit=<?=$cateId?>" class="btn btn-info btn-icon-split"> <span class="icon text-white-50"><i class="far fa-edit"></i></span>
                                    <span class="text">Sửa</span></a></td>
                            <td> <a href="index.php?act=category&delete=<?=$cateId?>" onclick="return confirm('Bạn có chắc xóa khách hàng này')" class="btn btn-danger btn-icon-split"><span class="icon text-white-50"><i class="fas fa-trash"></i></span>
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
