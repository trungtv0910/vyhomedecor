<?php
    function insert_comment($prodId, $custId, $content, $date){
        $sql="INSERT INTO tbl_comment(prodId, custId, content, date) values ('$prodId', '$custId', '$content', '$date')";
        pdo_execute($sql);
    }
  























    function load_commentByIdProd($prodId)
    {
        $sql ="SELECT * From tbl_comment where prodId =$prodId";
        return pdo_query($sql);       
    }
?>