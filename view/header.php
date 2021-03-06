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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VyHomeDecor</title>
    <link rel="icon" href="./images/logo/favicon.png" type="image/x-icon" />
    <link rel="stylesheet" href="css/mybill.css">
    <link rel="stylesheet" href="css/shoppingCart.css">
    <link rel="stylesheet" href="css/product.css">
    <link rel="stylesheet" href="css/grid.css">
    <link rel="stylesheet" href="css/base.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/reponsive.css">
    <link rel="stylesheet" href="css/checkout.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="js/jquery.js"></script>
    
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
                                <a href="#" class="header__top-left-link">VN??</a>
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
  
                        ?>
                            <ul class="header__top-right-list hide-on-mobile">



                                <li class="header__top-right-item">
                                    <i class="header__top-right-icon fas fa-user"></i>
                                    <a href="#" class="header__top-right-link">Xin ch??o: <?= $_SESSION['login']['custName']  ?></a>
                                    <ul class="account-control__list">
                                        <li class="account-control__item edit-customer__open">
                                            <i class="header__top-right-icon fas fa-user"></i>
                                            <a href="#" class="header__top-right-link">C???p nh???t t??i kho???n</a>
                                        </li>
                                        <li class="account-control__item changepass__open">
                                            <i class="header__top-right-icon fas fa-user-lock"></i>
                                            <a href="#" class="header__top-right-link">?????i m???t kh???u</a>
                                        </li>
                                        <li class="account-control__item">
                                            <i class="header__top-right-icon fas fa-box"></i>
                                            <a href="mybills" class="header__top-right-link">????n h??ng c???a t??i</a>
                                        </li>
                                        <?php
                                        if ($_SESSION['login']['role'] == 1) {
                                        ?>
                                            <li class="account-control__item">
                                                <i class="header__top-right-icon far fas fa-users-cog"></i>
                                                <a href="admin/index.php" class="header__top-right-link">Qu???n tr??? Admin</a>
                                            </li>
                                        <?php } ?>
                                        <li class="account-control__item ">
                                            <i class="header__top-right-icon fas fa-sign-in-alt"></i>
                                            <a href="index.php?act=logout" class="header__top-right-link">????ng xu???t</a>
                                        </li>
                                    </ul>
                                </li>
                                <div class="edit-customer" id="edit-customer">
                                    <form action="" method="post" id="edit-customer">
                                        <div class="edit-customer__control">
                                            <h4 class="edit-customer__heading">c???p nh???t t??i kho???n</h4>
                                            <span class="edit-customer__close"><i class="fas fa-times"></i></span>
                                        </div>
                                        <div id="divInput">
                                            <div class="form-group">
                                                <label for="enter-name" class="model-label"><i class="fas fa-user"></i> H??? v?? T??n</label>
                                                <input type="text" name="custName" class="model-input" id="enter-name" value="<?= $_SESSION['login']['custName'] ?>">
                                                <span class="form-message"></span>
                                            </div>
                                            <div class="form-group">
                                                <label for="enter-phone" class="model-label"><i class="fas fa-phone"></i> S??? ??i???n tho???i</label>
                                                <input type="text" name="phone" class="model-input" id="enter-phone" value="<?= $_SESSION['login']['phone'] ?>">
                                                <span class="form-message"></span>
                                            </div>
                                            <div class="form-group">
                                                <label for="enter-email" class="model-label"><i class="fas fa-envelope"></i> Email</label>
                                                <input type="text" name="email" class="model-input" id="enter-email" value="<?= $_SESSION['login']['email'] ?>">
                                                <span class="form-message"></span>
                                            </div>
                                            <label for="enter-address" class="model-label"><i class="fas fa-address-card"></i> ?????a ch???</label>
                                            <input type="text" name="address" class="model-input" id="enter-address" value="<?= $_SESSION['login']['address'] ?>">
                                            <input type="hidden" id="custId" name="custId" value="<?= $_SESSION['login']['custId'] ?>">
                                        
                                            <input type="submit" name="edit-customer" id="info" class="model-btn model-btn-login" value="C???p nh???t">
                                        </div>

                                    </form>
                                </div>
                                <div class="changepass">
                                    <form action="index.php?act=change-pass" method="post" id="change-pass">
                                        <div class="edit-customer__control">
                                            <h4 class="edit-customer__heading">?????i m???t kh???u</h4>
                                            <span class="changepass__close"><i class="fas fa-times"></i></span>
                                        </div>
                                        <div class="form-group">
                                            <label for="enter-pass" class="model-label"><i class="fas fa-unlock-alt"></i> M???t kh???u m???i</label>
                                            <input type="password" name="password" class="model-input" id="enter-pass">
                                            <span class="form-message"></span>
                                        </div>
                                        <div class="form-group">
                                            <label for="enter-passCheck" class="model-label"><i class="fas fa-unlock-alt"></i> Nh???p l???i m???t kh???u m???i</label>
                                            <input type="password" name="passwordCheck" class="model-input" id="enter-passCheck">
                                            <span class="form-message"></span>
                                        </div>
                                        <input type="hidden" name="custId" value="<?= $_SESSION['login']['custId'] ?>">
                                        <input type="hidden" name="username" value="<?=  $_SESSION['login']['username'] ?>">

                                        <input type="submit" name="changepass" class="model-btn model-btn-login" value="?????i m???t kh???u">
                                    </form>
                                </div>


                            </ul>
                            <div class="mobile-top-nav l-0 m-0">
                                <i class="mobile-top-nav__icon fas fa-anchor"></i>
                                <ul class="moblie-top-nav__list">
                                    <li class="moblie-top-nav__item">
                                        <i class="moblie-top-nav__icon far fa-user"></i>
                                        <a href="#" id="header_username" class="moblie-top-nav__link">Xin ch??o: <?= $_SESSION['login']['custName']  ?></a>
                                    </li>  
                                    <?php
                                        if ($_SESSION['login']['role'] == 1) {
                                        ?>
                                            <li class="moblie-top-nav__item">
                                                <i class="moblie-top-nav__icon far fas fa-users-cog"></i>
                                                <a href="admin/index.php" class="moblie-top-nav__link">Qu???n tr??? Admin</a>
                                            </li>
                                        <?php } ?>
                                    <li class="moblie-top-nav__item">
                                        <i class="moblie-top-nav__icon far fa-check-square"></i>
                                        <a href="mybills" class="moblie-top-nav__link">????n h??ng c???a t??i</a>
                                    </li>
                                    <li class="moblie-top-nav__item js-login-mb">
                                        <i class="moblie-top-nav__icon fas fa-sign-in-alt"></i>
                                        <a href="index.php?act=logout" class="moblie-top-nav__link">????ng Xu???t</a>
                                    </li>
                                </ul>
                            </div>
                        <?php
                        } else {

                        ?>
                            <ul class="header__top-right-list hide-on-mobile">


                                <li class="header__top-right-item js-login">
                                    <i class="header__top-right-icon fas fa-sign-in-alt"></i>
                                    <a href="#" class="header__top-right-link">????ng nh???p</a>
                                </li>
                            </ul>
                            <div class="mobile-top-nav l-0 m-0">
                                <i class="mobile-top-nav__icon fas fa-anchor"></i>
                                <ul class="moblie-top-nav__list">

                                    <li class="moblie-top-nav__item js-login-mb">
                                        <i class="moblie-top-nav__icon fas fa-sign-in-alt"></i>
                                        <a href="#" class="moblie-top-nav__link">????ng nh???p</a>
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
                                        <h3 class="header__promotion-heading">GIAO H??NG MI???N PH??</h3>
                                        <p class="header__promotion-details">?????i v???i ????n h??ng > 1.000.000 VN??</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col l-3 m-3 c-4">
                            <div class="header__promotion">
                                <a href="#" class="header__promotion-link">
                                    <span class="header__promotion-icon"><i class="fa fa-cloud-upload"></i></span>
                                    <div class="header__promotion-body hide-on-mobile-tablet">
                                        <h3 class="header__promotion-heading">GI???M GI?? T???I 20%</h3>
                                        <p class="header__promotion-details">??p d???ng ?????n h???t 30/12/2021</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col l-3 m-3 c-4">
                            <div class="header__promotion">
                                <a href="#" class="header__promotion-link">
                                    <span class="header__promotion-icon"><i class="fa fa-gift "></i></span>
                                    <div class="header__promotion-body hide-on-mobile-tablet">
                                        <h3 class="header__promotion-heading">MUA 1 T???NG 1</h3>
                                        <p class="header__promotion-details">?????i v???i ????n h??ng > 5.000.000 VN??</p>
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
                            <a href="index.php?act=introduce" class="header__nav-link">Gi???i thi???u</a>
                        </li>
                        <li class="header__nav-item">
                            <a href="category" class="header__nav-link ">Danh M???c S???n Ph???m</a>
                            <div class="header__nav-full furniture">
                                <?php
                                foreach ($listcategory as $category) {
                                    extract($category);
                                    $listcategory_child = loadAll_categorychild($cateId);
                                ?>
                                    <ul class="header__nav-full-list">
                                        <h3 class="header__nav-full-heading"><a href="cate=<?= $category['cateId'] ?>_<?=$cateName_unsigned?>" style="text-decoration: none; color:grey"> <?= $cateName ?></a></h3>
                                        <?php
                                        foreach ($listcategory_child as $category_child) {
                                            extract($category_child);
                                        ?>
                                            <li class="header__nav-full-item">
                                                <a href="<?= $category['cateId'] ?>_<?= $category_child['cateChildId'] ?>_<?=$cateName_unsigned?>_<?=$cateChildName_unsigned?>" class="header__nav-full-link"><?= $cateChildName ?></a>
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
                            <a href="#" class="header__nav-link">S???n Ph???m N???i B???t</a>
                            <div class="header__nav-full bedroom">
                                <?php
                                foreach ($tophighlightsproduct as $product) {
                                    extract($product);
                                ?>
                                    <ul class="header__nav-full-list">
                                        <div class="header__nav-full-hidden">
                                            <a href="<?=$prodName_unsigned?>_id=<?=$prodId?>" class="header__nav-full-link-img">
                                                <img src="uploads/<?= $image ?>" class="header__nav-full-img">
                                            </a>
                                        </div>
                                        <a href="<?=$prodName_unsigned?>_id=<?=$prodId?>" class="header__nav-full-link-info"><?= $prodName ?></a>
                                        <span class="header__nav-full-info">
                                            <?php
                                            $des = json_decode($prodDesc, true);
                                            // echo  textShorten($des['des'], 100);
                                            echo $des['des'];
                                            ?>
                                        </span>
                                    </ul>
                                <?php
                                }
                                ?>

                            </div>
                        </li>
                        <li class="header__nav-item header__nav-link-dad">
                            <a href="index.php?act=contact" class="header__nav-link">Li??n h???</a>
                        </li>
                        <li class="header__nav-item">
                            <a href="#" class="header__nav-link">G??p ??</a>
                        </li>
                        <li class="header__nav-item">
                            <a href="#" class="header__nav-link">H???i ????p</a>
                        </li>
                    </ul>
                    <label for="nav-mobile-input" class="menu-moblie">
                        <i class="menu-moblie__icon fas fa-bars"></i>
                    </label>
                    <input type="checkbox" hidden id="nav-mobile-input" class="nav-mobile__input">
                    <label for="nav-mobile-input" class="nav-mobile__overlay"></label>
                    <ul class="nav-moiblie__list">
                        <li class="nav-mobile__item">
                            <a href="index.html" class="nav-mobile__link">Trang ch???</a>
                        </li>
                        <li class="nav-mobile__item">
                            <a href="category" class="nav-mobile__link">Danh m???c s???n ph???m</a>
                        </li>
                        <li class="nav-mobile__item">
                            <a href="#" class="nav-mobile__link">S???n ph???m n???i b???t</a>
                        </li>
                        <li class="nav-mobile__item">
                            <a href="#" class="nav-mobile__link">Li??n h???</a>
                        </li>
                        <li class="nav-mobile__item">
                            <a href="#" class="nav-mobile__link">G??p ??</a>
                        </li>
                        <li class="nav-mobile__item">
                            <a href="#" class="nav-mobile__link">H???i ????p</a>
                        </li>
                    </ul>
                    <div class="header__nav-control">
                        <div class="header__nav-control-search">
                            <i class="header__nav-control-search-icon fas fa-search"></i>
                            <form action="index.php?act=search" method="GET">
                                <div class="header__nav-control-search-container">
                                    <input type="text" name="key_search" class="header__nav-control-search-input" placeholder="B???n mu???n t??m ki???m g?? ...">
                                    <button type="submit" class="header__nav-control-search-btn" style="cursor:pointer">SEARCH</button>
                                </div>
                            </form>
                        </div>
                        <a href="mycart" class="header__nav-control-cart">
                            <i class="header__nav-control-cart-ion fas fa-shopping-cart"></i>
                            <div id="show_count">
                                <p class="header__nav-control-cart-about">
                                    <?php
                                    if (isset($_SESSION['login']) && isset($_SESSION['login']['mycart'])) {
                                        $count_cart = count($_SESSION['login']['mycart']);
                                    } else {
                                        $count_cart = 0;
                                    }
                                    ?>
                                    <span id="show_quantity" class="header__nav-control-cart-quantity"><?= $count_cart; ?></span>
                                    ( items )
                                </p>
                                <ul class="header__nav-control-cart-list header__nav-control-cart-list--no-item">
                                    <li class="header__nav-control-cart-item" style="width:100%">
                                        <div class="header__nav-control-cart-item-name">
                                            <div class="status" style="display:flex; gap:10px">
                                                <img width="20px" src="images/cart-icon/Flat_tick_icon.svg" alt="">
                                                <p class="text">Th??m v??o gi??? h??ng th??nh c??ng!</p>
                                            </div>
                                            <div class="dieuhuong">
                                                <button class="btn-view-cart" href="index.php?act=shoppingcart">Xem gi??? h??ng v?? thanh to??n</button>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>

                        </a>
                    </div>
                </div>
            </div>
        </header>
        <div class="container">

           
            <script>
                $(document).ready(function() {
                    $('#info').click(function() {

                        var custId = $('#custId').val();
                        var custName = $('#enter-name').val();
                        var phone = $('#enter-phone').val();
                        var email = $('#enter-email').val();
                        var address = $('#enter-address').val();
                        $("#divInput").load("model/ajaxUpdateAcc_model.php", {
                            custId: custId,
                            custName: custName,
                            phone: phone,
                            email: email,
                            address: address
                        });
                        location.reload();
                    });
                });
            </script>

