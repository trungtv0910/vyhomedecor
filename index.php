<?php 
    include 'view/header.php';
    include_once 'model/pdo.php';
?>

<?php 
    if(isset($_GET['act'])){
        $path =$_GET['act'];
        switch ($path){
            case "login":{
                if(isset($_POST['login'])){
                    echo $username=$_POST['username'];
                    echo $password =$_POST['password'];


                }


            }break;
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