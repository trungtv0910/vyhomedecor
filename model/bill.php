<?php
   function loadAll_bill(){
    $sql="SELECT * FROM tbl_bill ORDER BY billId DESC";
    return pdo_query($sql);
    }

    function loadOne_bill($billId){
        $sql="SELECT * FROM tbl_bill_detail where billId =$billId";
        return pdo_query($sql);
    }
    
?>