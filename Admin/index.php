<?php include_once 'inc_admin/header.php';
      include '../model/customer.php';
      include_once '../model/pdo.php';
?>

<?php
if (isset($_GET['act'])) {
    $path = $_GET['act'];
    switch ($path) {
        case 'category': {
                if (isset($_GET['list'])) {
                    include 'category/list.php';
                } else if (isset($_GET['add'])) {
                    include 'category/add.php';
                } else if (isset($_GET['edit'])) {
                    include 'category/edit.php';
                } else {
                    include 'category/list.php';
                }
            }
            break;
        case 'product': {
                if (isset($_GET['list'])) {
                    include 'product/list.php';
                } else if (isset($_GET['add'])) {
                    include 'product/add.php';
                } else if (isset($_GET['edit'])) {
                    include 'product/edit.php';
                } else {
                    include 'product/list.php';
                }
            }
            break;
        case 'bill': {
                if (isset($_GET['list'])) {
                    include 'bill/list.php';
                } else if (isset($_GET['edit'])) {
                    include 'bill/edit.php';
                } else {
                    include 'bill/list.php';
                }
            }
            break;
        case 'comment': {
                if (isset($_GET['list'])) {
                    include 'comment/list.php';
                }else if (isset($_GET['comment_detail'])) {
                    include 'comment/comment_detail.php';
                } 
                else if (isset($_GET['reply'])) {
                    include 'comment/reply.php';
                } else if (isset($_GET['delete'])) {
                    include 'comment/delete.php';
                } else {
                    include 'comment/list.php';
                }
            }
            break;
        case 'customer': {
                if (isset($_GET['list'])) {
                    $listcustomer=loadAll_customer();
                    include 'customer/list.php';
                } else if (isset($_GET['add'])) {
                    include 'customer/add.php';
                } else if (isset($_GET['edit'])) {
                    include 'customer/edit.php';
                } else {
                    include 'customer/list.php';
                }
            }
            break;
       
        case 'statistical': {
                if (isset($_GET['chart'])) {
                    include 'statistical/chart.php';
                } else {
                    include 'statistical/list.php';
                }
            }
            break;
        case 'logout': {
            echo '<script>window.location="http://localhost/vyhomedecor/index.php" </script>';
            checkLogout();
            }
            break;
        default:
            break;
    }
} else {
    include 'dashboard/bashboard.php';
}
?>
<?php include_once 'inc_admin/footer.php' ?>
