<?php

    function insert_comment($prodId, $custId, $content, $date){
        $sql="INSERT INTO tbl_comment(prodId, custId, content, date) values ('$prodId', '$custId', '$content', '$date')";
        pdo_execute($sql);
    }
    function statistical_comments_product(){
        $sql = "SELECT tbl_product.prodName as prodName,tbl_product.prodId as prodId, tbl_product.type as type,tbl_product.quantity as quantity, tbl_product.price as price, tbl_product.image as image, max(tbl_comment.date) as lastDate, count(tbl_comment.commId) as countComm";
        $sql.=" from tbl_comment left join tbl_product on tbl_product.prodId=tbl_comment.prodId";
        $sql.=" group by tbl_product.prodId order by max(tbl_comment.date) desc";
        $list_comments_product = pdo_query($sql);
        return $list_comments_product;
    }

    function loadAll_comment_product($prodId){
        $sql = "SELECT tbl_comment.*, tbl_customer.custName as custName, tbl_product.prodName as prodName FROM tbl_comment 
        INNER JOIN tbl_customer on tbl_customer.custId = tbl_comment.custId
        INNER JOIN tbl_product on tbl_product.prodId = tbl_comment.prodId WHERE tbl_comment.prodId = $prodId order by tbl_comment.commId DESC";  
        $listcomment = pdo_query($sql);
        return $listcomment;
    }

    function delete_comment($commId){
        $sql="DELETE FROM tbl_comment where commId=$commId";
        pdo_execute($sql);
    }
    
?>