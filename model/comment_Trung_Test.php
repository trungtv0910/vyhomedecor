<?php
    function load_commentByIdProd($prodId)
    {
        $sql ="SELECT * From tbl_comment where prodId =$prodId";
        return pdo_query($sql);
    }

?>