<!-- thêm sản phẩm -->
<h2>Sửa Sản Phẩm </h2>
<div class="form">
    <form action="" method="post" enctype="multipart/form-data">
        <div class="form-left">
            <!-- <div class="form-group">
                <label for="">Mã sản phẩm</label>
                <input type="hidden" name="prodId" value="">
                <input type="text"  disabled value="">
            </div> -->
            <div class="form-group">
                <label for="">Tên Sản Phẩm</label>
                <input type="text" id="prodName" name="prodName" value="">
                <span id="message_prodName"></span>
            </div>

            <div class="form-group">
                <label for="">Danh Mục</label>

                <select name="catId" id="catId">
                    <option value="">Phòng Khách</option>
                    <option value="">Phòng ngủ</option>
                    <option value="">Phòng Tắm</option>
                </select>
            </div>

            <div class="form-group">
                <label for="catChild">Loại Sản Phẩm</label><br>
                <select name="catChildId" id="catChild">
                    <option value="">Điện máy</option>
                    <option value="">sofa</option>
                    <option value="">Ghế</option>
                </select>
            </div>

            <div class="form-group">
                <label for="">Số lượng</label>
                <input type="text" name="quantity" value="">
            </div>
            <div class="form-group">
                <label for="">Giá bán</label>
                <input type="text" name="price" value="">
            </div>
            <div class="form-group">
                <label for="">Giảm Giá</label>
                <select name="discount" id="">
                    <option value="0">-----Chọn giảm giá------</option>

                    <option value="">Giảm 2 % </option>
                    <option value="">Giảm 5 % </option>
                    <option value="">Giảm 10 % </option>
                    <option value="">Giảm 15 % </option>
                    <option value="">Giảm 20 % </option>
                    <option value="">Giảm 25 % </option>
                </select>
            </div>

            <div class="form-group">
                <label for="">Lượt Xem</label>
                <input type="number" name="view" value="20000">
            </div>
            <!-- submit -->
            <div class="form-group">
                <button class="btn-submit" type="submit" name="update" value="Sản Phẩm">Cập Nhật Sản Phẩm</button>
            </div>

        </div>
        <!--form-left-->
        <div class="form-right">

            <div class="form-group">
                <label for="">Loại</label>
                <select name="type">
                    <option value="0" selected>Thường</option>
                    <option value="1">Mới</option>
                    <option value="2">Bán Chạy</option>
                </select>
            </div>
            <div class="form-group">
                <label for="">Ảnh sản phẩm</label>
                <img width="300" src="img_tam/26-120x120.jpg" alt="">
                <input type="file" name="image" value="">
            </div>

            <div class="form-group">
                <label for="">Mô tả sản phẩm</label>
                <textarea class="textarea" id="mytextarea" name="prodDesc">Sản phẩm đến từ Decor part, với chất lượng vải chất lượng cao</textarea>
            </div>
        </div>
        <!--form right-->


    </form>
</div> <!-- form-->
<br><br>
<div class="row">
    <div class="col-xl-4">
        <!-- Profile picture card-->
        <div class="card mb-4 mb-xl-0">
            <div class="card-header">Profile Picture</div>
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
            <div class="card-header">Account Details</div>
            <div class="card-body">
                <form>
                    <!-- Form Group (username)-->
                    <div class="mb-3">
                        <label class="small mb-1" for="inputUsername">Username (how your name will appear to other users on the site)</label>
                        <input class="form-control" id="inputUsername" type="text" placeholder="Enter your username" value="username">
                    </div>
                    <!-- Form Row-->
                    <div class="row gx-3 mb-3">
                        <!-- Form Group (first name)-->
                        <div class="col-md-6">
                            <label class="small mb-1" for="inputFirstName">First name</label>
                            <input class="form-control" id="inputFirstName" type="text" placeholder="Enter your first name" value="Valerie">
                        </div>
                        <!-- Form Group (last name)-->
                        <div class="col-md-6">
                            <label class="small mb-1" for="inputLastName">Last name</label>
                            <input class="form-control" id="inputLastName" type="text" placeholder="Enter your last name" value="Luna">
                        </div>
                    </div>
                    <!-- Form Row        -->
                    <div class="row gx-3 mb-3">
                        <!-- Form Group (organization name)-->
                        <div class="col-md-6">
                            <label class="small mb-1" for="inputOrgName">Organization name</label>
                            <input class="form-control" id="inputOrgName" type="text" placeholder="Enter your organization name" value="Start Bootstrap">
                        </div>
                        <!-- Form Group (location)-->
                        <div class="col-md-6">
                            <label class="small mb-1" for="inputLocation">Location</label>
                            <input class="form-control" id="inputLocation" type="text" placeholder="Enter your location" value="San Francisco, CA">
                        </div>
                    </div>
                    <!-- Form Group (email address)-->
                    <div class="mb-3">
                        <label class="small mb-1" for="inputEmailAddress">Email address</label>
                        <input class="form-control" id="inputEmailAddress" type="email" placeholder="Enter your email address" value="name@example.com">
                    </div>
                    <!-- Form Row-->
                    <div class="row gx-3 mb-3">
                        <!-- Form Group (phone number)-->
                        <div class="col-md-6">
                            <label class="small mb-1" for="inputPhone">Phone number</label>
                            <input class="form-control" id="inputPhone" type="tel" placeholder="Enter your phone number" value="555-123-4567">
                        </div>
                        <!-- Form Group (birthday)-->
                        <div class="col-md-6">
                            <label class="small mb-1" for="inputBirthday">Birthday</label>
                            <input class="form-control" id="inputBirthday" type="text" name="birthday" placeholder="Enter your birthday" value="06/10/1988">
                        </div>
                    </div>
                    <!-- Save changes button-->
                    <button class="btn btn-primary" type="button">Save changes</button>
                </form>
            </div>
        </div>
    </div>
</div>