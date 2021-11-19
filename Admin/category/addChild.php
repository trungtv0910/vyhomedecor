<div class="row">
     
     <div class="col-md-6 mg_auto">
     <form action="index.php?act=category" method="post">
         <h2 class="text-center">Thêm Danh Mục</h2>
         <div class="form-group">
             <label for="my-input">Tên Danh Mục Con</label>
             <input id="my-input" class="form-control" type="text" name="cateChildName" placeholder="Nhập tên danh mục">
             <input id="my-input" class="form-control" type="hidden"  value='<?=$cateId?>' name="cateId" placeholder="Nhập tên danh mục">

         </div>
         <!-- submit -->
         <div class="form-group">
             <button class="btn btn-success" type="submit" name="addCategoryChild" value="Them">Thêm Danh Mục</button>
         </div>

     </form>
     </div>
 

</div>