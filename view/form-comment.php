
<!DOCTYPE html>
<html lang="en">
<?php

    session_start();
    include_once '../model/pdo.php';
    include_once '../model/comment.php';
    $prodId = $_REQUEST['prodId'];

?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1.0">
    <title>VyHomeDecor</title>
    <link rel="icon" href="./images/logo/favicon.png" type="image/x-icon" />
    <link rel="stylesheet" href="./css/product.css">
    <link rel="stylesheet" href="./css/grid.css">
    <link rel="stylesheet" href="./css/base.css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/reponsive.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
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
                    <p><strong>James Koster</strong> - <strong class="comment-time">June 7, 2013</strong></p>
                    <p>Giá cả phẳng chăng</p>
                </div>
            </div>
            <div class="noi-dung-bl">
                <div class="anh">
                    <i class="fas fa-user"></i>
                </div>
                <div class="bl">
                    <p><strong>James Koster</strong> - <strong class="comment-time">June 7, 2013</strong></p>
                    <p>Sản phẩm Ok</p>
                </div>
            </div>
            <div class="noi-dung-bl">
                <div class="anh">
                    <i class="fas fa-user"></i>
                </div>
                <div class="bl">
                    <p><strong>James Koster</strong> - <strong class="comment-time">June 7, 2013</strong></p>
                    <p>Giá quá đẹp</p>
                </div>
            </div>
            <div class="noi-dung-bl">
                <div class="anh">
                    <i class="fas fa-user"></i>
                </div>
                <div class="bl">
                    <p><strong>James Koster</strong> - <strong class="comment-time">June 7, 2013</strong></p>
                    <p>Ủng hộ shop</p>
                </div>
            </div>
        </div>
        <?php
            if (isset($_SESSION['login']['login']) == true) {
            $account= $_SESSION['login'];
        ?>
            <div class="addemail">
                <p>Thêm bình luận</p>
            </div>
            <div class="binh-luan">
                <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
                    <input type="text" class="form-text" name="content" style="width:100%; height:80px;border-radius: 4px;" placeholder="Nhập bình luận ở đây..." required></input>
                    <br>
                    <input type="hidden" name="prodId" value="<?=$prodId?>">
                    <input type="submit" name="send-comment" value="Gửi bình luận">
                </form>
            </div>
        <?php } else { ?>
            <div class="addemail">
                <p>Vui lòng đăng nhập để có thể bình luận !</p>
            </div>
        <?php } ?>
    </div>
    <?php
        if(isset($_POST['send-comment']) && ($_POST['send-comment'])){
            $prodId = $_POST['prodId'];
            $custId = $account['custId'];
            $content = $_POST['content'];
            date_default_timezone_set('Asia/Ho_Chi_Minh');
            $date = date('h:i:s a d/m/Y');
            insert_comment($prodId, $custId, $content, $date);
            header("Location: ".$_SERVER['HTTP_REFERER']);
        }
    ?>
</body>
</html>