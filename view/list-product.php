<style>
    .active_pa {
        background-color:#555;
       
    }
    .active_pa>a{ color: white !important;}
</style>
<div class="grid wide">

    <div class="products">
        <ul class="products__category-list">
            <li class="products__category-item products__category-item--active">
                <a href="#" class="products__category-link">DANH SÁCH SẢN PHẨM</a>
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
                            <a href="<?=$prodName_unsigned?>_id=<?=$prodId?>"> <img src="<?= BASE_URL ?>uploads/<?= $image ?>" class="products__item-img"></a>
                            <div class="products__item-link-hover">
                                <a href="index.php?act=product&prodId=<?= $prodId ?>" class="products__item-link-hover-add">
                                    <i class="products__item-link-hover-add-icon fas fa-shopping-cart"></i>
                                    Thêm vào giỏ hàng
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
                        <a href="index.php?act=product&prodId=<?= $prodId ?>" class="products__item-name"><?= $prodName ?></a>
                        <div class="products__item-price">
                            <?php
                            if ($discount > 0) {
                            ?>
                                <span class="products__item-price-old"><?= number_format($price - ($price * $discount), 0, ',', '.') ?>đ</span>
                            <?php
                            }
                            ?>
                            <span class="products__item-price-now"><?= number_format($price, 0, ',', '.'); ?>đ</span>
                        </div>
                        <span class="products__item-rating">
                            <i class="products__item-rating-icon products__item-rating-icon--liked fas fa-star"></i>
                            <i class="products__item-rating-icon products__item-rating-icon--liked fas fa-star"></i>
                            <i class="products__item-rating-icon products__item-rating-icon--liked fas fa-star"></i>
                            <i class="products__item-rating-icon products__item-rating-icon--liked fas fa-star"></i>
                            <i class="products__item-rating-icon fas fa-star"></i>
                        </span>
                        <?php
                        if ($discount > 0) {
                        ?>
                            <span class="products__item-sale">SALE <?= $discount * 100 ?>%</span>
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
        <ul class="pagination">
            <?php

            $countpage = ceil($countProduct / $limit);
            if (!isset($_GET['page'])) {
                $page = 1;
            } else {
                $page;
            }
            $count = 1;
            for ($i = 1; $i <= $countpage; $i++) {
                if (isset($_GET['key_search'])) {
            ?>
                    <li class=<?= $page == $count ? "active_pa" : ""; ?>><a href="index.php?key_search=<?= $key ?>&page=<?= $count ?>"><?= $count++ ?></a></li>
                <?php } else if (isset($_GET['cateId']) && !isset($_GET['cateChildId'])) { ?>
                    <li class=<?= $page == $count ? "active_pa" : ""; ?>><a href="index.php?act=list-product&cateId=<?= $cateId ?>&page=<?= $count ?>"><?= $count++ ?></a></li>
                <?php } else { ?>
                    <li class=<?= $page == $count ? "active_pa" : ""; ?>><a href="index.php?act=list-product&cateId=<?= $cateId ?>&cateChildId=<?= $cateChildId ?>&page=<?= $count ?>"><?= $count++ ?></a></li>
            <?php   }
            }
            ?>
        </ul>
        <!-- <button class="products__control-btn">Load more items</button> -->
    </div>
    <br>
    <br>