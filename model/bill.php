<?php
function loadAll_bill()
{
    $sql = "SELECT * FROM tbl_bill ORDER BY billId DESC";
    return pdo_query($sql);
}
function loadBillByBillId($billId)
{
    $sql = "SELECT * FROM tbl_bill where billId=$billId";
    return pdo_query($sql);
}

function loadAll_bill_custId($custId){
    $sql="SELECT * FROM tbl_bill WHERE custId = $custId order by billId desc";
    return pdo_query($sql);
}
function loadOne_bill($billId)
{
    $sql = "SELECT tbl_bill_detail.*,tbl_product.prodName,tbl_product.image FROM tbl_bill_detail,tbl_product where tbl_product.prodId=tbl_bill_detail.prodId and billId=$billId";
    return pdo_query($sql);
}


function update_status($billId, $billStatus)
{
    $sql = "UPDATE tbl_bill SET billStatus = '$billStatus' WHERE billId = $billId";
    $res = pdo_execute($sql);
    return $res;
}
function remove_bill($billId)
{
    $sql = "UPDATE tbl_bill SET billStatus = '4' WHERE billId = $billId";
    $res = pdo_execute($sql);
    return $res;
}
function insertToBill($data, $dataProduct)
{
     $custId    =   $data['custId'];
     $custName   =   $data['custName'];
     $phone      =   $data['phone'];
     $address    =   $data['address'];
     $payment    =   $data['payment'];
     $total      =   $data['total'];
     $email      =   $data['email'];
     $VAT        =   $data['vat'];
     $transportFee =  $data['transportFee'];
    $dataProduct;

    $billStatus      = 0;
    date_default_timezone_set('Asia/Ho_Chi_Minh');
    $date = date('h:i:s a d/m/Y');
    $sqlBill = "INSERT INTO tbl_bill(custId,date,payMethod,billCustName,billTotal,billStatus,billAddress,billphone,billEmail,billTransportFee,billVAT)
       VALUES('$custId','$date','$payment','$custName','$total','$billStatus','$address','$phone','$email','$transportFee','$VAT')";
    $billId = pdo_execute_lastId($sqlBill);

    if ($billId) {
        foreach ($dataProduct as $key => $value) {
            $prodQuantity = $value['quantity'];
            $prodPrice = $value['price'];
            $prodImage = $value['image'];
            $prodName = $value['prodName'];
            $sqlBillDetail = "INSERT INTO tbl_bill_detail(billId,prodId,quantity,price,image,prodName)Values('$billId','$key','$prodQuantity','$prodPrice','$prodImage','$prodName')";
            pdo_execute($sqlBillDetail);
        }
        return true;
    }else{
        return false;
    }


    
}


  
?>