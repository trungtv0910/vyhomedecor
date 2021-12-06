<?php 
include_once 'global.php';
include_once 'pdo.php';
include_once 'account_model.php';
init();
include_once 'cart_model.php';
include_once 'product_model.php';
include_once 'bill.php';
if(isset($_POST['prodId'])){
    $prodId= $_POST['prodId'];
    unset($_SESSION['login']['mycart'][$prodId]);
    $mycart=$_SESSION['login']['mycart'];

    $i = 1;
    $total=0;
    foreach($mycart as $key => $value){
    $price_quantity=$value['price']*$value['quantity'];
    $total+= $price_quantity;
    $price=  number_format($value['price'],0,',','.');
    $priceTotalQuantity = number_format($value['price'],0,',','.');
        echo'
        <tr style="border-bottom: 1px solid #ccc;" class="cart__item">
            <td class="cart__method">
                <!-- <a href="index.php?act=shoppingcart&remove_product=<?=$key?>" class="cart__delete"><i class="fas fa-times-circle"></i></a> -->
                <button class="cart__delete" value="'.$key.'" ><i class="fas fa-times-circle"></i></button>
              
            </td>
            <td class="cart__info">
                <a href="#" class="cart__link">
                    <img src="'.BASE_URL.'uploads/'.$value['image'].'" alt="" class="cart__img">
                </a>
                <h4 class="cart__name">'.$value['prodName'].'</h4>
            </td>
            <td class="cart__price">'.$price.'₫</td>
            <td class="cart__quantity'.$i.'">
            <input onclick="var result = document.querySelector(".quantity'.$i.'"); var qty = result.value; if( !isNaN(qty)1 ) result.value--;return false;" type="button" value='-' class="quantity-control"/> &amp;&amp; qty > 

                <input id="quantity[]" class="quantity quantity'.$i.'" min="1" name="quantity" type="text" value="'.$value['quantity'].'" />
              
            </td>
            <td class="cart__total">'.$priceTotalQuantity .'₫</td>
        </tr>
   $i++; ';
    }


}

// <input onclick="var result = document.querySelector(".quantity'.$i.'"); var qty = result.value; if( !isNaN(qty) &amp;&amp; qty > 1 ) result.value--;return false;" type="button" value='-' class="quantity-control"/>
// <input onclick="var result = document.querySelector(".quantity'.$i.'"); var qty = result.value; if( !isNaN(qty)) result.value++;return false;" type="button" value='+' class="quantity-control"/>







?>