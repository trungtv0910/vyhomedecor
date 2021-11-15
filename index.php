<?php 
include 'view/header.php';
?>

<?php 
    if(isset($_GET['act'])){
        $path =$_GET['act'];
        switch ($path){
            case "product":{
                include 'view/product.php';
            }
            break;
            case "":{

            }
            default: 
            include 'view/home.php';
            break;
        }
    }else{
        include 'view/home.php';
    }
?>

<?php 
include 'view/footer.php';
?>