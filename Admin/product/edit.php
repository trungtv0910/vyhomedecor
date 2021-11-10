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