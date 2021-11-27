<?php

    function addTocart($prodId,$price,$image,$quantity,$get_prod)
    {
        if (!empty($_SESSION['login']['mycart'])) {
            $cart = $_SESSION['login']['mycart'];
            if (array_key_exists($prodId, $cart)) {
                $cart[$prodId] = array(
                    'quantity'   =>  (int)$cart[$prodId]['quantity'] + $quantity,
                    'price'      =>  $price,
                    'prodName'   =>  $get_prod['prodName'],
                    'image'      =>  $get_prod['image']
                );
            } 
       else {
                $cart[$prodId] = array(
                    'quantity' => $quantity,
                    'price'    => $get_prod['price'],
                    'prodName' => $get_prod['prodName'],
                    'image'      =>  $get_prod['image']
                );
            }
        } else {
            $cart[$prodId] = array(
                'quantity' => $quantity,
                'price'    => $price,
                'prodName' => $get_prod['prodName'],
                'image'      =>  $get_prod['image']
            );
        }
        return     $_SESSION['login']['mycart'] = $cart;

    }


?>