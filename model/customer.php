<?php
include_once 'pdo.php';
function loadAll_customer(){
        $sql="SELECT * FROM tbl_customer order by custId DESC";
        $listcustomer=pdo_query($sql);
        return $listcustomer;
    }
?>