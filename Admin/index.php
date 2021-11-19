<?php include_once 'inc_admin/header.php';
include '../model/customer.php';
include_once '../model/pdo.php';
include_once '../model/global.php';
include_once '../model/product_model.php';

include_once '../lib/format.php';

include_once '../model/category.php';

?>

<?php
if (isset($_GET['act'])) {
    $path = $_GET['act'];
    switch ($path) {
        case 'category': {
                if (isset($_GET['list'])) {
                    $listcategory = loadAll_category();
                    include 'category/list.php';
                } else if (isset($_GET['add'])) {
                    include 'category/add.php';
                } else if (isset($_POST['addCategory'])) {
                    $cateName = $_POST['cateName'];
                    insert_category($cateName);
                    $listcategory = loadAll_category();
                    include 'category/list.php';
                } else if (isset($_GET['edit'])) {
                    include 'category/edit.php';
                } else if (isset($_GET['updateAll'])) {
                   
                        $cateChildId = $_POST['cateChildId'];
                        $cateChildName = $_POST['cateChildName'];
                        update_cateChild($cateChildId, $cateChildName);
                     
                        $listcategory = loadAll_category();
                        include 'category/list.php';
                
                }
                 else {
                
                   $listcategory = loadAll_category();
                    include 'category/list.php';
                }
            }
            break;
        case 'product': {
                $listCate = loadAll_category();
                // $listChildCate=loadAll_categorychild(1);
                if (isset($_GET['list'])) {
                    $listProduct = list_Product();

                    include 'product/list.php';
                } else if (isset($_GET['add'])) {

                    include 'product/add.php';
                } else if (isset($_GET['edit'])) {
                    include 'product/edit.php';
                } else if (isset($_POST['insertProduct'])) {
                    if(insert_product($_POST, $_FILES)){
                       echo "<script>
                       Swal.fire({
                        position: 'top-end',
                        icon: 'success',
                        title: 'Sản Phẩm Đã Được Thêm',
                        showConfirmButton: false,
                        timer: 2000
                      })</script>";
                       
                    }else{
                        echo "<script>
                        Swal.fire({
                            icon: 'error',
                            title: 'Oops...',
                            text: 'Lỗi không thể thêm sản phẩm!',
                          });
                        </script>";
                    }
                    
                    $listProduct = list_Product();
                    include 'product/list.php';
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
                } else if (isset($_GET['comment_detail'])) {
                    include 'comment/comment_detail.php';
                } else if (isset($_GET['reply'])) {
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
                    $listcustomer = loadAll_customer();
                    include 'customer/list.php';
                } else if (isset($_GET['delete'])) {
                    delete_customer($_GET['delete']);
                    $listcustomer = loadAll_customer();
                    include 'customer/list.php';
                } else if (isset($_GET['edit'])) {
                    $custId = $_GET['edit'];
                    $oneCustomer = loadOne_customer($custId);
                    include 'customer/edit.php';
                } else if (isset($_GET['update'])) {
                    if (update_customer($_POST) == true) {
                        include 'customer/success.php';
                    } else {
                        include 'customer/error.php';
                    }
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
