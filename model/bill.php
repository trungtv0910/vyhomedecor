<?php
   function loadAll_bill(){
    $sql="SELECT * FROM tbl_bill ORDER BY billId DESC";
    return pdo_query($sql);
    }

    function loadOne_bill($billId){
        $sql="SELECT tbl_bill_detail.*,tbl_product.prodName,tbl_product.image FROM tbl_bill_detail,tbl_product where tbl_product.prodId=tbl_bill_detail.prodId and billId=$billId";
        return pdo_query($sql);
    }
    
    function update_status($billId, $billStatus) {
        $sql="UPDATE tbl_bill SET billStatus = '$billStatus' WHERE billId = $billId";
        $res = pdo_execute($sql);
        return $res; 
    }
?>