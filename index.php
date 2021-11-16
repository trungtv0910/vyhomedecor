<?php 
    include_once 'view/header.php';
    include_once 'model/pdo.php';
    include_once 'model/account_model.php';
    include_once 'model/global.php';
?>

<?php 
    if(isset($_GET['act'])){
        $path =$_GET['act'];
        switch ($path){
            case "login":{
                if(isset($_POST['login'])){
                    $username=$_POST['username'];
                    $password =$_POST['password'];
                    $res= checkLogin($username,$password);
                    if($res==1){
                    
                      echo '<script>window.location="index.php" </script>';
                    }else 
                    {
                    echo "<script>Swal.fire({icon: 'error', title: 'Đăng nhập thất bại',text: 'Bạn nhập sai mật khẩu hoặc tài khoản!' })</script>";
                           include_once 'view/home.php';
                    }
            
                }


            }break;
            case "logout" : {
                checkLogout();
                echo '<script>window.location="index.php" </script>';
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