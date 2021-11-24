<!-- <div class="container"> -->
<div class="grid wide">
    <div class="product">
        <!--thông tin-->
        <div class="product__left">
            <div class="row content-1">
            <?php
                extract($loadOne);
            ?>
                <div class="col l-5">
                    <div class="box-trai mr">
                        <div class="img product-block">
                            <img src="<?= BASE_URL ?>uploads/<?= $image ?>" alt="">
                        </div>
                    </div>
                </div>
                <div class="col l-7">
                    <div class="box-phai">
                        <div class="title">
                            <h1><?= $prodName ?></h1>
                            <span><?= number_format($price - ($price * $discount), 0, ',', '.') ?>đ</span>
                            <del><?= number_format($price, 0, ',', '.'); ?>đ</del>
                        </div>

                        <div class="size">
                            <span><?= $prodDesc ?></span><br>

                            <div class="buttons_added">
                                <strong>Số Lượng</strong>
                                <input class="minus is-form" type="button" value="-">
                                <input aria-label="quantity" class="input-qty" max="Số tối đa" min="Số tối thiểu" name="" type="number" value="">
                                <input class="plus is-form" type="button" value="+">
                            </div>
                        </div>
                        <div class="show-anh">
                            <?php
                            $data = $imageSmall;
                            $data = json_decode($data, true);
                            foreach ($data as $valueIgm) {
                            ?>
                                <div class="img-sp product-small-block ">
                                    <img src="<?=BASE_URL?>uploads/<?=$valueIgm['image'] ?>" class="product-img-small">
                                </div>
                            <?php
                            }
                            ?>
                            <!-- <div class="img-sp product-small-block ">
                                            <img src="images/productList/sp2.jpg" class="product-img-small">
                                        </div>
                                        
                                        <div class="size">
                                            <span><?=$prodDesc?></span><br>
                    
                                            <div class="buttons_added">
                                                <strong>Số Lượng</strong>
                                                <input class="minus is-form" type="button" value="-">
                                                <input aria-label="quantity" class="input-qty" max="Số tối đa" min="Số tối thiểu" name="" type="number" value="">
                                                <input class="plus is-form" type="button" value="+">
                                            </div>
                                        </div>
                                        <div class="img-sp product-small-block ">
                                            <img src="images/productList/sp5.jpg" class="product-img-small">
                                        </div> -->
                        </div>
                        <div class="mua-hang">
                            <input type="submit" value="Thêm vào giỏ hàng"> <input type="submit" value="Mua ngay">
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!--sản phẩm liên quan và bình luận-->
        <div class="product__right">
            <div class="row content-2">
                <div class="col l-3">
                    <div class="top-yeu-thich">
                        <div class="tieu-de">
                            <h2>Sản Phẩm Cùng Loại</h2>
                        </div>
                        <?php
                        foreach ($product_similar as $value) {
                            extract($value);
                            $link_product = "index.php?act=product&prodId=" . $prodId;

                        ?>
                            <div class="sanpham">
                                <div class="sanpham-img">
                                    <img src="<?= BASE_URL ?>uploads/<?= $image ?>" alt="">
                                </div>
                                <div class="addCart">
                                    <a class="addCart-name" href="<?= $link_product ?>"><?= $prodName ?></a>
                                    <strong><?= number_format($price - ($price * $discount), 0, ',', '.') ?>đ</strong><br>
                                    <a class="addCart-text" href="#"><i class="fas fa-shopping-cart"></i> ADD TO CART</a>
                                </div>
                            </div>
                        <?php
                        }
                        ?>
                    </div>
                </div>
                <div class="col l-9">
                    <?php
                        extract($loadOne);
                    ?>
                    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
                    <script>
                        $(document).ready(function(){
                           $('#form-comment').load('view/form-comment.php', {prodId: <?=$prodId?>});
                        });
                    </script>
                    <div class="from-binhluan" id="form-comment">
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- </div> -->