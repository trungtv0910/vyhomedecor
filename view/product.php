<div class="grid wide">
    <div class="directional">
        <a href="index.php">Trang Chủ</a> <i class="fas fa-chevron-right"></i> <a href="index.php?act=list-product&cateId=<?= $cate['cateId'] ?>"><?= $cate['cateName'] ?></a> <i class="fas fa-chevron-right"></i> <a href="index.php?act=list-product&cateId=<?= $cate['cateId'] ?>&cateChildId=<?= $cateChild['cateChildId'] ?>"><?= $cateChild['cateChildName'] ?></a>
    </div>

    <div class="product">
        <!--thông tin-->
        <div class="product__left">
            <!-- <form action="index.php?act=shoppingcart" method="post" id="shoppingCart"> -->

            <div class="row content-1" id="shoppingCart">

                <?php
                extract($loadOne);
                ?>

                <div class="col l-5 m-12">
                    <div class="box-trai mr">
                        <div class="img product-block">
                            <img src="<?= BASE_URL ?>uploads/<?= $image ?>" alt="">
                        </div>
                    </div>
                </div>
                <div class="col l-7 m-12">


                    <div class="box-phai">

                        <div class="title">
                            <h1><?= $prodName ?></h1>
                            <span><?= number_format($price - ($price * $discount), 0, ',', '.') ?>đ</span>
                            <?php
                            if ($discount > 0) {
                            ?>
                                <del><?= number_format($price, 0, ',', '.'); ?>đ</del>
                            <?php } ?>
                        </div>

                        <div class="size">
                            <span>
                                <p>Thông tin sản phẩm</p>
                                <?php $des = json_decode($prodDesc, true); ?>

                                <b>Kích thước:</b> <?= $des['size'] ?> <br>
                                <b>Khối lượng:</b> <?= $des['mass'] ?> <br>
                                <b>Chất liệu:</b> <?= $des['material'] ?> <br>
                                <b>Màu sắc:</b> <?= $des['color'] ?> <br>
                                <b>Mô tả:</b> <?= $des['des'] ?>
                            </span><br>

                            <div class="buttons_added">
                                <strong>Số Lượng</strong>
                                <input onclick="var result = document.querySelector('.quantity'); var qty = result.value; if( !isNaN(qty)  &&  qty > 1 ) result.value--;return false;" type='button' value='-' class="quantity-control" />
                                <input id="getQuantity" class='quantity' min='1' name='quantity' type='text' value='1' />
                                <input onclick="var result = document.querySelector('.quantity'); var qty = result.value; if( !isNaN(qty)) result.value++;return false;" type='button' value='+' class="quantity-control" />
                            </div>
                        </div>
                        <div class="show-anh">
                            <?php
                            $data = $imageSmall;
                            $data = json_decode($data, true);
                            foreach ($data as $valueIgm) {
                            ?>
                                <div class="img-sp product-small-block ">
                                    <img src="<?= BASE_URL ?>uploads/<?= $valueIgm['image'] ?>" class="product-img-small">
                                </div>
                            <?php
                            }
                            ?>
                        </div>
                        <div class="info-hidden">
                            <input id="getProdId" type="hidden" value="<?= $prodId ?>" name="prodId">
                            <input id="getImage" type="hidden" value="<?= $image ?>" name="image">
                            <input id="getPrice" type="hidden" value="<?= $price - ($price * $discount) ?>" name="price">

                        </div>
                        <div class="mua-hang">
                            <input type="submit" name="addToCart" class="<?php if (isset($_SESSION['login'])) {
                                                                                echo 'realTimeAddToCart';
                                                                            } ?>" id="addToCart" value="Thêm vào giỏ hàng">
                            <!-- <button   id="addToCart" >Thêm giỏ hàng</button> -->
                            <input type="submit" name="buyNow" class="<?php if (isset($_SESSION['login'])) {
                                                                            echo 'realTimeBuyNow';
                                                                        } ?>" value="Mua ngay" id="buyNow">
                        </div>

                    </div>

                </div>

            </div>
            <!-- </form> -->
        </div>
        <!--sản phẩm liên quan và bình luận-->
        <div class="product__right">
            <div class="row content-2">
                <div class="col l-4 m-12 s-12">
                    <div class="top-yeu-thich">
                        <div class="tieu-de">
                            <h2>Sản Phẩm Cùng Loại</h2>
                        </div>
                        <?php
                        foreach ($product_similar as $value) {
                            extract($value);
                        ?>
                            <div class="sanpham">
                                <a href="<?= $prodName_unsigned ?>_id=<?= $prodId ?>" class="sanpham-img">
                                    <img src="<?= BASE_URL ?>uploads/<?= $image ?>" alt="">
                                </a>
                                <div class="addCart">
                                    <a class="addCart-name" href="<?= $prodName_unsigned ?>_id=<?= $prodId ?>"><?= $prodName ?></a>
                                    <strong><?= number_format($price - ($price * $discount), 0, ',', '.') ?>đ</strong><br>
                                    <a class="addCart-text" href="#"><i class="fas fa-shopping-cart"></i> ADD TO CART</a>
                                </div>
                            </div>
                        <?php
                        }
                        ?>
                    </div>
                </div>
                <div class="col l-8 m-12 s-12">
                    <?php
                    extract($loadOne);
                    ?>
                    <div class="from-binhluan" id="form-comment">
                        <div class="from">
                            <div class="reveiws">
                                <h2>Bình Luận</h2>
                            </div>

                            <div class="nguoi-reveiws">
                                <?php

                                $load_comment = load_commentByIdProd($prodId);

                                foreach ($load_comment as $value) {
                                    extract($value);
                                    $loadCust = loadOne_customer($custId);
                                ?>
                                    <div class="noi-dung-bl">
                                        <div class="anh">
                                            <i class="fas fa-user"></i>
                                        </div>
                                        <div class="bl">
                                            <p><strong><?= $loadCust['custName'] ?></strong> - <strong class="comment-time"><?= $date ?></strong></p>
                                            <p><?= $content ?></p>
                                            <?php
                                            $replyAdmin = loadReply_Comment($commId);
                                            foreach ($replyAdmin as $valueRep) {
                                            ?>
                                                <div class="noi-dung-bl">
                                                    <div class="anh">
                                                        <i class="fas fa-user"></i>
                                                    </div>
                                                    <div class="bl">
                                                        <p><strong style="color:red">AD: <?= $valueRep['custName'] ?></strong> - <strong class="comment-time"><?= $valueRep['date'] ?></strong></p>
                                                        <p><?= $valueRep['content'] ?></p>

                                                    </div>
                                                </div>
                                            <?php } ?>
                                        </div>
                                    </div>
                                <?php
                                }
                                ?>
                            </div>
                            <?php
                            if (isset($_SESSION['login']['login']) == true) {
                                $account = $_SESSION['login'];
                            ?>
                                <?php if ($_SESSION['login']['status'] != 0) { ?>
                                    <div class="addemail">
                                        <p>Thêm bình luận</p>
                                    </div>
                                    <div class="binh-luan">
                                        <!-- <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post"> -->

                                        <input type="text" id="comm_content" class="form-text" name="content" style="width:100%; height:80px;border-radius: 4px;" placeholder="Nhập bình luận ở đây..." required></input>
                                        <br>
                                        <input type="hidden" id="prodId" name="prodId" value="<?= $prodId ?>">
                                        <input type="hidden" id="custId" name="custId" value="<?= $account['custId'] ?>">
                                        <input type="submit" id="send" name="send-comment" value="Gửi bình luận">
                                        <!-- </form> -->
                                    </div>
                                <?php } else { ?>
                                    <div class="alertComment">
                                        <p>Tài khoản của bạn bị khoá chức năng Bình luận.</p>
                                    </div>
                                <?php } ?>
                            <?php } else { ?>
                                <div class="alertComment">
                                    <p>Vui lòng đăng nhập để có thể bình luận !</p>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        $('#send').click(function() {
            var prodId = $('#prodId').val();
            var custId = $('#custId').val();
            var content = $('#comm_content').val();
            console.log(prodId, content);
            if (prodId != "" && content != "") {
                $.post("view/form-comment.php", {
                    prodId: prodId,
                    content: content,
                    custId: custId
                }, function(data) {
                    $('.nguoi-reveiws').html(data);
                    document.querySelector("#comm_content").value = "";

                });

            } else {
                alert("Bạn chưa nhập nội dung!");
            }

        });

        //sự kiện thêm giỏ hàng
        $('.realTimeAddToCart').click(function() {
            var prodId = $('#getProdId').val();
            var price = $('#getPrice').val();
            var quantity = $('#getQuantity').val();
            var image = $('#getImage').val();
            $.post('model/ajaxAddCart_model.php', {
                prodId: prodId,
                price: price,
                quantity: quantity,
                image: image
            }, function(data) {
                $('#show_count').html(data);

            });
        });
        // sự kiện khi thêm vào giỏ hàng scroll về top
        $('.realTimeAddToCart').click(function() {
            // document.documentElement.scrollTop = 170;
            $('html, body').animate({
                scrollTop: 170
            }, 50);
        })

        //sự kiện mua hàng ngay
        $('.realTimeBuyNow').click(function() {
            var prodId = $('#getProdId').val();
            var price = $('#getPrice').val();
            var quantity = $('#getQuantity').val();
            var image = $('#getImage').val();
            $.post('model/ajaxBuyNow_model.php', {
                prodId: prodId,
                price: price,
                quantity: quantity,
                image: image
            }, function(data) {
                $('#show_count').html(data);

            });
        });




    });
    // const addToCart = document.querySelector('#addToCart')
    // const shoppingCart = document.querySelector('#shoppingCart')
    // // const login = document.querySelector('.js-login')
    // const buyNow = document.querySelector('#buyNow')
    // if(login)

    //     addToCart.onclick = () => {
    //         shoppingCart.onsubmit = (e) => {
    //             e.preventDefault()
    //         }
    //         login.click()
    //     }      
    //     buyNow.onclick = () => {
    //         shoppingCart.onsubmit = (e) => {
    //             e.preventDefault()
    //         }
    //         login.click()
    //     }   
</script>