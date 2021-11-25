<style>
    .float-left {
        float: left;
    }

</style>


<div class="row">
    <div class="col-xl-12 col-md-12">
        <div class="card">
            <div class="card-header border-0">
                <div class="row align-items-center justify-content-between">
                    <!-- <div class="col">
                        <h3 class="mb-0">Quản Lý Bình luận</h3>
                    </div>
                    <<div class="col text-right"> 
                         <a href="#!" class="btn btn-sm btn-primary">See all</a> 
                     </div>  -->


                    <div class="col-auto ">
                        <h4 class="page-header-title">
                            Danh sách bình luận
                        </h4>
                    </div>
                    <div class="col-12 col-xl-auto ">
                        <a class="btn btn-sm btn-light text-primary" href="index.php?act=comment&list_statistics">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left me-1">
                                <line x1="19" y1="12" x2="5" y2="12"></line>
                                <polyline points="12 19 5 12 12 5"></polyline>
                            </svg>
                            Quay về
                        </a>
                    </div>

                </div>



            </div>
            <div class="table-responsive">
                <form action="" method="post">
                    <!-- Projects table -->
                    <table class="table align-items-center table-flush">
                        <thead class="thead-light">
                            <tr class="table_01">
                                <td>Stt</td>
                                <td width="70%" class="text-center">Nội dung</td>
                                <td class="text-center" colspan="2">Tác Vụ</td>

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



                                            <?php
                                            $showReplyComment = loadReply_Comment($commId);
                                            foreach ($showReplyComment as $valueRep) {
                                            ?>
                                                <div class="reply_child">

                                                    <div class="reply_img">
                                                        <img width="50" src="img_tam/anhavatar.png" alt="">
                                                    </div>
                                                    <div class="reply_content">
                                                        <span class="name">
                                                            Admin : <?= $valueRep['custName'] ?>
                                                            <p class="time"><?= $valueRep['date'] ?></p>
                                                            <p class="comment"><?= $valueRep['content'] ?></p>
                                                    </div>
                                                    <br>



                                                </div>
                                            <?php } ?>
                                        </div>
                                    </td>

                                    <td><a href="index.php?act=comment&reply" class="btn btn-info btn-icon-split btn-reply" data-info="<?= $commId ?>" data-toggle="modal" data-target="#replyModal"> <span class="icon text-white-50"><i class="far fa-edit"></i></span>
                                            <span class="text">Trả lời</span></a></td>
                                    <td>

                                        <a href="index.php?act=comment&delete=<?= $commId ?>&prodId=<?= $prodId ?>" class="btn btn-danger btn-icon-split "><span class="icon text-white-50"><i class="fas fa-trash"></i></span>
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
                            document.querySelector('#macomment').value = thisdata;

                        });
                    </script>
                    <input type="hidden" id="macomment" name="idComment" value="">


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

