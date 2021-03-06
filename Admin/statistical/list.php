

<div class="row">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-header border-0">
                <div class="row align-items-center">
                    <div class="col ">
                        <h4 class="page-header-title">
                            Thống kê Sản phẩm theo Danh mục
                        </h4>
                    </div>
                    <!-- <div class="col text-end">
                        <a href="index.php?act=statistical&chart"> <button class="btn btn-success float_right">Biểu Đồ Chart</button></a>

                    </div> -->
                </div>
            </div>
            <div class="table-responsive">
                <form action="" method="post">
                    <!-- Projects table -->
                    <table class="table align-items-center table-flush">
                        <thead class="thead-light">
                            <tr>
                                <th>Số TT</th>
                                <th>Tên Danh mục</th>
                                <th>Giá Bán Cao Nhất</th>
                                <th>Giá Bán Thấp Nhất</th>
                                <th>Giá Bán Trung Bình</th>
                                <!-- <th>Doanh Thu</th> -->
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                            $i = 1;
                            $statiscal = statiscal_product_category();
                            foreach ($statiscal as $value){
                                extract($value);
                        ?>
                            <tr>
                                <td><?=$i?></td>
                                <td class="text-left"><?=$cateName?>
                                    <br>
                                    <b>Số lượng: <?=$products?> Sản Phẩm</b>
                                </td>
                                <!-- giá tiền cao nhất -->
                                <td><?= number_format($maxPrice, 0, ',', '.') ?> <b>đ</b></td>
                                <!-- giá tiền thấp nhất -->
                                <td><?= number_format($minPrice, 0, ',', '.') ?><b>đ</b></td>
                                <!-- giá tiền trung bình -->
                                <td><?= number_format($avgPrice, 0, ',', '.') ?> <b>đ</b></td>
                                <!-- <td> Chưa cập nhập ????</td> -->
                            </tr>
                        <?php $i++; } ?>
                        </tbody>
                    </table>
                </form>
            </div>
        </div>
    </div>
</div>
<br>

<div class="row">

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
                    <div id="chart_div1"></div>

                </div>

            </div>
        </div>
    </div>

<!-- </div> -->
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
                $statiscalChart2 = statistical_comments_product();
                foreach ($statiscalChart2 as $value) {
                    extract($value);
            ?>
                ['<?=$prodName?>', <?=$countComm?>],
        //   ['Onions', 1],
        //   ['Olives', 1],
        //   ['Zucchini', 1],
        //   ['Pepperoni', 2]
            <?php } ?>
        ]);

        // Set chart options
        var options = {'title':'Biểu Đồ Thống kê Bình luận theo Sản phẩm','width':550,'height':250};
        // Instantiate and draw our chart, passing in some options.
        var chart = new google.visualization.PieChart(document.getElementById('chart_div1'));
        chart.draw(data, options);
      }
    </script>
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
                    <div id="chart_div2"></div>

                </div>

            </div>
        </div>
    </div>

    <!-- </div> -->
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
                $statiscalChart1 = statiscal_bill_customer();
                foreach ($statiscalChart1 as $value) {
                    extract($value);
            ?>
                ['<?=$custName?>', <?=$countBill?>],
        //   ['Onions', 1],
        //   ['Olives', 1],
        //   ['Zucchini', 1],
        //   ['Pepperoni', 2]
            <?php } ?>
        ]);

        // Set chart options
        var options = {'title':'Biểu Đồ Thống kê Đơn hàng theo Khách hàng','width':550,'height':250};
        // Instantiate and draw our chart, passing in some options.
        var chart = new google.visualization.PieChart(document.getElementById('chart_div2'));
        chart.draw(data, options);
      }
    </script>
    
    
</div>

