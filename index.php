<?php 
    include_once 'view/header.php';
    include_once 'model/pdo.php';
    include_once 'model/account_model.php';
    include_once 'model/global.php';
    include_once 'model/customer.php';
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
            case "register":{
                if(isset($_POST['register'])){
                    $email = $_POST['email'];
                    $custName = $_POST['name'];
                    $password = $_POST['password'];
                    $passwordCheck = $_POST['passwordCheck'];
                    $username = $_POST['username'];
                    if($password == $passwordCheck){
                        add_customer($email, $custName, $username, $password);
                        echo "<script>
                                Swal.fire({
                                position: 'top-end',
                                icon: 'success',
                                title: 'Đăng ký thành công',
                                showConfirmButton: false,
                                timer: 1500})
                            </script>";
                           include_once 'view/home.php';
                    }else{
                        echo "<script>Swal.fire({icon: 'error', title: 'Nhập lại mật khẩu không chính xác !'})</script>";
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