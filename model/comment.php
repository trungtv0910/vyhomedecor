<?php

    function insert_comment($prodId, $custId, $content, $date){
        $sql="INSERT INTO tbl_comment(prodId, custId, content, date,replyId) values ('$prodId', '$custId', '$content', '$date','0')";
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
        INNER JOIN tbl_product on tbl_product.prodId = tbl_comment.prodId HAVING tbl_comment.prodId = $prodId AND tbl_comment.replyId =0 order by tbl_comment.commId DESC";  
        $listcomment = pdo_query($sql);
        return $listcomment;
    }

    function delete_comment($commId){
        $sql="DELETE FROM tbl_comment where commId=$commId";
       return pdo_execute($sql);
    }
    function load_commentByIdProd($prodId)
    {
        $sql ="SELECT * From tbl_comment where prodId =$prodId
        AND tbl_comment.replyId =0 
        ";
        return pdo_query($sql);
    }

    function admin_reply_comment($custId,$content,$commId,$prodId){
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $date = date('h:i:s a d/m/Y');
        $sql ="INSERT INTO tbl_comment(custId,content,replyId,prodId,date)values('$custId','$content','$commId','$prodId','$date')";
        return pdo_execute($sql);
    }
    function loadReply_Comment($commId){
        $sql ="SELECT * FROM tbl_comment
         INNER JOIN tbl_customer on tbl_customer.custId = tbl_comment.custId
         HAVING replyId =$commId ORDER BY commId ASC";
        return pdo_query($sql);
    }


?>