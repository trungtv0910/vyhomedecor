<?php
    function statiscal_bill(){
        $sql = "SELECT count(tbl_bill.billId) AS countBill, sum(tbl_bill.billTotal) AS revenue  FROM tbl_bill";
        $statiscalBill = pdo_query($sql);
        return $statiscalBill;
    }
    function count_customer(){
        $sql = "SELECT count(tbl_customer.custId) AS countCustomer FROM tbl_customer WHERE role <> 1";
        $count_customers = pdo_query($sql);
        return $count_customers;
    }
    function count_product(){
        $sql = "SELECT count(tbl_product.prodId) AS countProduct FROM tbl_product";
        $countProducts = pdo_query($sql);
        return $countProducts;
    }

    function statiscal_product_category(){
        $sql = "SELECT count(tbl_product.cateId) AS products,tbl_category.cateName AS cateName, max(tbl_product.price) AS maxPrice, min(tbl_product.price) AS minPrice, avg(tbl_product.price) AS avgPrice";
        $sql.=" FROM tbl_product left join tbl_category on tbl_product.cateId = tbl_category.cateId";
        $sql.=" group by tbl_category.cateId order by cateName asc";
        $statiscal = pdo_query($sql);
        return $statiscal;
    }

    function statiscal_bill_product(){
        $sql = "SELECT tbl_product.prodName AS prodName, count(tbl_bill_detail.prodId) AS countProduct";
        $sql.=" FROM tbl_bill_detail left join tbl_product on tbl_product.prodId = tbl_bill_detail.prodId";
        $sql.=" group by tbl_product.prodId order by tbl_product.prodName asc";
        $statiscal = pdo_query($sql);
        return $statiscal;
    }

    function statiscal_bill_customer(){
        $sql = "SELECT tbl_customer.custName AS custName, count(tbl_bill.billId) AS countBill";
        $sql.=" FROM tbl_bill left join tbl_customer on tbl_bill.custId = tbl_customer.custId";
        $sql.=" group by tbl_customer.custId order by tbl_customer.custName asc";
        $statiscal = pdo_query($sql);
        return $statiscal;
    }

    function new_bill(){
        $sql = "SELECT tbl_bill.billId AS newBill FROM tbl_bill order by billId desc limit 0,5";
        $statiscal = pdo_query($sql);
        return $statiscal;
    }

    function new_customer(){
        $sql = "SELECT tbl_customer.custName AS newCustomer FROM tbl_customer WHERE role <> 1 order by custId desc limit 0,5";
        $statiscal = pdo_query($sql);
        return $statiscal;
    }

    function new_comment(){
        $sql = "SELECT tbl_comment.content AS newComment FROM tbl_comment WHERE replyId = '0' order by commId desc limit 0,5";
        $statiscal = pdo_query($sql);
        return $statiscal;
    }

    function new_product(){
        $sql = "SELECT tbl_product.prodName AS newProduct FROM tbl_product order by prodId desc limit 0,5";
        $statiscal = pdo_query($sql);
        return $statiscal;
    }
?>