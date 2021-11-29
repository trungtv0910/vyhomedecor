<!DOCTYPE html>
<html lang="en">
<?php
include_once 'model/pdo.php';
include_once 'model/account_model.php';
include_once 'model/category.php';
include_once 'model/product_model.php';
include_once 'model/customer.php';
include_once 'lib/format.php';
$listcustomer = loadAll_customer();
$listcategory = loadAll_category();
$tophighlightsproduct = load_top_highligth();
init();

?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1.0">
    <title>VyHomeDecor</title>
    <link rel="icon" href="./images/logo/favicon.png" type="image/x-icon" />
    <link rel="stylesheet" href="./css/mybill.css">
    <link rel="stylesheet" href="./css/shoppingCart.css">
    <link rel="stylesheet" href="./css/product.css">
    <link rel="stylesheet" href="./css/grid.css">
    <link rel="stylesheet" href="./css/base.css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/reponsive.css">
    <link rel="stylesheet" href="css/checkout.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>
    <div class="main">
        <header class="header">
            <div class="header__top">
                <div class="grid wide">
                    <div class="header__top-nav">
                        <ul class="header__top-left-list">
                            <li class="header__top-left-item header__language">
                                <a href="#" class="header__top-left-link">
                                    <img src="./images/language/vn.png" class="header__top-left-img">
                                    VIETNAM
                                </a>
                                <ul class="header__language-list">
                                    <li class="header__language-item">
                                        <a href="#" class="header__language-link">
                                            <img src="./images/language/en.jpg" class="header__language-img">
                                            ENGLISH
                                        </a>
                                    </li>
                                    <li class="header__language-item">
                                        <a href="#" class="header__language-link">
                                            <img src="./images/language/ru.jpg" class="header__language-img">
                                            Russian
                                        </a>
                                    </li>
                                    <li class="header__language-item">
                                        <a href="#" class="header__language-link">
                                            <img src="./images/language/bra.jpg" class="header__language-img">
                                            Brazil
                                        </a>
                                    </li>
                                    <li class="header__language-item">
                                        <a href="#" class="header__language-link">
                                            <img src="./images/language/fr.jpg" class="header__language-img">
                                            France
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="header__top-left-item header__currency">
                                <a href="#" class="header__top-left-link">VNĐ</a>
                                <ul class="header__currency-list">
                                    <li class="header__currency-item">
                                        <a href="#" class="header__currency-link">USD</a>
                                    </li>
                                    <li class="header__currency-item">
                                        <a href="#" class="header__currency-link">EUR</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <?php

                        if (isset($_SESSION['login']['login']) == true) {
                            $account = $_SESSION['login'];
                        ?>
                            <ul class="header__top-right-list hide-on-mobile">



                                <li class="header__top-right-item">
                                    <i class="header__top-right-icon fas fa-user"></i>
                                    <a href="#" class="header__top-right-link">Xin chào: <?= $account['custName']  ?></a>
                                    <ul class="account-control__list">
                                        <li class="account-control__item edit-customer__open">
                                            <i class="header__top-right-icon fas fa-user"></i>
                                            <a href="#" class="header__top-right-link">Cập nhật tài khoản</a>
                                        </li>
                                        <li class="account-control__item changepass__open">
                                            <i class="header__top-right-icon fas fa-user-lock"></i>
                                            <a href="#" class="header__top-right-link">Đổi mật khẩu</a>
                                        </li>
                                        <li class="account-control__item">
                                            <i class="header__top-right-icon fas fa-box"></i>
                                            <a href="index.php?act=mybill" class="header__top-right-link">Đơn hàng của tôi</a>
                                        </li>
                                        <?php
                                        if ($account['role'] == 1) {
                                        ?>
                                            <li class="account-control__item">
                                                <i class="header__top-right-icon far fas fa-users-cog"></i>
                                                <a href="admin/index.php" class="header__top-right-link">Quản trị Admin</a>
                                            </li>
                                        <?php } ?>
                                        <li class="account-control__item ">
                                            <i class="header__top-right-icon fas fa-sign-in-alt"></i>
                                            <a href="index.php?act=logout" class="header__top-right-link">Đăng xuất</a>
                                        </li>
                                    </ul>
                                </li>
                                <div class="edit-customer">
                                    <form action="index.php?act=edit-customer" method="post">
                                        <div class="edit-customer__control">
                                            <h4 class="edit-customer__heading">cập nhật tài khoản</h4>
                                            <span class="edit-customer__close"><i class="fas fa-times"></i></span>
                                        </div>
                                        <label for="enter-name" class="model-label"><i class="fas fa-user"></i> Họ và Tên</label>
                                        <input type="text" name="custName" class="model-input" id="enter-name" value="<?= $account['custName'] ?>">
                                        <label for="enter-phone" class="model-label"><i class="fas fa-phone"></i> Số điện thoại</label>
                                        <input type="text" name="phone" class="model-input" id="enter-phone" value="<?= $account['phone'] ?>">
                                        <label for="enter-email" class="model-label"><i class="fas fa-envelope"></i> Email</label>
                                        <input type="text" name="email" class="model-input" id="enter-email" value="<?= $account['email'] ?>">
                                        <label for="enter-address" class="model-label"><i class="fas fa-address-card"></i> Địa chỉ</label>
                                        <input type="text" name="address" class="model-input" id="enter-address" value="<?= $account['address'] ?>">
                                        <input type="hidden" name="custId" value="<?= $account['custId'] ?>">
                                        <input type="hidden" name="username" value="<?= $account['username'] ?>">
                                        <input type="hidden" name="password" value="<?= $account['password'] ?>">

                                        <input type="submit" name="edit-customer" class="model-btn model-btn-login" value="Cập nhật">
                                    </form>
                                </div>
                                <div class="changepass">
                                    <form action="index.php?act=change-pass" method="post">
                                        <div class="edit-customer__control">
                                            <h4 class="edit-customer__heading">Đổi mật khẩu</h4>
                                            <span class="changepass__close"><i class="fas fa-times"></i></span>
                                        </div>
                                        <label for="enter-email" class="model-label"><i class="fas fa-unlock-alt"></i> Mật khẩu mới</label>
                                        <input type="password" name="password" class="model-input" id="enter-email">
                                        <label for="enter-address" class="model-label"><i class="fas fa-unlock-alt"></i> Nhập lại mật khẩu mới</label>
                                        <input type="password" name="passwordCheck" class="model-input" id="enter-address">
                                        <input type="hidden" name="custId" value="<?= $account['custId'] ?>">
                                        <input type="hidden" name="username" value="<?= $account['username'] ?>">

                                        <input type="submit" name="changepass" class="model-btn model-btn-login" value="Đổi mật khẩu">
                                    </form>
                                </div>


                            </ul>
                            <div class="mobile-top-nav l-0 m-0">
                                <i class="mobile-top-nav__icon fas fa-anchor"></i>
                                <ul class="moblie-top-nav__list">
                                    <li class="moblie-top-nav__item">
                                        <i class="moblie-top-nav__icon far fa-user"></i>
                                        <a href="#" class="moblie-top-nav__link">Xin chào: <?= $account['custName']  ?></a>
                                    </li>
                                    <li class="moblie-top-nav__item">
                                        <i class="moblie-top-nav__icon far fa-heart"></i>
                                        <a href="#" class="moblie-top-nav__link">Yêu thích</a>
                                    </li>
                                    <li class="moblie-top-nav__item">
                                        <i class="moblie-top-nav__icon far fa-check-square"></i>
                                        <a href="#" class="moblie-top-nav__link">Giỏ hàng</a>
                                    </li>
                                    <li class="moblie-top-nav__item js-login-mb">
                                        <i class="moblie-top-nav__icon fas fa-sign-in-alt"></i>
                                        <a href="checkLogout()" class="moblie-top-nav__link">Đăng Xuất</a>
                                    </li>
                                </ul>
                            </div>
                        <?php
                        } else {

                        ?>
                            <ul class="header__top-right-list hide-on-mobile">


                                <li class="header__top-right-item js-login">
                                    <i class="header__top-right-icon fas fa-sign-in-alt"></i>
                                    <a href="#" class="header__top-right-link">Đăng nhập</a>
                                </li>
                            </ul>
                            <div class="mobile-top-nav l-0 m-0">
                                <i class="mobile-top-nav__icon fas fa-anchor"></i>
                                <ul class="moblie-top-nav__list">

                                    <li class="moblie-top-nav__item js-login-mb">
                                        <i class="moblie-top-nav__icon fas fa-sign-in-alt"></i>
                                        <a href="#" class="moblie-top-nav__link">Đăng nhập</a>
                                    </li>
                                </ul>
                            </div>
                        <?php
                        }
                        ?>
                    </div>
                </div>
            </div>
            <div class="grid wide">
                <div class="header__info">
                    <div class="row header__info-all header__info-tablet">
                        <div class="col l-3 m-3 c-12">
                            <div class="header__logo">
                                <a href="index.php"><img src="./images/logo/logo.png" alt="" class="header__logo-img"></a>
                            </div>
                        </div>
                        <div class="col l-3 m-3 c-4">
                            <div class="header__promotion">
                                <a href="#" class="header__promotion-link">
                                    <span class="header__promotion-icon"><i class="fa fa-truck"></i></span>
                                    <div class="header__promotion-body hide-on-mobile-tablet">
                                        <h3 class="header__promotion-heading">GIAO HÀNG MIỄN PHÍ</h3>
                                        <p class="header__promotion-details">Đối với đơn hàng > 1.000.000 VNĐ</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col l-3 m-3 c-4">
                            <div class="header__promotion">
                                <a href="#" class="header__promotion-link">
                                    <span class="header__promotion-icon"><i class="fa fa-cloud-upload"></i></span>
                                    <div class="header__promotion-body hide-on-mobile-tablet">
                                        <h3 class="header__promotion-heading">GIẢM GIÁ TỚI 20%</h3>
                                        <p class="header__promotion-details">Áp dụng đến hết 30/12/2021</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col l-3 m-3 c-4">
                            <div class="header__promotion">
                                <a href="#" class="header__promotion-link">
                                    <span class="header__promotion-icon"><i class="fa fa-gift "></i></span>
                                    <div class="header__promotion-body hide-on-mobile-tablet">
                                        <h3 class="header__promotion-heading">MUA 1 TẶNG 1</h3>
                                        <p class="header__promotion-details">Đối với đơn hàng > 5.000.000 VNĐ</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Header Nav -->
                <div class="header__nav">
                    <ul class="header__nav-list hide-on-mobile-tablet">
                        <li class="header__nav-item header__nav-link-dad">
                            <a href="index.php" class="header__nav-link header__nav-link-icon"><i class="fas fa-home"></i></a>
                        </li>
                        <li class="header__nav-item">
                            <a href="#" class="header__nav-link">Giới thiệu</a>
                        </li>
                        <li class="header__nav-item">
                            <a href="index.php?act=category" class="header__nav-link ">Danh Mục Sản Phẩm</a>
                            <div class="header__nav-full furniture">
                                <?php
                                foreach ($listcategory as $category) {
                                    extract($category);
                                    $listcategory_child = loadAll_categorychild($cateId);
                                ?>
                                    <ul class="header__nav-full-list">
                                        <h3 class="header__nav-full-heading"><a href="index.php?act=list-product&cateId=<?= $category['cateId'] ?>" style="text-decoration: none; color:grey"> <?= $cateName ?></a></h3>
                                        <?php
                                        foreach ($listcategory_child as $category_child) {
                                            extract($category_child);
                                        ?>
                                            <li class="header__nav-full-item">
                                                <a href="index.php?act=list-product&cateId=<?= $category['cateId'] ?>&cateChildId=<?= $category_child['cateChildId'] ?>" class="header__nav-full-link"><?= $cateChildName ?></a>
                                            </li>
                                        <?php
                                        }
                                        ?>
                                    </ul>
                                <?php
                                }
                                ?>


                            </div>
                        </li>
                        <li class="header__nav-item">
                            <a href="#" class="header__nav-link">Sản Phẩm Nổi Bật</a>
                            <div class="header__nav-full bedroom">
                                <?php
                                foreach ($tophighlightsproduct as $product) {
                                    extract($product);
                                ?>
                                    <ul class="header__nav-full-list">
                                        <div class="header__nav-full-hidden">
                                            <a href="index.php?act=product&prodId=<?= $prodId ?>" class="header__nav-full-link-img">
                                                <img src="uploads/<?= $image ?>" class="header__nav-full-img">
                                            </a>
                                        </div>
                                        <a href="index.php?act=product&prodId=<?= $prodId ?>" class="header__nav-full-link-info"><?= $prodName ?></a>
                                        <span class="header__nav-full-info">
                                            <?php
                                            $des = json_decode($prodDesc, true);
                                            echo  textShorten($des['des'], 100);
                                            ?>
                                        </span>
                                    </ul>
                                <?php
                                }
                                ?>

                            </div>
                        </li>
                        <li class="header__nav-item header__nav-link-dad">
                            <a href="#" class="header__nav-link">Liên hệ</a>
                        </li>
                        <li class="header__nav-item">
                            <a href="#" class="header__nav-link">Góp ý</a>
                        </li>
                        <li class="header__nav-item">
                            <a href="#" class="header__nav-link">Hỏi đáp</a>
                        </li>
                    </ul>
                    <label for="nav-mobile-input" class="menu-moblie">
                        <i class="menu-moblie__icon fas fa-bars"></i>
                    </label>
                    <input type="checkbox" hidden id="nav-mobile-input" class="nav-mobile__input">
                    <label for="nav-mobile-input" class="nav-mobile__overlay"></label>
                    <ul class="nav-moiblie__list">
                        <li class="nav-mobile__item">
                            <a href="#" class="nav-mobile__link">Trang chủ</a>
                        </li>
                        <li class="nav-mobile__item">
                            <a href="#" class="nav-mobile__link">Danh mục sản phẩm</a>
                        </li>
                        <li class="nav-mobile__item">
                            <a href="#" class="nav-mobile__link">Sản phẩm nổi bật</a>
                        </li>
                        <li class="nav-mobile__item">
                            <a href="#" class="nav-mobile__link">Liên hệ</a>
                        </li>
                        <li class="nav-mobile__item">
                            <a href="#" class="nav-mobile__link">Góp ý</a>
                        </li>
                        <li class="nav-mobile__item">
                            <a href="#" class="nav-mobile__link">Hỏi đáp</a>
                        </li>
                    </ul>
                    <div class="header__nav-control">
                        <div class="header__nav-control-search">
                            <i class="header__nav-control-search-icon fas fa-search"></i>
                            <form action="index.php?act=search" method="GET">
                                <div class="header__nav-control-search-container">
                                    <input type="text" name="key_search" class="header__nav-control-search-input" placeholder="Bạn muốn tìm kiếm gì ...">
                                    <button type="submit" class="header__nav-control-search-btn" style="cursor:pointer">SEARCH</button>
                                </div>
                            </form>
                        </div>
                        <a href="index.php?act=shoppingcart" class="header__nav-control-cart">
                            <i class="header__nav-control-cart-ion fas fa-shopping-cart"></i>
                            <p class="header__nav-control-cart-about">
                                <?php 
                                if(isset($_SESSION['login']) && isset($_SESSION['login']['mycart'])){
                                    $count_cart=count($_SESSION['login']['mycart']);
                                }else{
                                    $count_cart=0;
                                }
                                ?>
                                <span class="header__nav-control-cart-quantity"><?=$count_cart?></span>
                                ( items )
                            </p>
                            <!-- <ul class="header__nav-control-cart-list header__nav-control-cart-list--no-item">
                                <li class="header__nav-control-cart-item">
                                    <span class="header__nav-control-cart-item-name">No products in the cart.</span>
                                </li>
                            </ul> -->
                        </a>
                    </div>
                </div>
            </div>
        </header>
        <div class="container">