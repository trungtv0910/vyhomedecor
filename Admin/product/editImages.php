<!-- thêm sản phẩm -->
<!-- <h2>Thêm Sản Phẩm mới</h2> -->
<style>
    .img-old,
    .smallImgOld {
        position: relative;
    }

    .deleteImg,
    .smallDelete {
        position: absolute;
        top: 0;
        right: 0;
    }

    .smallDelete {
        padding: 2px 7px;
        color: white;
        background-color: red;
        font-size: 14px;
        cursor: pointer;

    }

    .list-img {
        display: flex;
        padding-left: 0px;
        flex-direction: row;
        align-items: flex-start;
    }

    .list-img li {
        list-style: none;
        margin: 5px;
        flex-basis: 23.5%;
        flex-shrink: 0;
        flex-grow: 0;
        align-items: flex-start;

    }
</style>
<header class="page-header page-header-compact page-header-light border-bottom bg-white mb-4">

    <div class="page-header-content px-4 ">
        <div class="row align-items-center justify-content-between pt-3">
            <div class="col-auto mb-3">
                <h4 class="page-header-title">
                    Sửa sản phẩm
                </h4>
            </div>
            <div class="col-12 col-xl-auto mb-3">
                <a class="btn btn-sm btn-light text-primary" href="index.php?act=product&edit=<?=$prodId ?>">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left me-1">
                            <line x1="19" y1="12" x2="5" y2="12"></line>
                            <polyline points="12 19 5 12 12 5"></polyline>
                        </svg>
                       Quay Lại
                    </a>
            </div>
        </div>
    </div>

</header>
<div class="form">
    <form method="POST" action="index.php?act=product&update_imgs_product" enctype="multipart/form-data">
        <div class="row">
            <div class="col-xl-8">
                <!-- Profile picture card-->

                <div class="card mb-xl-0">
                    <div class="card-header">
                        Tải Lên Nhiều Ảnh
                    </div>
                    <div class="card-body text-center">
                        <input type="hidden" value="<?=$one_product['prodId'] ?>" name="prodId">
                        <?php
                        $dataImg = $one_product['imageSmall'];
                        $dataImg = json_decode($dataImg, true);
                        ?>
                        <ul class="list-img">
                            <!-- <input id="dataImg" type="hidden" value='<?= $one_product['imageSmall'] ?>'> -->
                            <?php if (count($dataImg) > 0) { ?>
                                <?php foreach ($dataImg as $value) { ?>
                                    <li class="smallImgOld">
                                        <img width="100%" src="<?= BASE_URL ?>uploads/<?= $value['image'] ?>" alt="">
                                        <a  href="index.php?act=product&imageSmall=<?= $one_product['prodId'] ?>&deleteImgById=<?= $value['id']; ?>" class="smallDelete">X  </a> 
                                    </li>

                            <?php }
                            } ?>

                            <?php
                            for ($i = 4; $i > count($dataImg); $i--) {
                            ?>
                              <input type="file" name="images[]">
                            <?php
                            }
                            ?>
                        </ul>

                    </div>
                </div>
            </div>
            <div class="col-xl-4">
                <!-- Account details card-->
                <div class="card mb-4">
                    <div class="card-header">Tác vụ</div>
                    <div class="card-body">

                        <button class="btn btn-primary" name="update_imgs_product" type="submit">Lưu Ảnh</button>

                    </div>
                </div>
            </div>

        </div>
    </form>
</div> <!-- form-->