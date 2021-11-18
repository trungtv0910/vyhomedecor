<?php
    include_once 'pdo.php';

    function loadAll_category() {
        $sql="SELECT * FROM tbl_category order by cateName DESC";
        $listcategory=pdo_query($sql);
        return $listcategory;
    }
?>