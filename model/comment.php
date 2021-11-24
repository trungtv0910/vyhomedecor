<?php
    function insert_comment($prodId, $custId, $content, $date){
        $sql="INSERT INTO tbl_comment(prodId, custId, content, date) values ('$prodId', '$custId', '$content', '$date')";
        pdo_execute($sql);
    }
    function statistical_comments_product(){
        $sql = "SELECT tbl_product.prodName as prodName,tbl_product.prodId as prodId, tbl_product.quantity as quantity, tbl_product.price as price, tbl_product.image as image, max(tbl_comment.date) as lastDate, count(tbl_comment.commId) as countComm";
        $sql.=" from tbl_comment left join tbl_product on tbl_productgit.prodId=tbl_comment.prodId";
        $sql.=" group by tbl_product.prodId order by max(tbl_comment.date) desc";
        $list_comments_product = pdo_query($sql);
        return $list_comments_product;
    }
?>