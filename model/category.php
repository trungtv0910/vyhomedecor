<?php
    include_once 'pdo.php';

    function loadAll_category() {
        $sql="SELECT * FROM tbl_category order by cateName DESC";
        $listcategory=pdo_query($sql);
        return $listcategory;
    }

    function loadAll_categorychild($cateId){
        $sql = "SELECT * FROM tbl_category_child where cateId = $cateId";
        $listcategory_child = pdo_query($sql);
        return $listcategory_child;   
    }
    
    function delete_category($cateId){
        $sql="DELETE FROM tbl_category where custId=$cateId";
        pdo_execute($sql);
    }
?>