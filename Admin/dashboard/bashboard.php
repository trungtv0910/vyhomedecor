
<h4 class="card-title text-uppercase text-muted mb-0">Bảng Tin </h4>

<div class="row">
    <div class="col-xl-3 col-md-6">
        <div class="card card-stats">
            <!-- Card body -->
            <div class="card-body">

                <div class="row">
                    <div class="col">
                        <h5 class="card-title text-uppercase text-muted mb-0">Đơn Hàng</h5>
                        <span class="h2 font-weight-bold mb-0">
                            20
                        </span>
                    </div>
                    <div class="col-auto">
                        <div class="icon icon-shape bg-gradient-red  rounded-circle shadow">
                        <i class="fas fa-archive"></i>
                        </div>
                    </div>
                </div>
                <p class="mt-3 mb-0 text-sm">
                    <span class="text-nowrap"><a href="index.php?act=manage-bill">Xem Chi Tiết</a></span>
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
                            25
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
                            150
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
                            14.600.000
                            đ</span>
                    </div>
                    <div class="col-auto">
                        <div class="icon icon-shape bg-gradient-info rounded-circle shadow">
                        <i class="fas fa-wallet"></i>
                        </div>
                    </div>
                </div>
                <p class="mt-3 mb-0 text-sm">
                    <span class="text-nowrap"><a href="index.php?act=manage-bill">Xem Chi Tiết</a></span>
                </p>
            </div>
        </div>
    </div>
</div>
<br>
<!--row-->
<div class="row">
    <!-- Card Body -->
    <div class="col-md-8">
        <!-- Project Card Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Thống Kê Danh Mục</h6>
            </div>
            <div class="card-body">

                <h4 class="small font-weight-bold">Phòng ngủ<span class="float-right">Sản Phẩm:29 </span></h4>
                <div class="progress mb-4">
                    <div class="progress-bar bg-success" role="progressbar" style="width: 60%" aria-valuenow="" aria-valuemin="0" aria-valuemax="100"></div>
                </div>

                <h4 class="small font-weight-bold">Phòng Khách <span class="float-right">Sản phẩm 30%</span></h4>
                <div class="progress mb-4">
                    <div class="progress-bar bg-warning" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <h4 class="small font-weight-bold">Customer Database <span class="float-right">Sản phẩm 30%</span></h4>
                <div class="progress mb-4">
                    <div class="progress-bar" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <!--   <h4 class="small font-weight-bold">Payout Details <span class="float-right">80%</span></h4>
                <div class="progress mb-4">
                    <div class="progress-bar bg-info" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <h4 class="small font-weight-bold">Account Setup <span class="float-right">Complete!</span></h4>
                <div class="progress">
                    <div class="progress-bar bg-success" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                </div> -->
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card shadow mb-4">
            <!-- Card Header - Dropdown -->
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Biểu Đồ Chart:Danh mục</h6>

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
          ['Mushrooms', 3],
          ['Onions', 1],
          ['Olives', 1],
          ['Zucchini', 1],
          ['Pepperoni', 2]
        ]);

        // Set chart options
        var options = {'title':'How Much Pizza I Ate Last Night',
                       'width':300,
                       'height':250};

        // Instantiate and draw our chart, passing in some options.
        var chart = new google.visualization.PieChart(document.getElementById('chart_div'));
        chart.draw(data, options);
      }
    </script>