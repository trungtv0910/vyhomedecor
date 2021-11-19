<!-- thêm sản phẩm -->
<!-- <h2>Thêm Sản Phẩm mới</h2> -->



<header class="page-header page-header-compact page-header-light border-bottom bg-white mb-4">

    <div class="page-header-content px-4 ">
        <div class="row align-items-center justify-content-between pt-3">
            <div class="col-auto mb-3">
                <h4 class="page-header-title">
                    Thêm sản phẩm
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
            <div class="col-xl-4">
                <!-- Profile picture card-->
                <div class="card mb-4 mb-xl-0">
                    <div class="card-header">Ảnh sản phẩm</div>
                    <div class="card-body text-center">

                        <!-- <img class="img-account-profile rounded-circle mb-2" src="" alt=""> -->

                        <!-- <input type="file"   class="btn btn-secondary btn-icon-split" name="image" id="imageUpdate">
                        <div class="small font-italic text-muted mb-4">JPG or PNG no larger than 5 MB</div> -->
                        <!-- Profile picture upload button-->
                        <!-- <button class="btn btn-primary" type="button">Upload new image</button> -->
                        <!-- <form action="" method="POST" role="form"> -->
                       
                        <label for="">Upload ảnh sản phẩm</label>
                            <div class="form-group">
                               
                                <input id="file" type="file"  name="file" >
                                <div class="small font-italic text-muted mb-4">JPG or PNG no larger than 5 MB</div> 
                            </div>
                            <!-- <div class="form-group">
                                <button id="upload" class="btn btn-primary">Upload</button>
                            </div> -->
                        <!-- </form> -->
                        <div class="status"></div>



                    </div>
                </div>
                <div class="card mt-4 mb-xl-0">
                    <div class="card-header">Tải Lên Nhiều Ảnh </div>
                    <div class="card-body text-center">
                            <div class="form-group">
                                <input id="smallImage" class="smallImage" type="file"  name="images[]" >
                                <input id="smallImage" class="smallImage" type="file"  name="images[]" >  
                                <input id="smallImage" class="smallImage" type="file"  name="images[]" >
                                <input id="smallImage" class="smallImage" type="file"  name="images[]" >
                            </div>
                        <!-- <div class="status"></div> -->
                    </div>
                </div>
            </div>
            <div class="col-xl-8">
                <!-- Account details card-->
                <div class="card mb-4">
                    <div class="card-header">Thông tin sản phẩm</div>
                    <div class="card-body">

                        <div class="mb-3">
                            <label class="small mb-1" for="inputprodname">Tên sản phẩm</label>
                            <input class="form-control" id="inputprodname" type="text" placeholder="Nhập tên sản phẩm" name="prodName" required="">
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
                                        <option value="<?= $value['cateId'] ?>"><?= $value['cateName'] ?></option>
                                    <?php } ?>

                                </select>
                            </div>
                            <!-- Form Group (last name)-->
                            <div class="col-md-6">
                                <label class="small mb-1" for="inputCategoryChild">Danh mục con</label>
                                <select class="form-select" id="cateChild" aria-label="Default select example" name="cateChildId" required>
                                    <option value="">--Chọn Danh Mục Con--</option>

                                </select>
                            </div>
                        </div>
                        <!-- Form Row        -->
                        <div class="row gx-3 mb-3">

                            <div class="col-md-6">
                                <label class="small mb-1" for="inputQuantity">Số lượng</label>
                                <input class="form-control" id="inputQuantity" type="number" placeholder="Nhập số lượng sản phẩm" name="quantity" value="">
                            </div>
                            <!-- Form Group (location)-->
                            <div class="col-md-6">
                                <label class="small mb-1" for="inputLocation">Giá Bán</label>
                                <input class="form-control" id="inputLocation" type="text" placeholder="VD :5.530.000đ" name="price" value="">
                            </div>
                        </div>
                        <div class="row gx-3 mb-3">
                            <!-- Form Group (phone number)-->
                            <div class="col-md-6">
                                <label class="small mb-1" for="inputPhone">Khuyến mãi (Chọn chương trình giảm giá cho sản phẩm)</label>
                                <select class="form-select" aria-label="Default select example" name="discount">
                                    <option value="0">--Chọn Khuyến Mãi--</option>
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
                                    <option value="0">--Chọn Loại Sản Phẩm--</option>
                                    <option value="0">Mới</option>
                                    <option value="1">Thường</option>
                                    <option value="2">Bán chạy</option>
                                </select>
                            </div>
                        </div>
                        <!-- Form Group (email address)-->
                        <div class="mb-3">
                            <label class="small mb-1" for="inputdes">Mô Tả</label>
                            <textarea class="lh-base form-control" type="text" name="prodDesc" placeholder="Nhập vào mô tả sản phẩm..." rows="4" required></textarea>
                        </div>
                        <!-- Form Row-->
                        <!-- <input type="file" name="anh"> -->
                        <!-- Save changes button-->
                        <button class="btn btn-primary" name="insertProduct" type="submit">Đăng sản phẩm</button>

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

    });
</script>
<script>
    //xử lý khi có sự kiện click
    $('#file').change( function () {
        //Lấy ra files
        var file_data = $('#file').prop('files')[0];
        console.log(file_data);
        //lấy ra kiểu file
        var type = file_data.type;
        console.log(type);
        //Xét kiểu file được upload
        var match = ["image/gif", "image/png", "image/jpg","image/jpeg"];
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
                success: function (res) {
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
