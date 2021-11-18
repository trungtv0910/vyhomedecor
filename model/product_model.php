<?php
function list_Product() {
    $sql="SELECT tbl_product.* ,tbl_category_child.cateChildName, tbl_category.cateName
    FROM tbl_product 
    INNER JOIN tbl_category_child on tbl_category_child.cateChildId =tbl_product.cateChildId
    INNER JOIN tbl_category on tbl_category.cateId = tbl_product.cateId;";
    $res = pdo_query($sql);
    return $res;
}
function insert_product($data,$file)
{
     $prodName =$data['prodName'];
     $cateId =$data['cateId'];
     $cateChildId =$data['cateChildId'];
     $quantity =$data['quantity'];
     $discount =$data['discount'];
     $type =$data['type'];
    $prodDesc =$data['prodDesc'];
     $price =$data['price'];
  

    //  echo $image =basename($_FILES['image']['name']);
     $target_dir = "uploads/";
   echo  $target_file = $target_dir . basename($_FILES["image"]["name"]);
     $uploadOk = 1;
     $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
     // Check file size
    //  if ($_FILES["image"]["size"] > 5000000) {
    //    echo "Sorry, your file is too large.";
    //    $uploadOk = 0;
    //  }
    move_uploaded_file($_FILES["image"]["tmp_name"], $target_dir.$_FILES['image']['name']);
    //  // Allow certain file formats
    //  if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    //  && $imageFileType != "gif" ) {
    //    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    //    $uploadOk = 0;
    //  }
     
     // Check if $uploadOk is set to 0 by an error
    //  if ($uploadOk == 0) {
    //    echo "Sorry, your file was not uploaded.";
    //  // if everything is ok, try to upload file
    //  } else {
    //    if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
    //         echo 'ĐÃ Thêm Thành Công';
    //    } else {
    //      echo "Sorry Lỗi ";
    //    }
    //  }











}

?>