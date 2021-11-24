<?php include_once 'inc_admin/header.php';
include '../model/customer.php';
include_once '../model/pdo.php';
include_once '../model/global.php';
include_once '../model/product_model.php';
include_once '../model/comment.php';

include_once '../lib/format.php';

include_once '../model/category.php';

include_once '../model/bill.php';

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
                } else if (isset($_GET['addChild'])) {
                    $cateId = $_GET['addChild'];
                    include 'category/addChild.php';
                } else if (isset($_POST['addCategoryChild'])) {

                    $cateChildName = $_POST['cateChildName'];
                    $cateId = $_POST['cateId'];
                    insert_categorychild($cateChildName, $cateId);
                    $listcategory = loadAll_category();
                    include 'category/list.php';
                } else if (isset($_GET['edit'])) {
                    $cateId = $_GET['edit'];
                    $onecategory = loadOne_category($cateId);
                    include 'category/edit.php';
                } else if (isset($_GET['update'])) {
                    $cateId = $_POST['cateId'];
                    $cateName = $_POST['cateName'];
                    update_category($cateId, $cateName);
                    $listcategory = loadAll_category();
                    include 'category/list.php';
                } else if (isset($_GET['updateCateChild'])) {
                    $cateChildId = $_POST['cateChildId'];
                    $cateChildName = $_POST['cateChildName'];
                    update_cateChild($cateChildId, $cateChildName);
                    $listcategory = loadAll_category();
                    include 'category/list.php';
                } else if (isset($_GET['deleteChild'])) {
                    delete_cateChild($_GET['deleteChild']);
                    $listcategory = loadAll_category();
                    include 'category/list.php';
                } else if (isset($_GET['delete'])) {
                    delete_category($_GET['delete']);
                    $listcategory = loadAll_category();
                    include 'category/list.php';
                } else {
                    $listcategory = loadAll_category();
                    include 'category/list.php';
                }
            }
            break;
        case 'product': {
                $listCate = loadAll_category();
            
                if (isset($_GET['list'])) {
                   
                $listcategory = loadAll_category();
                    $countProduct=count(list_Product());
                   $start =0; 
                   $limit =10;
                   if(isset($_GET['page'])){
                        $page=$_GET['page'];
                        $start =($page-1)*$limit;
                    }else{
                        $page=1;
                    }
                    
                    $listProduct =  load_product_condition($start,$limit);
                    include 'product/list.php';
                }
                else if (isset($_POST['search'])){

                    $key_search=$_POST['key_search'];
                    $cateId=$_POST['cateId'];
                 
                    $listcategory = loadAll_category();
                    $listProduct= load_product_condition(0,1000,0,$cateId,0,$key_search);
                    include 'product/list.php';
                } else if (isset($_GET['add'])) {
                    $listcategory = loadAll_category();
                    $listProduct = list_Product();
                    include 'product/add.php';
                
                } else if (isset($_GET['edit'])) {
                    $one_product = loadOne_product($_GET['edit']);
                    $listChildCate = loadAll_categorychild($one_product['cateId']);
                    include 'product/edit.php';
                } else if (isset($_POST['updateProduct'])) {
                    $prodId = $_POST['prodId'];
                    if (update_product($_POST, $_FILES) == true) {
                        echo "<script>
                        Swal.fire({
                         position: 'top-end',
                         icon: 'success',
                         title: 'Thay Đổi Thành Công',
                         showConfirmButton: false,
                         timer: 2000
                       })</script>";
                    } else {
                        echo "<script>
                        Swal.fire({
                         position: 'top-end',
                         icon: 'error',
                         title: 'Thay đổi thất Bại',
                         showConfirmButton: false,
                         timer: 2000
                       })</script>";
                    }
                    $one_product = loadOne_product($prodId);
                    $listChildCate = loadAll_categorychild($one_product['cateId']);
                    include 'product/edit.php';
                } else if (isset($_POST['insertProduct'])) {
                    if (insert_product($_POST, $_FILES)) {
                        include 'product/sucess_add.php';
                    } else {
                        include 'product/error_add.php';
                    }
                    $listProduct = load_product_condition();
                    include 'product/list.php';
                } else if (isset($_GET['imageSmall'])) {

                    $prodId = $_GET['imageSmall'];
                    $one_product = loadOne_product($prodId);
                       if(isset($_GET['deleteImgById'])){
                             $id= $_GET['deleteImgById'];
                             $prodId;
                            $data= $one_product['imageSmall'];
                            deleteImgById($data,$id,$prodId);
                            $one_product = loadOne_product($prodId);
                        }
                    include 'product/editImages.php';
                }else if (isset($_POST['update_imgs_product'])) {
                    $prodId =$_POST['prodId'];
                    $one_product = loadOne_product($prodId);
                    $dataOld = $one_product['imageSmall'];
                    if (upload_ImgSmall($_POST, $_FILES, $dataOld, $prodId)) {
                       $one_product = loadOne_product($prodId);
                       include 'product/editImages.php';
                    } else{
                        echo 'Có lỗi xãy ra';
                    }
                }else if(isset($_GET['delete'])){
                    $prodId =$_GET['delete'];
                    delete_product($prodId);
                    include 'product/sucess_delete.php';

                }else {
                    $listProduct = list_Product();
                    include 'product/list.php';
                }
            }
            break;
        case 'bill': {
                if (isset($_GET['list'])) {
                    $listBill = loadAll_bill();
                    include 'bill/list.php';
                } else if (isset($_GET['edit'])) {
                    $billId=$_GET['edit'];
                    $custId = $_GET['custId'];
                    $loadOne_cust = loadOne_customer($custId);
                    // var_dump( $loadOne_cust);
                    $loadOne_bill = loadOne_bill($billId);
                    // var_dump($loadOne_bill);
                    include 'bill/edit.php';
                } else {
                    include 'bill/list.php';
                }
            }
            break;
        case 'comment': {
                $list_comments_product = statistical_comments_product();
                if (isset($_GET['list'])) {
                    include 'comment/list.php';
                } else if (isset($_GET['comment_detail'])) {
                    $prodId = ($_GET['comment_detail']);
                    $listcomment = loadAll_comment_product($prodId);
                    include 'comment/comment_detail.php';
                } else if (isset($_GET['reply'])) {
                    include 'comment/reply.php';
                } else if (isset($_GET['delete'])) {
                    $commId =$_GET['delete'];
                    delete_comment($commId);
                    include 'comment/comment_detail.php';
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
