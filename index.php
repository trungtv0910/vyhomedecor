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

            case "change-pass":{
                if(isset($_POST['changepass']) && ($_POST['changepass'])){
                    $custId = $_POST['custId'];
                    $username = $_POST['username'];
                    $password = $_POST['password'];
                    $passwordCheck = $_POST['passwordCheck'];
                    if($password == $passwordCheck){
                        update_password($custId, $password);
                        $_SESSION['login'] = checkLogin($username,$password);
                        echo "<script>
                                Swal.fire({
                                position: 'top-end',
                                icon: 'success',
                                title: 'Đổi mật khẩu thành công',
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

            case "edit-customer":{
                if(isset($_POST['edit-customer']) && ($_POST['edit-customer'])){ 
                    $custId = $_POST['custId'];
                    $username = $_POST['username'];
                    $password = $_POST['password'];
                    $custName = $_POST['custName'];
                    $phone = $_POST['phone'];
                    $email = $_POST['email'];
                    $address = $_POST['address'];
                    edit_customer($custId, $username, $password, $custName, $phone, $email, $address);
                    $_SESSION['login'] = checkLogin($username,$password);
                    echo "<script>
                                Swal.fire({
                                position: 'top-end',
                                icon: 'success',
                                title: 'Cập nhật thành công',
                                showConfirmButton: false,
                                timer: 1500})
                            </script>";
                    include_once 'view/home.php';
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