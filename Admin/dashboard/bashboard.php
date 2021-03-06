<style>
    .new-comment{
        overflow: hidden;
        display: -webkit-box;
        -webkit-box-orient: vertical;
        -webkit-line-clamp: 1;
    }
</style>
<?php
    $statiscalBill = statiscal_bill();
    foreach ($statiscalBill as $value) {
        extract($value);
    }
    $countCustomer = count_customer();
    foreach ($countCustomer as $value) {
        extract($value);
    }
    $countProduct = count_product();
    foreach ($countProduct as $value) {
        extract($value);
    }
?>
<header class="page-header page-header-compact page-header-light border-bottom bg-white mb-4">
   
        <div class="page-header-content px-4 ">
            <div class="row align-items-center justify-content-between pt-3">
                <div class="col-auto mb-3">
                    <h4 class="page-header-title">
                        Bảng Tin
                    </h4>
                </div>
                <div class="col-12 col-xl-auto mb-3">
                    <!-- <a class="btn btn-sm btn-light text-primary" href="user-management-list.html">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left me-1">
                            <line x1="19" y1="12" x2="5" y2="12"></line>
                            <polyline points="12 19 5 12 12 5"></polyline>
                        </svg>
                        Thêm sản phẩm
                    </a> -->
                </div>
            </div>
        </div>

</header>

<div class="row">
    
    <div class="col-xl-3 col-md-6">
        <div class="card card-stats">
            <!-- Card body -->
            <div class="card-body">
                <div class="row">
                    
                    <div class="col">
                        <h5 class="card-title text-uppercase text-muted mb-2">Khách hàng mới</h5>
                        <?php
                            $newCustomer = new_customer();
                            foreach ($newCustomer as $value) {
                                extract($value);
                        ?>
                        <span class="text-info font-weight-light mb-0">
                                <li><?=$newCustomer?></li>
                        </span>
                        <?php } ?>
                    </div>
                    <div class="col-auto">
                        <div class="icon icon-shape bg-gradient-orange  rounded-circle shadow">
                        <i class="fas fa-user"></i>
                        </div>
                    </div>
                </div>
                <p class="mt-3 mb-0 text-sm">

                    <span class="text-nowrap"><a href="index.php?act=customer&list">Xem Chi Tiết</a></span>
                </p>
            </div>
        </div>
    </div>
    
    <div class="col-xl-3 col-md-6">
        <div class="card card-stats">
            <!-- Card body -->
            <div class="card-body">
                <div class="row">

                    <div class="col">
                        <h5 class="card-title text-uppercase text-muted mb-2">Bình luận mới</h5>
                        <?php
                            $newComment = new_comment();
                            foreach ($newComment as $value) {
                                extract($value);
                        ?>
                        <span class="text-warning font-weight-light mb-0 new-comment">
                            <li><?=$newComment?></li>
                        </span>
                        <?php } ?>
                    </div>
                    <div class="col-auto">
                        <div class="icon icon-shape bg-gradient-green rounded-circle shadow">
                       
                        <i class="fas fa-box-open"></i>
                        </div>
                    </div>
                </div>
                <p class="mt-3 mb-0 text-sm">
                    <span class="text-nowrap"><a href="index.php?act=comment&list">Xem Chi Tiết</a></span>
                </p>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-md-6">
        <div class="card card-stats">
            <!-- Card body -->
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <h5 class="card-title text-uppercase text-muted mb-2">Sản phẩm mới</h5>
                        <?php
                            $newProduct = new_product();
                            foreach ($newProduct as $value) {
                                extract($value);
                        ?>
                        <span class="text-success font-weight-light mb-0 new-comment">
                            <li> <?=$newProduct?></li>
                        </span> 
                        <?php } ?>
                    </div>
                    <div class="col-auto">
                        <div class="icon icon-shape-rounded-circle shadow">
                        <i class="fas fa-wallet"></i>
                        </div>
                    </div>
                </div>
                <p class="mt-3 mb-0 text-sm">
                    <span class="text-nowrap"><a href="index.php?act=product&list">Xem Chi Tiết</a></span>
                </p>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-md-6">
        <div class="card card-stats">
            <!-- Card body -->
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <h5 class="card-title text-uppercase text-muted mb-2">Đơn hàng mới</h5>
                        <?php
                            $newBill = new_bill();
                            foreach ($newBill as $value) {
                                extract($value);
                        ?>
                        <span class="text-danger font-weight-light mb-0">
                            <li> Mã đơn hàng: <?=$newBill?></li>
                        </span>
                        <?php } ?>
                    </div>
                    <div class="col-auto">
                        <div class="icon icon-shape bg-gradient-red  rounded-circle shadow">
                        <i class="fas fa-archive"></i>
                        </div>
                    </div>
                </div>
                <p class="mt-3 mb-0 text-sm">
                    <span class="text-nowrap"><a href="index.php?act=bill&list">Xem Chi Tiết</a></span>
                </p>
            </div>
        </div>
    </div>
</div>
<br>

<div class="row">
    <div class="col-xl-3 col-md-6">
        <div class="card card-stats">
            <!-- Card body -->
            <div class="card-body">

                <div class="row">
                    <div class="col">
                        <h5 class="card-title text-uppercase text-muted mb-0">Đơn Hàng</h5>
                        <span class="h2 font-weight-bold mb-0">
                            <?=$countBill?>
                        </span>
                    </div>
                    <div class="col-auto">
                        <div class="icon icon-shape bg-gradient-red  rounded-circle shadow">
                        <i class="fas fa-archive"></i>
                        </div>
                    </div>
                </div>
                <p class="mt-3 mb-0 text-sm">
                    <span class="text-nowrap"><a href="index.php?act=bill&list">Xem Chi Tiết</a></span>
                </p>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-md-6">
        <div class="card card-stats">
            <!-- Card body -->
            <div class="card-body">
                <div class="row">
                    
                    <div class="col">
                        <h5 class="card-title text-uppercase text-muted mb-0">Khách hàng</h5>
                        <span class="h2 font-weight-bold mb-0">
                                <?=$countCustomer?>
                        </span>
                    </div>
                    <div class="col-auto">
                        <div class="icon icon-shape bg-gradient-orange  rounded-circle shadow">
                        <i class="fas fa-user"></i>
                        </div>
                    </div>
                </div>
                <p class="mt-3 mb-0 text-sm">

                    <span class="text-nowrap"><a href="index.php?act=customer&list">Xem Chi Tiết</a></span>
                </p>
            </div>
        </div>
    </div>
    
    <div class="col-xl-3 col-md-6">
        <div class="card card-stats">
            <!-- Card body -->
            <div class="card-body">
                <div class="row">

                    <div class="col">
                        <h5 class="card-title text-uppercase text-muted mb-0">Sản phẩm</h5>
                        <span class="h2 font-weight-bold mb-0">
                            <?=$countProduct?>
                        </span>
                    </div>
                    <div class="col-auto">
                        <div class="icon icon-shape bg-gradient-green  rounded-circle shadow">
                       
                        <i class="fas fa-box-open"></i>
                        </div>
                    </div>
                </div>
                <p class="mt-3 mb-0 text-sm">
                    <span class="text-nowrap"><a href="index.php?act=product&list">Xem Chi Tiết</a></span>
                </p>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-md-6">
        <div class="card card-stats">
            <!-- Card body -->
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <h5 class="card-title text-uppercase text-muted mb-0">Thu nhập</h5>
                        <span class="h2 font-weight-bold mb-0">
                            <?=number_format($revenue ,0, ',', '.')?>đ
                        </span>
                    </div>
                    <div class="col-auto">
                        <div class="icon icon-shape-rounded-circle shadow">
                        <i class="fas fa-wallet"></i>
                        </div>
                    </div>
                </div>
                <p class="mt-3 mb-0 text-sm">
                    <span class="text-nowrap"><a href="index.php?act=bill&list">Xem Chi Tiết</a></span>
                </p>
            </div>
        </div>
    </div>
</div>
<br>
<!--row-->
<div class="row">
    <!-- Card Body -->
    <div class="col-md-6">
        <!-- Project Card Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Thống Kê Sản phẩm theo Danh mục</h6>
            </div>
            <div class="card-body">
            <?php
                $statiscalCategoryProduct = statiscal_product_category();
                foreach ($statiscalCategoryProduct as $value){
                    extract($value);
            ?>
                <h4 class="small font-weight-bold"><?=$cateName?><span class="float-right">Sản Phẩm: <?=$products?> (<?=round(($products / $countProduct) * 100, 2)?>%)</span></h4>
                <div class="progress mb-4">
                    <div class="progress-bar bg-info" role="progressbar" style="width:<?=($products / $countProduct) * 100?>%" aria-valuenow="" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <!-- <h4 class="small font-weight-bold">Phòng Khách <span class="float-right">Sản phẩm 30%</span></h4>
                <div class="progress mb-4">
                    <div class="progress-bar bg-warning" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <h4 class="small font-weight-bold">Customer Database <span class="float-right">Sản phẩm 30%</span></h4>
                <div class="progress mb-4">
                    <div class="progress-bar" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                  <h4 class="small font-weight-bold">Payout Details <span class="float-right">80%</span></h4>
                <div class="progress mb-4">
                    <div class="progress-bar bg-info" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <h4 class="small font-weight-bold">Account Setup <span class="float-right">Complete!</span></h4>
                <div class="progress">
                    <div class="progress-bar bg-success" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                </div> -->
            <?php } ?>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="card shadow mb-4">
            <!-- Card Header - Dropdown -->
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <!-- <h6 class="m-0 font-weight-bold text-primary">Biểu Đồ Thống kê Đơn hàng theo Sản phẩm</h6> -->
            </div>
            <!-- Card Body -->
            <div class="card-body">
                <div class="chart-pie pt-4 pb-2">
                    <!-- <canvas id="myPieChart"></canvas> -->
                    <div id="chart_div"></div>

                </div>

            </div>
        </div>
    </div>

</div>
 <!--Load the AJAX API-->
 <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">

      // Load the Visualization API and the corechart package.
      google.charts.load('current', {'packages':['corechart']});

      // Set a callback to run when the Google Visualization API is loaded.
      google.charts.setOnLoadCallback(drawChart);

      // Callback that creates and populates a data table,
      // instantiates the pie chart, passes in the data and
      // draws it.
      function drawChart() {

        // Create the data table.
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Topping');
        data.addColumn('number', 'Slices');
        data.addRows([
            <?php
                $statiscalChart = statiscal_bill_product();
                foreach ($statiscalChart as $value) {
                    extract($value);
            ?>
                ['<?=$prodName?>', <?=$countProduct?>],
        //   ['Onions', 1],
        //   ['Olives', 1],
        //   ['Zucchini', 1],
        //   ['Pepperoni', 2]
            <?php } ?>
        ]);

        // Set chart options
        var options = {'title':'Biểu Đồ Thống kê Đơn hàng theo Sản phẩm','width':550,'height':250};
        // Instantiate and draw our chart, passing in some options.
        var chart = new google.visualization.PieChart(document.getElementById('chart_div'));
        chart.draw(data, options);
      }
    </script>