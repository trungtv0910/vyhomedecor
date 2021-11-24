<style>
    .float-left {
        float: left;
    }

    .reply {
        display: flex;
        gap: 0px;
        width: 960px;
    }

    .reply_img {
        width: 10%;
    }

    .reply_img img {
        margin-top: 10px;
        width: 50px;
        height: 50px;
        border-radius: 50%;
    }

    .reply_content {
        width: 90%;
        text-align: left;
        background-color: #f9f9f9;
        border-radius: 2%;
        padding: 10px;
        box-sizing: border-box;
    }

    .name {
        font-size: 16px;
        font-weight: bold;
    }

    .from a {
        font-size: 14px;
        font-weight: bold;
        display: inline-block;
    }

    .time {
        font-weight: inherit;
        color: gray;
        font-size: 12px;
        margin-bottom: 5px;
    }

    .reply_content .comment {
        /* font-weight:inherit; */
        color: black
            /* font-size: 12px; */
    }

    .reply_child {
        width: 90%;
        display: flex;
        flex-direction: row;
        margin: 10px 0;
    }

    .reply_child .reply_content {
        background-color: white;
        border-radius: 0 2%;
    }
</style>



<div class="row">
    <div class="col-xl-12 col-md-12">
        <div class="card">
            <div class="card-header border-0">
                <div class="row align-items-center">
                    <div class="col">
                        <h3 class="mb-0">Quản Lý Bình luận</h3>
                    </div>
                    <div class="col text-right">
                        <!-- <a href="#!" class="btn btn-sm btn-primary">See all</a> -->
                    </div>
                </div>
            </div>
            <div class="table-responsive">
                <form action="" method="post">
                    <!-- Projects table -->
                    <table class="table align-items-center table-flush">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col-1">STT</th>

                                <th scope="col-3" class="text-center">Nội dung</th>


                                <th colspan="2" scope="col" class="text-center">Tuỳ chọn</th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $i = 1;
                            foreach ($listcomment as $value) {
                                extract($value);
                            ?>
                                <tr>
                                    <td><?= $i ?></td>

                                    <td class="reply">
                                        <div class="reply_img">
                                            <img width="50" src="img_tam/anhavatar.png" alt="">
                                        </div>
                                        <div class="reply_content">
                                            <span class="name"><?= $custName ?></span> From <span class="from"><a href="index.php?act=product&id_edit="><?= $prodName ?></a></span>
                                            <p class="time">Lúc: <?= $date ?></p>
                                            <p class="comment"><?= $content ?></p>


                                            <!-- <div class="reply_child">
                                            <div class="reply_img">
                                                <img width="50" src="img_tam/anhavatar.png" alt="">
                                            </div>
                                            <div class="reply_content">
                                                <span class="name">
                                                    Admin : Nguyễn Từ Trần
                                                    <p class="time">Lúc: 23:10 20/10/2021</p>
                                                    <p class="comment">Sản phẩm vẫn còn nhé, bên em sẽ liên hệ cho chị</p>
                                            </div>
                                        </div> -->
                                        </div>
                                    </td>
                                    <!-- <td><a class="btn btn-default" href="index.php?act=comment&reply">Trả lời</a></td> -->
                                    <td><a href="index.php?act=comment&reply" class="btn btn-info btn-icon-split btn-reply" data-info="<?= $commId ?>" data-toggle="modal" data-target="#replyModal"> <span class="icon text-white-50"><i class="far fa-edit"></i></span>
                                            <span class="text">Trả lời</span></a></td>
                                    <td>

                                        <a href="index.php?act=comment&delete=<?= $commId ?>" class="btn btn-danger btn-icon-split "><span class="icon text-white-50"><i class="fas fa-trash"></i></span>
                                            <span class="text">Xoá</span></a>
                                    </td>

                                </tr>

                            <?php $i++;
                            } ?>

                        </tbody>
                    </table>
                </form>
            </div>
        </div>
    </div>
</div>


<div class="modal fade model_comment" id="replyModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Bình luận</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <form action="index.php?act=comment&comment_detail=<?= $prodId ?>" method="post">
                <div class="modal-body">
                    <textarea class="lh-base form-control" name="contentReply" type="text" placeholder="Trả lời bình luận..." rows="4"></textarea>
                    <script>
                        $('.btn-reply').click(function(e) {
                            e.preventDefault();
                            thisdata = $(this).attr('data-info');
                           document.querySelector('#macomment').value=thisdata;

                        });
                    </script>
                    <input type="hidden" id="macomment" name="idComment"  value="">
                 
                   
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Huỷ bỏ</button>
                    <!-- <a class="btn btn-primary" href="index.php">Bình luận</a> -->
                    <button class="btn btn-primary" name="adminReply" type="submit">Bình luận</button>
                </div>
            </form>
        </div>
    </div>
</div>