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

    function insert_category($catName){
        $sql="INSERT INTO tbl_category(cateName) values('$catName')";
        pdo_execute($sql);
    }
?>