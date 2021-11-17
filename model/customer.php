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

function update_customer($data){
    $custId=$data['custId'];
    $custName =$data['custName'];
    $phone =$data['phone'];
    $address =$data['address'];
    $status =$data['status'];
    $role =$data['role'];
    $sql="UPDATE tbl_customer SET custName='$custName', phone='$phone' ,address='$address' ,role =$role ,status =$status where custId = $custId";
    $res = pdo_execute($sql);
    return $res; 
}

function add_customer($email, $custName, $username, $password){
    $sql="insert into tbl_customer(email, custName, username, password,status) values ('$email', '$custName', '$username', '$password','1')";
    pdo_execute($sql);
}

function delete_customer($custId){
    $sql="DELETE FROM tbl_customer where custId=$custId";
    pdo_execute($sql);
}























?>
