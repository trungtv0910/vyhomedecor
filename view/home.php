<?php
    $listproduct = loadAll_product_home();
    $newproduct = load_new_product();
    $topviewproduct = load_topview_product();
    $topsellersproduct = load_top_sellers();
?>
            <div class="grid wide">
                <div class="row highlight">
                    <div class="col l-6 m-6 c-12">
                        <div class="highlight__slider">
                            <img src="./images/slider/slider.png" class="highlights__slider-img">
                            <img src="./images/slider/slider1.png" class="highlights__slider-img">
                            <img src="./images/slider/slider2.png" class="highlights__slider-img">      
                            <div class="highlight__slider-control">
                                <a class="highlight__slider-control-btn" onclick="currentSlide(1)"></a>
                                <a class="highlight__slider-control-btn" onclick="currentSlide(2)"></a>
                                <a class="highlight__slider-control-btn" onclick="currentSlide(3)"></a>
                            </div>
                        </div>
                    </div>
                    <div class="col l-6 m-6 c-12">
                        <a href="#" class="highlights__item-top-link">
                            <img src="http://demo.snstheme.com/wp/simen/wp-content/uploads/2011/05/5.png" class="highlights__item-top-img">
                        </a>
                        <div class="highlights__item-sub">
                            <div class="row">
                                <div class="col l-6 m-6 c-12">
                                    <a href="" class="highlights__item-sub-link highlights__item-sub-link-1">
                                        <img src="http://demo.snstheme.com/wp/simen/wp-content/uploads/2015/11/banner1-300x286.jpg" class="highlights__item-sub-img">
                                    </a>
                                </div>
                                <div class="col l-6 m-6 c-12">
                                    <a href="" class="highlights__item-sub-link highlights__item-sub-link-2">
                                        <img src="http://demo.snstheme.com/wp/simen/wp-content/uploads/2015/11/banner2-300x286.jpg" class="highlights__item-sub-img">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="products">
                    <ul class="products__category-list">
                        <li class="products__category-item products__category-item--active">
                            <a href="index.php?act=product" class="products__category-link">DANH SÁCH SẢN PHẨM</a>
                        </li>
                        <li class="products__category-item"></li>
                    </ul>       
                    <div class="row products__list">
                    <?php
                        foreach ($listproduct as $product) {
                            extract($product);
                    ?>
                        
                        <div class="col l-2-4 m-4 c-12">
                            <div class="products__item">
                                <div class="products__item-link">
                                  <!-- <a href="index.php?act=product&prodId=<?=$prodId?>&title=<?=$prodName_unsigned?>">  <img src="<?=BASE_URL ?>uploads/<?=$image ?>" class="products__item-img"></a> -->
                                  <a href="<?=$prodName_unsigned?>_id=<?=$prodId?>">  <img src="<?=BASE_URL ?>uploads/<?=$image ?>" class="products__item-img"></a>
                                    <div class="products__item-link-hover">
                                        <a href="<?=$prodName_unsigned?>_id=<?=$prodId?>" class="products__item-link-hover-add">
                                            <i class="products__item-link-hover-add-icon fas fa-shopping-cart"></i>
                                            Xem ngay
                                        </a>
                                        <div href="#" class="products__item-link-hover-info">
                                            <div class="products__item-link-hover-info-item">
                                                <i class="products__item-link-hover-info-icon fas fa-heart"></i>
                                                <span class="products__item-link-hover-info-item-hover">Wishlist</span>
                                            </div>
                                            <div class="products__item-link-hover-info-item">
                                                <i class="products__item-link-hover-info-icon fas fa-random"></i>
                                                <span class="products__item-link-hover-info-item-hover">Compare</span>
                                            </div>
                                            <div class="products__item-link-hover-info-item">
                                                <i class="products__item-link-hover-info-icon fas fa-eye"></i>
                                                <span class="products__item-link-hover-info-item-hover">Quick View</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <a href="index.php?act=product&prodId=<?=$prodId?>" class="products__item-name"><?=$prodName?></a>
                                <div class="products__item-price">
                                <?php
                                    if($discount > 0) {
                                ?>
                                    <span class="products__item-price-old"><?=number_format($price - ($price * $discount),0,',','.')?>đ</span>
                                <?php
                                    }
                                ?>
                                    <span class="products__item-price-now"><?=number_format($price,0,',','.');?>đ</span>
                                </div>
                                <span class="products__item-rating">
                                    <i class="products__item-rating-icon products__item-rating-icon--liked fas fa-star"></i>
                                    <i class="products__item-rating-icon products__item-rating-icon--liked fas fa-star"></i>
                                    <i class="products__item-rating-icon products__item-rating-icon--liked fas fa-star"></i>
                                    <i class="products__item-rating-icon products__item-rating-icon--liked fas fa-star"></i>
                                    <i class="products__item-rating-icon fas fa-star"></i>
                                </span>
                                <?php
                                    if($discount > 0) {
                                ?>
                                    <span class="products__item-sale">SALE <?=$discount*100?>%</span>
                                <?php
                                    }
                                ?>
                            </div>
                        </div>
                    <?php
                        }
                    ?>
                    </div>
                </div>
                <div class="products__control">
                    <button class="products__control-btn">Load more items</button>
                </div>
                <div class="new-products">
                <?php
                    foreach ($newproduct as $product) {
                        extract($product);
                ?>
                    <div class="row new-products__img-container">
                        <div class="col l-6 m-6 c-12">
                            <div>
                                <img src="<?=BASE_URL ?>uploads/<?=$image ?>" class="new-products__img">
                            </div>
                        </div>
                        <div class="col l-6 m-6 c-12">
                            <div class="new-products__info">
                                <h3 class="new-products__heading"><?=$prodName?></h3>
                                <h4 class="new-products__sub-heading">SẢN PHẨM MỚI NHẤT</h4>
                                <p class="new-products__about">
                                    <?php 
                                    $des= json_decode($prodDesc,true);
                                    echo  $des['des'];
                                    ?>
                                </p>
                                <a href="index.php?act=product&prodId=<?=$prodId?>" class="new-products__btn">Xem ngay</a>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
                    }
                ?>
                <div class="suggest">
                    <div class="most-view__title">
                        <h3 class="most-view__heading">TOP SẢN PHẨM BÁN CHẠY NHẤT</h3>
                        <span class="most-view__strike"></span>
                        <div class="most-view__control">
                            <div class="most-view__btn">
                                <i class="most-view__btn-icon fas fa-arrow-left"></i>
                                <i class="most-view__btn-icon fas fa-arrow-right"></i>
                            </div>
                        </div>
                    </div>
                  
                    <div class="row products__list">
                    <?php
                        foreach ($topsellersproduct as $product) {
                            extract($product);
                    ?>
                        
                        <div class="col l-2-4 m-4 c-12">
                            <div class="products__item">
                                <div class="products__item-link">
                                  <a href="<?=$prodName_unsigned?>_id=<?=$prodId?>">  <img src="<?=BASE_URL ?>uploads/<?=$image ?>" class="products__item-img"></a>
                                    <div class="products__item-link-hover">
                                        <a href="<?=$prodName_unsigned?>_id=<?=$prodId?>" class="products__item-link-hover-add">
                                            <i class="products__item-link-hover-add-icon fas fa-shopping-cart"></i>
                                            Xem ngay
                                        </a>
                                        <div href="#" class="products__item-link-hover-info">
                                            <div class="products__item-link-hover-info-item">
                                                <i class="products__item-link-hover-info-icon fas fa-heart"></i>
                                                <span class="products__item-link-hover-info-item-hover">Wishlist</span>
                                            </div>
                                            <div class="products__item-link-hover-info-item">
                                                <i class="products__item-link-hover-info-icon fas fa-random"></i>
                                                <span class="products__item-link-hover-info-item-hover">Compare</span>
                                            </div>
                                            <div class="products__item-link-hover-info-item">
                                                <i class="products__item-link-hover-info-icon fas fa-eye"></i>
                                                <span class="products__item-link-hover-info-item-hover">Quick View</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <a href="index.php?act=product&prodId=<?=$prodId?>" class="products__item-name"><?=$prodName?></a>
                                <div class="products__item-price">
                                <?php
                                    if($discount > 0) {
                                ?>
                                    <span class="products__item-price-old"><?=number_format($price - ($price * $discount),0,',','.')?>đ</span>
                                <?php
                                    }
                                ?>
                                    <span class="products__item-price-now"><?=number_format($price,0,',','.');?>đ</span>
                                </div>
                                <span class="products__item-rating">
                                    <i class="products__item-rating-icon products__item-rating-icon--liked fas fa-star"></i>
                                    <i class="products__item-rating-icon products__item-rating-icon--liked fas fa-star"></i>
                                    <i class="products__item-rating-icon products__item-rating-icon--liked fas fa-star"></i>
                                    <i class="products__item-rating-icon products__item-rating-icon--liked fas fa-star"></i>
                                    <i class="products__item-rating-icon fas fa-star"></i>
                                </span>
                                <?php
                                    if($discount > 0) {
                                ?>
                                <span class="products__item-sale">SALE <?=$discount*100?>%</span>
                                <?php
                                    }
                                ?>
                            </div>
                        </div>
                    <?php
                        }
                    ?>
                </div>
                <div class="banner">
                    <div class="row">
                        <div class="col l-6 m-12 c-12">
                            <a href="#" class="highlights__item-top-link">
                                <img src="./images/banner/banner4.png" class="highlights__item-top-img">
                            </a>
                        </div>
                        <div class="col l-3 m-6 c-12">
                            <a href="" class="highlights__item-sub-link highlights__item-sub-link-2">
                                <img src="./images/banner/banner5.jpeg" class="highlights__item-sub-img">
                            </a>
                        </div>
                        <div class="col l-3 m-6 c-12">
                            <a href="" class="highlights__item-sub-link highlights__item-sub-link-1">
                                <img src="./images/banner/banner6.jpeg" class="highlights__item-sub-img">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="most-view">
                    <div class="most-view__title">
                        <h3 class="most-view__heading">SẢN PHẨM ĐƯỢC XEM NHIỀU NHẤT</h3>
                        <span class="most-view__strike"></span>
                        <div class="most-view__control">
                            <div class="most-view__btn">
                                <i class="most-view__btn-icon fas fa-arrow-left"></i>
                                <i class="most-view__btn-icon fas fa-arrow-right"></i>
                            </div>
                        </div>
                    </div>
                    <div class="row products__list">
                    <?php
                        foreach ($topviewproduct as $product) {
                            extract($product);
                    ?>
                        <div class="col l-3 m-6 c-12">
                            <div class="products__item most-view__item">
                                <div class="products__item-link most-view__item-link">
                                    <a href="<?=$prodName_unsigned?>_id=<?=$prodId?>">   <img src="<?=BASE_URL ?>uploads/<?=$image ?>" class="products__item-img most-view__item-img"></a>
                                 
                                </div>
                                <div class="most-view__item-info">
                                    <a href="<?=$prodName_unsigned?>_id=<?=$prodId?>" class="products__item-name most-view__item-name"><?=$prodName?></a>
                                    <div class="products__item-price">
                                    <?php
                                    if($discount > 0) {
                                    ?>
                                        <span class="products__item-price-old"><?=number_format($price - ($price * $discount),0,',','.')?>đ</span> <br>
                                    <?php
                                        }
                                    ?>
                                        <span class="products__item-price-now"><?=number_format($price,0,',','.');?>đ</span>
                                    </div>
                                    <span class="products__item-rating">
                                        <i class="products__item-rating-icon products__item-rating-icon--liked fas fa-star"></i>
                                        <i class="products__item-rating-icon products__item-rating-icon--liked fas fa-star"></i>
                                        <i class="products__item-rating-icon products__item-rating-icon--liked fas fa-star"></i>
                                        <i class="products__item-rating-icon products__item-rating-icon--liked fas fa-star"></i>
                                        <i class="products__item-rating-icon fas fa-star"></i>
                                    </span>
                                    <a href="#" class="most-view__item-btn"> 
                                        <i class="fas fa-shopping-cart"></i>    
                                        Xem ngay
                                    </a>
                                </div>
                            </div>
                        </div>
                    <?php
                        }
                    ?>
                    </div>
                </div>
                <div class="most-view">
                    <div class="most-view__title">
                        <h3 class="most-view__heading">BÀI ĐĂNG MỚI NHẤT</h3>
                        <span class="most-view__strike"></span>
                        <div class="most-view__control">
                            <div class="most-view__btn">
                                <i class="most-view__btn-icon fas fa-arrow-left"></i>
                                <i class="most-view__btn-icon fas fa-arrow-right"></i>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-30">
                        <div class="col l-4 m-6 c-12">
                            <a href="#" class="highlights__item-top-link">
                                <img src="./images/poster/post1.jpg" class="highlights__item-top-img">
                            </a>
                            <div class="posts">
                                <div class="posts__time">
                                    <span class="posts__date">3</span>
                                    <span class="posts__month">NOV</span>
                                </div>
                                <div class="posts__info">
                                    <span class="posts__info-by">Admin</span>
                                    <a class="posts__info-name">Latin professor at Hampden-Sydney</a>
                                    <span class="posts__info-about">Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature.</span>
                                </div>
                            </div>
                        </div>
                        <div class="col l-4 m-6 c-12">
                            <a href="#" class="highlights__item-top-link">
                                <img src="./images/poster/post2.jpg" class="highlights__item-top-img">
                            </a>
                            <div class="posts">
                                <div class="posts__time">
                                    <span class="posts__date">3</span>
                                    <span class="posts__month">NOV</span>
                                </div>
                                <div class="posts__info">
                                    <span class="posts__info-by">Admin</span>
                                    <a class="posts__info-name">Morbi semper eros sit amet mi molestie</a>
                                    <span class="posts__info-about">Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature.</span>
                                </div>
                            </div>
                        </div>
                        <div class="col l-4 m-6 c-12">
                            <a href="#" class="highlights__item-top-link">
                                <img src="./images/poster/post3.png" class="highlights__item-top-img">
                            </a>
                            <div class="posts">
                                <div class="posts__time">
                                    <span class="posts__date">3</span>
                                    <span class="posts__month">NOV</span>
                                </div>
                                <div class="posts__info">
                                    <span class="posts__info-by">Admin</span>
                                    <a class="posts__info-name">Quisque a turpis ornare, efficitur nibh</a>
                                    <span class="posts__info-about">Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature.</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
      
  