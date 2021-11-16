<?php
include_once 'pdo.php';
function loadAll_customer(){
        $sql="SELECT * FROM tbl_customer order by custId DESC";
        $listcustomer=pdo_query($sql);
        return $listcustomer;
    }



function loadOne_customer($custId)
{
   $sql="SELECT * FROM tbl_customer where custId= $custId";
   $res =pdo_query_one($sql);
   return $res;
}

function insert_customer($data){
    echo $custName =$data['custName'];
    echo $phone =$data['phone'];
    echo $address =$data['address'];
    echo $role =$data['role'];
}
























?>
