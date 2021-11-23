<!-- <div class="container"> -->
            <div class="grid wide">
                <div class="product">
                    <!--thông tin-->
                    <div class="row content-1">
                        <?php
                           extract($loadOne);
                        ?>
                        <div class="col l-5">
                            <div class="box-trai mr">
                                <div class="img product-block">
                                    <img src="<?=BASE_URL ?>uploads/<?=$image ?>" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col l-7">
                            <div class="box-phai">
                                <div class="title">
                                    <h1><?=$prodName?></h1>
                                    <span><?=number_format($price - ($price * $discount),0,',','.')?>đ</span>
                                    <del><?=number_format($price,0,',','.');?>đ</del>
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
                                <div class="show-anh">
                                    <div class="img-sp product-small-block ">
                                        <img src="images/productList/sp1.jpg" class="product-img-small">
                                    </div>
                                    <div class="img-sp product-small-block ">
                                        <img src="images/productList/sp2.jpg" class="product-img-small">
                                    </div>
                                    <div class="img-sp product-small-block ">
                                        <img src="images/productList/sp4.jpg" class="product-img-small">
                                    </div>
                                    <div class="img-sp product-small-block ">
                                        <img src="images/productList/sp5.jpg" class="product-img-small">
                                    </div>
                                </div> 
                                <div class="mua-hang">
                                    <input type="submit" value="Thêm vào giỏ hàng" > <input type="submit" value="Mua ngay">
                                </div>
                            
                            </div>
                        </div>
                    </div> 
                    <!--sản phẩm liên quan và bình luận-->   
                    <div class="content-2">
                        <div class="top-yeu-thich">
                            <div class="tieu-de">
                                <h2>Sản Phẩm Cùng Loại</h2>
                            </div>
                            <?php
                                foreach ($product_similar as $value) {
                                    extract($value);
                                    $link_product="index.php?act=product&prodId=".$prodId;
                                
                            ?>
                            <div class="sanpham">
                                <div class="sanpham-img">
                                    <img src="<?=BASE_URL ?>uploads/<?=$image ?>" alt="">
                                </div>
                                <div class="addCart">
                                    <a href="<?=$link_product?>"><?=$prodName?></a><br>
                                    <strong><?=number_format($price - ($price * $discount),0,',','.')?>đ</strong><br>
                                    <a href="#"><i class="fas fa-shopping-cart"></i> ADD TO CART</a>
                                </div>
                            </div>
                        <?php
                         }
                        ?>
                        </div>
                        <div class="from-binhluan">
                            <div class="from">
                               <div class="reveiws">
                                   <h2>Bình Luận</h2>
                               </div>
                               <div class="nguoi-reveiws">
                                  <div class="noi-dung-bl">
                                    <div class="anh">
                                      <i class="fas fa-user"></i>
                                    </div>
                                    <div class="bl">
                                        <p><strong>James Koster</strong> - <em>June 7, 2013</em></p>
                                        <p>Sản phẩm đẹp</p>
                                    </div>
                                  </div>
                                  <div class="noi-dung-bl">
                                    <div class="anh">
                                      <i class="fas fa-user"></i>
                                    </div>
                                    <div class="bl">
                                        <p><strong>James Koster</strong> - <em>June 7, 2013</em></p>
                                        <p>Sản phẩm tốt</p>
                                    </div>
                                  </div>
                               </div>
                               <div class="addemail">
                                <p>Thêm Bình Luận<br>
                                    Các trường bắt buộc đã được đánh giá bằng dấu *.
                                </p>
                               </div>
                               <div class="binh-luan">
                                <form >
                                    Bình luận của bạn
                                    <textarea name="message" style="width:605px; height:100px;border-radius: 5px;"></textarea>
                                    <br>
                                    <input type="submit" value="Gửi bình luận">
                                </form>
                               </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <!-- </div> -->
        