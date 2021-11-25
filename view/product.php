<!-- <div class="container"> -->
<div class="grid wide">
    <div class="directional">
    <a href="index.php">Trang Chủ</a>  <i class="fas fa-chevron-right"></i>  <a href="index.php?act=list-product&cateId=<?=$cate['cateId']?>"><?=$cate['cateName']?></a>  <i class="fas fa-chevron-right"></i>  <a href="index.php?act=list-product&cateId=<?=$cate['cateId']?>&cateChildId=<?=$cateChild['cateChildId']?>"><?=$cateChild['cateChildName']?></a>
    </div>
  
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
                            <?php
                            if ($discount > 0) {
                            ?>
                                <del><?= number_format($price, 0, ',', '.'); ?>đ</del>
                            <?php } ?>
                        </div>

                        <div class="size">
                            <span>
                                <p>Thông tin sản phẩm</p>
                                <?php   $des =json_decode($prodDesc,true);?>
                           
                                <b>Kích thước:</b> <?=$des['size'] ?> <br>
                                <b>Khối lượng:</b> <?=$des['mass']?>   <br>
                                <b>Chất liệu:</b> <?=$des['material']?>   <br>
                                <b>Màu sắc:</b> <?=$des['color']?>   <br>
                                <b>Mô tả:</b>  <?=$des['des']?> 
                            </span><br>

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
                                    <img src="<?= BASE_URL ?>uploads/<?= $valueIgm['image'] ?>" class="product-img-small">
                                </div>
                            <?php
                            }
                            ?>
                
                            <!-- <div class="img-sp product-small-block ">
                                            <img src="images/productList/sp2.jpg" class="product-img-small">
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
                                <a href="<?= $link_product ?>" class="sanpham-img">
                                    <img src="<?= BASE_URL ?>uploads/<?= $image ?>" alt="">
                                </a>
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




                    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
                    <script>
                        $(document).ready(function(){
                           $('#form-comment').load('view/form-comment.php', {prodId: <?= $prodId ?>});
                        });
                    </script> -->
                    <div class="from-binhluan" id="form-comment">
                        <div class="from">
                            <div class="reveiws">
                                <h2>Bình Luận</h2>
                            </div>
                            <div class="nguoi-reveiws">
                                <?php
                                $load_comment = load_commentByIdProd($prodId);
                                // echo '<pre>';
                                // echo print_r($load_comment);
                                // echo '</pre>';
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
                                           $replyAdmin= loadReply_Comment($commId);
                                           foreach($replyAdmin as $valueRep){
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
                                <div class="addemail">
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
<!-- </div> -->
<script src="js/jquery.js"></script>
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
    });
</script>