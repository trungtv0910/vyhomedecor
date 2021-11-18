<?php
function list_Product() {
    $sql="SELECT tbl_product.* ,tbl_category_child.cateChildName, tbl_category.cateName
    FROM tbl_product 
    INNER JOIN tbl_category_child on tbl_category_child.cateChildId =tbl_product.cateChildId
    INNER JOIN tbl_category on tbl_category.cateId = tbl_product.cateId;";
    $res = pdo_query($sql);
    return $res;
}


?>