<?php
function loadall_customer(){
        $sql="select * from tbl_customer order by id desc";
        $listcustomer=pdo_query($sql);
        return $listcustomer;
    }
?>