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

    function insert_category($cateName){
        $sql="INSERT INTO tbl_category(cateName) values('$cateName')";
        pdo_execute($sql);
    }

    function update_cateChild($cateChildId, $cateChildName) {
        $sql="UPDATE tbl_category_child SET cateChildName = '$cateChildName' WHERE cateChildId = $cateChildId";
        $res = pdo_execute($sql);
        return $res; 
    }
?>