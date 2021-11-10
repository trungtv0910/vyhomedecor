<ul class="navbar-nav bg-customer bg-gradient-primary sidebar sidebar-dark accordion " id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand align-items-center border_bottom" href="index.php">
      <div class="logo_hed"><img class="logo_hed"  src="../images/logo/no-img2.png" alt=""></div>
    </a>
    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="index.php">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Bảng Tin</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="index.php?act=category" data-toggle="collapse" data-target="#collapseCategory" aria-expanded="true" aria-controls="collapseCategory">
            <i class="fas fa-tasks"></i>
            <span>Danh Mục</span></a>
            <div id="collapseCategory" class="collapse" aria-labelledby="headingCategory" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Quản Lý Danh Mục:</h6>
                <a class="collapse-item" href="index.php?act=category&add">Thêm Sản Danh Mục</a>
                <a class="collapse-item" href="index.php?act=category&list">Danh Sách Danh Mục</a>

            </div>
        </div>   
    </li>



    <li class="nav-item">
        <a class="nav-link collapsed" href="index.php" data-toggle="collapse" data-target="#collapseProduct" aria-expanded="true" aria-controls="collapseProduct">
        <i class="fas fa-archive"></i>
            <span>Sản Phẩm</span>
        </a>
        <div id="collapseProduct" class="collapse" aria-labelledby="headingCategory" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Quản Lý Sản Phẩm:</h6>
                <a class="collapse-item" href="index.php?act=product&add">Thêm Sản Phẩm</a>
                <a class="collapse-item" href="index.php?act=product&list">Danh Sách Sản Phẩm</a>

            </div>
        </div>
    </li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="index.php" data-toggle="collapse" data-target="#collapseBill" aria-expanded="true" aria-controls="collapseBill">
        <i class="fas fa-shopping-bag"></i>
            <span>Đơn Hàng</span>
        </a>
        <div id="collapseBill" class="collapse" aria-labelledby="headingCategory" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Quản Lý Đơn Hàng:</h6>
                <a class="collapse-item" href="index.php?act=bill">Danh Sách Đơn Hàng</a>


            </div>
        </div>
    </li>
    <li class="nav-item">
        <a class="nav-link collapsed" href="index.php" data-toggle="collapse" data-target="#collapseComment" aria-expanded="true" aria-controls="collapseComment">
            <i class="fas fa-comment"></i>
            <span>Bình Luận</span>
        </a>
        <div id="collapseComment" class="collapse" aria-labelledby="headingCategory" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Quản Lý Bình Luận:</h6>
                <a class="collapse-item" href="index.php?act=comment&list_statistics">Thống Kê Bình Luận</a>
                <a class="collapse-item" href="index.php?act=comment&list">Trả Lời Bình Luận</a>


            </div>
        </div>
    </li>
    <li class="nav-item">
        <a class="nav-link collapsed" href="index.php" data-toggle="collapse" data-target="#collapseCustomer" aria-expanded="true" aria-controls="collapseCustomer">
            <i class="fas fa-users"></i>
            <span>Khách Hàng</span>
        </a>
        <div id="collapseCustomer" class="collapse" aria-labelledby="headingCategory" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Quản Lý Khách Hàng:</h6>
                <a class="collapse-item" href="index.php?act=customer&add">Thêm Tài Khoản</a>
                <a class="collapse-item" href="index.php?act=customer&list">Danh Sách Khách Hàng</a>


            </div>
        </div>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="index.php?act=statistical">
            <i class="fas fa-chart-pie"></i>
            <span>Thống Kê</span></a>
    </li>




</ul>