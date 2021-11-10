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
    <div class="col-xl-12">
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
                            <tr>
                                <td>1</td>

                                <td class="reply">
                                    <div class="reply_img">
                                        <img width="50" src="img_tam/anhavatar.png" alt="">
                                    </div>
                                    <div class="reply_content">
                                        <span class="name">Nguyễn Thị Thanh Vi</span> From <span class="from"><a href="index.php?act=product&id_edit=">Ghế Xoay 2018- Akia (View Post )</a></span>
                                        <p class="time">Lúc: 20:10 20/10/2021</p>
                                        <p class="comment">Sản Phẩm này còn không ạ ??</p>


                                        <div class="reply_child">
                                            <div class="reply_img">
                                                <img width="50" src="img_tam/anhavatar.png" alt="">
                                            </div>
                                            <div class="reply_content">
                                                <span class="name">
                                                    Admin : Nguyễn Từ Trần
                                                    <p class="time">Lúc: 23:10 20/10/2021</p>
                                                    <p class="comment">Sản phẩm vẫn còn nhé, bên em sẽ liên hệ cho chị</p>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <!-- <td><a class="btn btn-default" href="index.php?act=comment&reply">Trả lời</a></td> -->
                                <td><a href="index.php?act=comment&reply" class="btn btn-info btn-icon-split"> <span class="icon text-white-50"><i class="far fa-edit"></i></span>
                                    <span class="text">Trả lời</span></a></td>
                                <td>

                                    <a href="" class="btn btn-danger btn-icon-split "><span class="icon text-white-50"><i class="fas fa-trash"></i></span>
                                        <span class="text">Xoá</span></a>
                                </td>

                            </tr>



                        </tbody>
                    </table>
                </form>
            </div>
        </div>
    </div>
</div>