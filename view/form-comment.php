<?php

include_once '../model/pdo.php';
include_once '../model/comment.php';
include_once '../model/customer.php';
?>

<?php
if (isset($_POST['prodId']) && ($_POST['content'])) {

    $prodId = $_POST['prodId'];
    $custId = $_POST['custId'];
    $content = $_POST['content'];
    $prodId;
    $content;
    date_default_timezone_set('Asia/Ho_Chi_Minh');
    $date = date('h:i:s a d/m/Y');
    insert_comment($prodId, $custId, $content, $date);
    // header("Location: " . $_SERVER['HTTP_REFERER']);
}
?>

<!-- <div class="nguoi-reveiws">
    <?php
    $load_comment = load_commentByIdProd($prodId);

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
            </div>
        </div>
    <?php
    }
    ?>
</div> -->
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
                $replyAdmin = loadReply_Comment($commId);
                foreach ($replyAdmin as $valueRep) {
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