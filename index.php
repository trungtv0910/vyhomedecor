<?php

include_once 'model/category.php';
include_once 'model/product_model.php';
include_once 'view/header.php';
include_once 'model/pdo.php';
include_once 'model/account_model.php';
include_once 'model/global.php';
include_once 'model/customer.php';
include_once 'model/comment.php';
include_once 'model/bill.php';
include_once 'model/cart_model.php';

?>

<?php


if (isset($_GET['act'])) {
    $path = $_GET['act'];
    switch ($path) {
        case "login": {
                if (isset($_POST['login'])) {
                    $username = $_POST['username'];
                    $password = $_POST['password'];
                    $res = checkLogin($username, $password);
                    if ($res == 1) {

                        echo '<script>window.location="index.php" </script>';
                    } else {
                        echo "<script>Swal.fire({icon: 'error', title: 'Đăng nhập thất bại',text: 'Bạn nhập sai mật khẩu hoặc tài khoản!' })</script>";
                        include_once 'view/home.php';
                    }
                }
            }
            break;
        case "register": {
                if (isset($_POST['register'])) {
                    $email = $_POST['email'];
                    $custName = $_POST['name'];
                    $password = $_POST['password'];
                    $passwordCheck = $_POST['passwordCheck'];
                    $username = $_POST['username'];
                    if ($password == $passwordCheck) {
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
                    } else {
                        echo "<script>Swal.fire({icon: 'error', title: 'Nhập lại mật khẩu không chính xác !'})</script>";
                        include_once 'view/home.php';
                    }
                }
            }
            break;

        case "change-pass": {
                if (isset($_POST['changepass']) && ($_POST['changepass'])) {
                    $custId = $_POST['custId'];
                    $username = $_POST['username'];
                    $password = $_POST['password'];
                    $passwordCheck = $_POST['passwordCheck'];
                    if ($password == $passwordCheck) {
                        update_password($custId, $password);
                        $_SESSION['login'] = checkLogin($username, $password);
                        echo "<script>
                                Swal.fire({
                                position: 'top-end',
                                icon: 'success',
                                title: 'Đổi mật khẩu thành công',
                                showConfirmButton: false,
                                timer: 1500})
                            </script>";
                        include_once 'view/home.php';
                    } else {
                        echo "<script>Swal.fire({icon: 'error', title: 'Nhập lại mật khẩu không chính xác !'})</script>";
                        include_once 'view/home.php';
                    }
                }
            }
            break;

        case "edit-customer": {
                if (isset($_POST['edit-customer']) && ($_POST['edit-customer'])) {
                    $custId = $_POST['custId'];
                    $username = $_POST['username'];
                    $password = $_POST['password'];
                    $custName = $_POST['custName'];
                    $phone = $_POST['phone'];
                    $email = $_POST['email'];
                    $address = $_POST['address'];
                    edit_customer($custId, $username, $password, $custName, $phone, $email, $address);
                    $_SESSION['login'] = checkLogin($username, $password);
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
            }
            break;
        case "forget-pass": {
                // echo '<script>alert("Xin chao các ban")</script>';
                if (isset($_POST['forget-pass']) && filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
                    // echo $_POST['email'];
                    if (checkEmail_customer($_POST['email'])) {
                        $res = checkEmail_customer($_POST['email']);
                        $password = $res['password'];
                        $email = $res['email'];
                        $username = $res['username'];
                        if (sendEmail($email, $password, $username) == 1) {
                            echo "<script>
                        Swal.fire({
                            position: 'top-end',
                            icon: 'success',
                            title: 'Yêu cầu lấy lại mật khẩu đã được duyệt. Vui lòng kiểm tra Email',
                            showConfirmButton: false,
                            timer: 2500
                          })
                        </script>";
                            include 'view/home.php';
                        } else {
                            echo 'Thất bại';
                            include 'view/home.php';
                        }
                    }
                }
            }
            break;

        case "logout": {
                checkLogout();
                echo '<script>window.location="index.php" </script>';
            }
            break;
        case "product": {
                if (isset($_GET['prodId'])) {
                    $prodId = $_GET['prodId'];
                     // tăng hệ lượt view
                     update_view_product($prodId);
                    $loadOne = loadOne_product($prodId);
                    $cate = loadOne_category($loadOne['cateId']);
                    $cateChild = loadOne_ChildCategory($loadOne['cateChildId']);
                    extract($loadOne);
                    $product_similar = loadOne_product_similar($prodId, $cateId);
                    include 'view/product.php';
                } else {
                    include 'view/home.php';
                }
            }
            break;
        case "list-product": {

                if (isset($_GET['cateId'])) {
                    $cateId = $_GET['cateId'];

                    $limit = 20;
                    $start = 0;
                    if (isset($_GET['page'])) {
                        $page = $_GET['page'];
                        $start = ($page - 1) * $limit;
                    }
                    if (isset($_GET['cateChildId'])) {
                        $cateChildId = $_GET['cateChildId'];
                    } else {
                        $cateChildId = 0;
                    }
                    $countProduct = count(load_product_condition(0, 1000, 0, $cateId, $cateChildId));
                    $listproduct = load_product_condition($start, $limit, 0, $cateId, $cateChildId);
                }

                include 'view/list-product.php';
            }
            break;
        case "shoppingcart": {
                if (isset($_SESSION['login']['login']) == true) {
                    if (isset($_POST['buyNow'])) {
                        $image = $_POST['image'];
                        $prodId = $_POST['prodId'];
                        $price = $_POST['price'];
                        $quantity = $_POST['quantity'];
                        $get_prod =  loadOne_product($prodId);
                        $addToCart =    addTocart($prodId, $price, $image, $quantity, $get_prod);
                        if ($addToCart == true) {
                            // echo '<pre>';
                            // print_r($_SESSION);
                            // echo '</pre>';
                            include 'view/shoppingcart.php';
                        }
                    } else {
                        if (!isset($_SESSION['login']['mycart']) || empty($_SESSION['login']['mycart'])) {
                            include 'view/nullCart.php';
                        } else {
                            if (isset($_GET['remove_product'])) {
                                $prodId = $_GET['remove_product'];
                                unset($_SESSION['login']['mycart'][$prodId]);
                                echo '<script>window.location="index.php?act=shoppingcart"</script>';
                            }
                            include 'view/shoppingcart.php';
                        }
                    }
                }
            }
            break;
        case "mybill": {
                if (isset($_GET['remove'])) {
                    $billId = $_GET['billId'];
                    remove_bill($billId);
                }
                include 'view/mybill.php';
            }
            break;
        case "bill-confirm": {
                if (isset($_SESSION['login']) && !empty($_SESSION['login']['mycart'])) {
                    include 'view/bill-Confirm.php';
                    if (isset($_POST['acceptBill'])) {
                        $dataProduct = $_SESSION['login']['mycart'];
                        if (insertToBill($_POST, $dataProduct)) {
                            unset($_SESSION['login']['mycart']);
                            echo "<script>Swal.fire({ position: 'top-end',icon: 'success',title: 'Đặt hàng Thành Công.',showConfirmButton: false,timer: 1500})
                              var action = setTimeout(function(){window.location='index.php?act=mybill';}, 1500);</script>";
                        } else {
                            echo "<script>Swal.fire({icon: 'error',title: 'Oops...',text: 'Đặt hàng Thất Bại'})</script>";
                        }
                    }
                } else {
                    echo '<script>window.location="index.php"</script>';
                }
            }
            break;
        default:
            include 'view/home.php';
            break;
    }
} else if (isset($_GET['key_search'])) {
    $key = $_GET['key_search'];
    $countProduct = count(load_product_condition(0, 1000, 0, 0, 0, $key));
    $limit = 20;
    $start = 0;
    if (isset($_GET['page'])) {
        $page = $_GET['page'];
        $start = ($page - 1) * $limit;
    }

    $listproduct = load_product_condition($start, $limit, 0, 0, 0, $key);

    include 'view/list-product.php';
} else {

    include 'view/home.php';
}
?>

<?php
include 'view/footer.php';
?>