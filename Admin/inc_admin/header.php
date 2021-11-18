
<!DOCTYPE html>
<html lang="en">
<?php
include_once '../model/pdo.php';
include_once '../model/account_model.php';
init();

                 
if (isset($_SESSION['login']['login']) == true && $_SESSION['login']['role']==1 && $_SESSION['login']['status']==1 ) {
    $account= $_SESSION['login'];
  
}else{
    echo '<script>window.location="../view/404.php" </script>';
}
    

?>
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Vy Home Admin</title>

    <!-- Custom fonts for this template-->
    <link rel="icon" href="../images/logo/favicon.png" type="image/x-icon" />
    <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../css/sb-admin-2.min.css" rel="stylesheet">
    <link href="../css/admin.css" rel="stylesheet">
    <script src="../js/jquery.js"></script>
  

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
       <?php include 'sider_bar.php' ?>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <?php include 'top_bar.php' ?>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">
