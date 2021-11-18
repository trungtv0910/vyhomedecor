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
    <div class="row">
    <div class="col-xl-4">
            <!-- Profile picture card-->
            <div class="card mb-4 mb-xl-0">
                <div class="card-header">Ảnh sản phẩm</div>
                <div class="card-body text-center">
                    <!-- Profile picture image-->
                    <img class="img-account-profile rounded-circle mb-2" src="assets/img/illustrations/profiles/profile-1.png" alt="">
                    <!-- Profile picture help block-->
                    <div class="small font-italic text-muted mb-4">JPG or PNG no larger than 5 MB</div>
                    <!-- Profile picture upload button-->
                    <button class="btn btn-primary" type="button">Upload new image</button>
                </div>
            </div>
        </div>
        <div class="col-xl-8">
            <!-- Account details card-->
            <div class="card mb-4">
                <div class="card-header">Thông tin sản phẩm</div>
                <div class="card-body">
                    <form>
                        <!-- Form Group (username)-->
                        <div class="mb-3">
                            <label class="small mb-1" for="inputprodname">Tên sản phẩm</label>
                            <input class="form-control" id="inputprodname" type="text" placeholder="Nhập tên sản phẩm" name="prodName" value="Nhập tên sản phẩm">
                        </div>
                        <!-- Form Row-->
                        <div class="row gx-3 mb-3">
                            <!-- Form Group (first name)-->
                            <div class="col-md-6">
                                <label class="small mb-1" for="inputCategory">Danh mục</label>
                               
                                <select class="form-select" aria-label="Default select example" name="cateId">
                                    <option selected="" disabled="">--Chọn Danh --</option>
                                    <option value="administrator">Administrator</option>
                                    <option value="registered">Registered</option>
                                    <option value="edtior">Editor</option>
                                    <option value="guest">Guest</option>
                                </select>
                            </div>
                            <!-- Form Group (last name)-->
                            <div class="col-md-6">
                                <label class="small mb-1" for="inputCategoryChild">Danh mục con</label>
                                <select class="form-select" aria-label="Default select example" name="cateId">
                                    <option selected="" disabled="">--Chọn Danh Mục Con--</option>
                                    <option value="administrator">Administrator</option>
                                    <option value="registered">Registered</option>
                                    <option value="edtior">Editor</option>
                                    <option value="guest">Guest</option>
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
                                    <option selected="" disabled="">--Chọn Khuyến Mãi--</option>
                                    <option value="administrator">Administrator</option>
                                    <option value="registered">Registered</option>
                                    <option value="edtior">Editor</option>
                                    <option value="guest">Guest</option>
                                </select>
                            </div>
                            <!-- Form Group (birthday)-->
                            <div class="col-md-6">
                                <label class="small mb-1" for="inputBirthday">Loại sản phẩm</label>
                                <select class="form-select" aria-label="Default select example" name="type">
                                    <option selected="" disabled="">--Chọn Loại Sản Phẩm--</option>
                                    <option value="administrator">Administrator</option>
                                    <option value="registered">Registered</option>
                                    <option value="edtior">Editor</option>
                                    <option value="guest">Guest</option>
                                </select>
                            </div>
                        </div>
                        <!-- Form Group (email address)-->
                        <div class="mb-3">
                            <label class="small mb-1" for="inputEmailAddress">Mô Tả</label>
                            <textarea class="lh-base form-control" type="text" placeholder="Nhập vào mô tả sản phẩm..." rows="4"></textarea>
                        </div>
                        <!-- Form Row-->
                        
                        <!-- Save changes button-->
                        <button class="btn btn-primary" type="button">Đăng sản phẩm</button>
                    </form>
                </div>
            </div>
        </div>
       
    </div>
</div> <!-- form-->