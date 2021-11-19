<?php
    include_once 'pdo.php';

    function loadAll_category() {
        $sql="SELECT * FROM tbl_category order by cateName DESC";
        $listcategory=pdo_query($sql);
        return $listcategory;
    }


    function loadOne_category($cateId){
        $sql="SELECT * FROM tbl_category where cateId= $cateId";
        $res =pdo_query_one($sql);
        return $res;
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
    function update_category($cateId, $cateName) {
        $sql="UPDATE tbl_category SET cateName = '$cateName' WHERE cateId = $cateId";
        $res = pdo_execute($sql);
        return $res; 
    }

    function delete_category($cateId){
        $sql="DELETE FROM tbl_category where cateId=$cateId";
        pdo_execute($sql);
    }
    
    function delete_cateChild($cateChildId){
        $sql="DELETE FROM tbl_category_child where cateChildId=$cateChildId";
        pdo_execute($sql);
    }
?>