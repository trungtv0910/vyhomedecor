<!-- thêm sản phẩm -->
<h2>Thêm Sản Phẩm mới</h2>
<div class="form">
    <form action="index.php?act=product&add" method="post" enctype="multipart/form-data">
        <div class="form-left">
            <!-- <div class="form-group">
                <label for="">Mã sản phẩm</label>
                <input type="text" id="prodId" name="prodId">
                <i>Bạn có thể bỏ qua mục này nếu muốn mã sản phẩm được điền tự động</i>
                <span id="message_prodId"></span>
            </div> -->
            <div class="form-group">
                <label for="">Tên Sản Phẩm</label>
                <input type="text" id="prodName" name="prodName">
                <span id="message_prodName"></span>
            </div>

            <div class="form-group">
                <label for="">Danh Mục</label>
                <br>
                <select name="catId" id="catId">
                    <option value="0">--------Chọn Danh Mục--------</option>
                 
                        <option value="">Phòng ngủ</option>
                        <option value="">Phòng Khách</option>
                        <option value="">Phòng ngủ</option>
         
                </select>
            </div>
            <div class="form-group">
                <label for="catChild">Loại Sản Phẩm</label><br>
                <select name="catChildId" id="catChild">
                    <option value="">--------Mời Chọn Loại Sản phẩm--------</option>
                    <option value="">Phòng sofa</option>
                    <option value="">Phòng bàn/ghế</option>
                    <option value="">Phòng Tủ</option>
                </select>

            </div>
            <div class="form-group">
                <label for="">Số lượng</label>
                <input type="number" name="quantity">
            </div>
            <div class="form-group">
                <label for="">Giá bán</label>
                <input type="text" name="price">
            </div>
            <div class="form-group">
                <label for="">Giảm Giá</label>

                <select name="discount" id="">
                    <option value="0">------Chọn giảm giá------</option>
                    <option value="0.1">Giảm 10%</option>
                    <option value="0.2">Giảm 20%</option>
                    <option value="0.3">Giảm 30%</option>
                    <option value="0.4">Giảm 40%</option>
                    <option value="0.5">Giảm 50%</option>
                    <option value="0.6">Giảm 60%</option>
                    <option value="0.7">Giảm 70%</option>
                    <option value="0.8">Giảm 80%</option>
                    <option value="0.9">Giảm 90%</option>

                </select>
            </div>
            <!-- submit -->
            <div class="form-group">
                <button class="btn-submit" type="submit" id="addProd" name="add" value="Đăng Sản Phẩm">Đăng Sản Phẩm</button>
            </div>
        </div>
        <!--form-left-->
        <div class="form-right">
            <div class="form-group">
                <label for="">Loại</label>
                <select name="type" id="">
                    <option value="0">Bình thường</option>
                    <option value="1">New</option>
                    <option value="2">Bán Chạy</option>
                </select>
            </div>
            <div class="form-group">
                <label for="">Ảnh sản phẩm</label>
                <input type="file" name="image">
            </div>

            <div class="form-group">
                <label for="">Mô tả sản phẩm</label>
                <!-- <textarea class="textarea" name="prodDesc"></textarea> -->
                <textarea class="area1" id="" style="width:100%;height:200px" name="prodDesc"></textarea>
            </div>
        </div>
        <!--form right-->
        mytextarea

    </form>
</div> <!-- form-->