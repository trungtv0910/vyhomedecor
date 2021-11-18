<?php
function list_Product() {
    $sql="SELECT * FROM tbl_product";
    $res = pdo_query($sql);
    return $res;
}


?>