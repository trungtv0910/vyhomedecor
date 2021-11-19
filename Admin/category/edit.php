
<div class="col-md-6 mg_auto">
    <form action="index.php?act=category&update" method="post" enctype="multipart/form">
        <h2 class="text-center">Sửa Danh Mục</h2>
        <div class="form-group">
            <label for="my-input">Tên Danh Mục</label>
            <input id="my-input" class="form-control" type="text" name="cateName" placeholder="Nhập tên danh mục" value="<?= $onecategory['cateName'] ?>">
            <input type="hidden" name='cateId' value="<?= $onecategory['cateId'] ?>">
        </div>
        <!-- submit -->
        <div class="form-group">
            <button class="btn btn-success" type="submit" name="" value="">Cập Nhập</button>
        </div>
    </form>
</div>