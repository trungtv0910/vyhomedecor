<?php
include_once '../../model/pdo.php';
include_once '../../model/category.php';

if(isset($_GET['cateId'])){
    $cateId = $_GET['cateId'];
    $listChildCate=loadAll_categorychild($cateId);
    foreach ($listChildCate as  $value) {
        echo " <option value='".$value['cateChildId']."'>".$value['cateChildName']."</option>";
    }
    // var_dump($listChildCate);



 
}



?>