<!-- thêm sản phẩm -->
<!-- <h2>Thêm Sản Phẩm mới</h2> -->
<style>
    .img-old,
    .smallImgOld {
        position: relative;
    }

    .deleteImg,
    .smallDelete {
        position: absolute;
        top: 0;
        right: 0;
    }

    .smallDelete {
        padding: 2px 7px;
        color: white;
        background-color: red;
        font-size: 14px;
        cursor: pointer;

    }

    .list-img {
        display: flex;
        padding-left: 0px;
        flex-direction: row;
        align-items: flex-start;
    }

    .list-img li {
        list-style: none;
        margin: 5px;
        flex-basis: 23.5%;
        flex-shrink: 0;
        flex-grow: 0;
        align-items: flex-start;

    }
</style>
<?php
// echo '<pre>';
// print_r($one_product);
// echo '</pre>';

?>

<header class="page-header page-header-compact page-header-light border-bottom bg-white mb-4">

    <div class="page-header-content px-4 ">
        <div class="row align-items-center justify-content-between pt-3">
            <div class="col-auto mb-3">
                <h4 class="page-header-title">
                    Sửa sản phẩm
                </h4>
            </div>
            <div class="col-12 col-xl-auto mb-3">
                <!-- <a class="btn btn-sm btn-light text-primary" href="user-management-list.html">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left me-1">
                            <line x1="19" y1="12" x2="5" y2="12"></line>
                            <polyline points="12 19 5 12 12 5"></polyline>
                        </svg>
                        Thêm sản phẩm
                    </a> -->
            </div>
        </div>
    </div>

</header>
<div class="form">
    <form method="POST" action="index.php?act=product" enctype="multipart/form-data">
        <div class="row">

            <!-- Form Group (username)-->
            <div class="col-xl-8">
                <!-- Profile picture card-->
            
                <div class="card mb-xl-0">
                    <div class="card-header">
                       Tải Lên Nhiều Ảnh 
                    </div>
                    <div class="card-body text-center">
                        <?php

                        $dataImg = $one_product['imageSmall'];
                        $dataImg = json_decode($dataImg, true);
                        // echo '<pre>';
                        // print_r($dataImg);
                        // echo '</pre>';

                        ?>
                        <ul class="list-img">
                            <?php if (count($dataImg) > 0) { ?>
                                <!-- <input id="dataImg" type="hidden" value='<?= $one_product['imageSmall'] ?>'> -->
                                <?php foreach ($dataImg as $value) { ?>
                                    <li class="smallImgOld">
                                        <img width="100%" src="<?= BASE_URL ?>uploads/<?= $value['image'] ?>" alt="">
                                      <div class="smallDelete">X 
                                            <!-- <input id="x" class="img" type="hidden" value="<?= $value['id'] ?>"> -->
                                        </div> 
                                    </li>

                            <?php }
                            } ?>
                        </ul>
                        <?php
                        // for ($i = 4; $i > count($dataImg); $i--) { 
                        ?>
                        <!-- <input type="file" name="image[]"> -->
                        <?php
                        // }
                        ?>
                        <div class="form-group">
                            <!-- <input id="smallImage" class="smallImage" type="file" name="images[]">
                            <input id="smallImage" class="smallImage" type="file" name="images[]"> -->
                            <!-- <input id="smallImage" class="smallImage" type="file" name="images[]">
                            <input id="smallImage" class="smallImage" type="file" name="images[]"> -->
                        </div>
                        <!-- <div class="status"></div> -->
                    </div>
                </div>
            </div>
            <div class="col-xl-4">
                <!-- Account details card-->
                <div class="card mb-4">
                    <div class="card-header">Thông tin sản phẩm</div>
                    <div class="card-body">

                        <div class="mb-3">
                            <label class="small mb-1" for="inputprodname">Tên sản phẩm</label>
                            <input type="hidden" id="prodId" name="prodId" value="<?= $one_product['prodId'] ?>">
                            <input class="form-control" id="inputprodname" type="text" placeholder="Nhập tên sản phẩm" name="prodName" required="" value="<?= $one_product['prodName'] ?>">

                        </div>
                        <!-- Form Row-->
                        <div class="row gx-3 mb-3">
                            <!-- Form Group (first name)-->
                            <div class="col-md-6">
                                <label class="small mb-1" for="inputCategory">Danh mục</label>

                                <select class="form-select" id="cateId" aria-label="Default select example" name="cateId" required>
                                    <option value="">--Chọn Danh Mục --</option>
                                    <?php
                                    foreach ($listCate as $value) {
                                    ?>
                                        <option <?php echo $value['cateId'] == $one_product['cateId'] ? "Selected" : "" ?> value="<?= $value['cateId'] ?>"><?= $value['cateName'] ?></option>
                                    <?php } ?>

                                </select>
                            </div>
                            <!-- Form Group (last name)-->
                            <div class="col-md-6">
                                <label class="small mb-1" for="inputCategoryChild">Danh mục con</label>

                                <select class="form-select" id="cateChild" aria-label="Default select example" name="cateChildId" required>
                                    <?php
                                    foreach ($listChildCate as $value) {
                                        # code...

                                    ?>
                                        <option <?php echo $value['cateChildId'] == $one_product['cateChildId'] ? "Selected" : "" ?> value="<?= $value['cateChildId'] ?>"> <?= $value['cateChildName'] ?></option>
                                    <?php } ?>
                                </select>

                            </div>
                        </div>
                        <!-- Form Row        -->
                        <div class="row gx-3 mb-3">

                            <div class="col-md-6">
                                <label class="small mb-1" for="inputQuantity">Số lượng</label>
                                <input class="form-control" id="inputQuantity" type="number" placeholder="Nhập số lượng sản phẩm" name="quantity" value="<?= $one_product['quantity'] ?>">
                            </div>
                            <!-- Form Group (location)-->
                            <div class="col-md-6">
                                <label class="small mb-1" for="inputLocation">Giá Bán (VNĐ)</label>
                                <input class="form-control" id="inputLocation" type="text" placeholder="VD :5.530.000đ" name="price" value="<?= $one_product['price'] ?>">
                            </div>
                        </div>
                        <div class="row gx-3 mb-3">
                            <!-- Form Group (phone number)-->
                            <div class="col-md-6">
                                <label class="small mb-1" for="inputPhone">Khuyến mãi (Chọn chương trình giảm giá cho sản phẩm)</label>
                                <select class="form-select" aria-label="Default select example" name="discount">

                                    <option value="<?= $one_product['discount'] ?>"><?php echo $one_product['discount'] != 0 ? $one_product['discount'] * 100 . "%" : "Không có khuyến mãi" ?></option>

                                    <option value="0.05">Khuyến Mãi 5%</option>
                                    <option value="0.1">Khuyến Mãi 10%</option>
                                    <option value="0.2">Khuyến Mãi 20%</option>
                                    <option value="0.3">Khuyến Mãi 30%</option>
                                    <option value="0.4">Khuyến Mãi 40%</option>
                                    <option value="0.5">Khuyến Mãi 50%</option>
                                </select>
                            </div>
                            <!-- Form Group (birthday)-->
                            <div class="col-md-6">
                                <label class="small mb-1" for="inputBirthday">Loại sản phẩm</label>
                                <select class="form-select" aria-label="Default select example" name="type">
                                    <option value="<?= $one_product['type'] ?>"><?php if ($one_product['type'] == 0) {
                                                                                    echo 'Mới';
                                                                                } else if ($one_product['type'] == 1) {
                                                                                    echo 'Thường';
                                                                                } else {
                                                                                    echo "Bán Chạy";
                                                                                } ?></option>
                                    <option value="0">Mới</option>
                                    <option value="1">Thường</option>
                                    <option value="2">Bán chạy</option>
                                </select>
                            </div>
                        </div>
                        <!-- Form Group (email address)-->
                        <div class="mb-3">
                            <label class="small mb-1" for="inputdes">Mô Tả</label>
                            <textarea class="lh-base form-control" type="text" name="prodDesc" placeholder="Nhập vào mô tả sản phẩm..." rows="4" required> <?= $one_product['prodDesc'] ?></textarea>
                        </div>
                        <!-- Form Row-->
                        <!-- <input type="file" name="anh"> -->
                        <!-- Save changes button-->
                        <button class="btn btn-primary" name="updateProduct" type="submit">Đăng sản phẩm</button>

                    </div>
                </div>
            </div>

        </div>
    </form>
</div> <!-- form-->

<script>
    $(document).ready(function() {
        $('#cateId').change(function() {
            var Id = $(this).val();
            $.get("model_ajax/cateChild_model.php", {
                cateId: Id
            }, function(data) {
                $('#cateChild').html(data);
            })

        });



        // sự kiện click vào nút xoá ảnh chính sản phẩm
        $("#deleteImg").click(function() {

            $('#fillUpImg')[0].remove();
            $('#deleteImg').remove();
            $('#file')[0].style = "display:block";
        })

   


    });
</script>
<script>
    //xử lý khi có sự kiện click
    $('#file').change(function() {
        //Lấy ra files
        var file_data = $('#file').prop('files')[0];
        console.log(file_data);
        //lấy ra kiểu file
        var type = file_data.type;
        console.log(type);
        //Xét kiểu file được upload
        var match = ["image/gif", "image/png", "image/jpg", "image/jpeg"];
        //kiểm tra kiểu file
        if (type == match[0] || type == match[1] || type == match[2] || type == match[3]) {
            //khởi tạo đối tượng form data
            var form_data = new FormData();
            //thêm files vào trong form data
            form_data.append('file', file_data);
            //sử dụng ajax post
            $.ajax({
                url: 'model_ajax/upload_model.php', // gửi đến file upload.php 
                dataType: 'text',
                cache: false,
                contentType: false,
                processData: false,
                data: form_data,
                type: 'post',
                success: function(res) {
                    // $('.status').text(res);
                    $('.status').html(res);
                    $('#file').val('');
                }
            });
        } else {
            $('.status').text('Chỉ được upload file ảnh');
            $('#file').val('');
        }
        return false;
    });
</script>
