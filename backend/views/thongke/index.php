<?php 
use yii\helpers\Html;
use backend\models\Result;
 ?>
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://code.highcharts.com/highcharts.js"></script>
<?php 
//$sanpham = new Result();
//$sanpham = $sanpham->getDSTeacher();
?>
        
            <section class="content">
                <!-- Small boxes (Stat box) -->
                <div class="row">
                    <div class="col-lg-3 col-xs-6">
                        <!-- small box -->
                        <div class="small-box bg-aqua">
                            <div class="inner">
                                <h3><?php echo "11"; ?></h3>
                                <p>Danh sách giảng viên xuất sắc</p>
                            </div>
                            <div class="icon">
                                <i class="ion-ios-calendar-outline"></i>
                            </div>
                            <?php echo Html::a('Chi tiết',['/danhsach'],['class'=>'small-box-footer']);  ?>
             </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-3 col-xs-6">
                        <!-- small box -->
                        <div class="small-box bg-green">
                            <div class="inner">
                                <h3><?php echo '14'; ?></h3>

                                <p>Danh sách giảng viên loại giỏi</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-stats-bars"></i>
                            </div>
                            <?php echo Html::a('Chi tiết',['/danhsach'],['class'=>'small-box-footer']);  ?>
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-3 col-xs-6">
                        <!-- small box -->
                        <div class="small-box bg-yellow">
                            <div class="inner">
                                <h3>18</h3>

                                <p>Danh sách giảng viên loại khá</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-person-add"></i>
                            </div>
                    <?php echo Html::a('Chi tiết',['/danhsach'],['class'=>'small-box-footer']);  ?>

                        </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-3 col-xs-6">
                        <!-- small box -->
                        <div class="small-box bg-red">
                            <div class="inner">
                                <h3>0</h3>

                                <p>Danh sách giảng viên chưa đạt</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-pie-graph"></i>
                            </div>
                            <?php echo Html::a('Chi tiết',['/danhsach'],['class'=>'small-box-footer']);  ?>

                        </div>
                    </div>
                    <!-- ./col -->
                </div>
                <!-- /.row -->
            </section>
            <section class="content">
                <div class="row">
                    <!-- /.col (LEFT) -->
                    <div class="col-md-12">
                        <!-- LINE CHART -->
                        <div class="box box-info">
                            <div class="box-header with-border">
                                <h3 class="box-title">Thống kê giảng viên</h3>
                            </div>
                            <div class="box-body">
                                <div class="chart" >
                                    <div id="columnchart_material" >
                                 
                                    </div>
                        <div id="columnchart_material1" style=" height: 250px; width:700px;float:left;">
                                 
                                    </div>
                        
                                    <div id="piechart" style="width: 250px; height: 200px;float:right; margin-right: 40px">

                                    </div>
                                 </div>

                            </div>

                            <div class="box-footer">
                                <div class="row">
                                        <!-- /.description-block -->
                                    
                    
                                </div>
                                <!-- /.row -->
                            </div>
                            <!-- /.box-body -->
                        </div>
                    </div>
            </section>
            <!-- /.content -->
            <!-- /.content-wrapper -->
           <script>
            google.charts.load('current', {'packages':['corechart']});
            google.charts.setOnLoadCallback(drawChart);
            function drawChart() {
            var data = google.visualization.arrayToDataTable([
            ['Task', 'Hours per Day'],
            ['Chưa đạt', 2],
            ['Khá', 2],
            ['Giỏi', 3],
            ['Xuất sắc', 7]
            ]);
             var options = {'title':'TỔNG QUAN CẢ TRƯỜNG', 'width':500, 'height':300};
            var chart = new google.visualization.PieChart(document.getElementById('piechart'));
            chart.draw(data, options);
            }
        </script>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Year', 'Sales', 'Expenses', 'Profit'],
          ['CNTT', 1000, 400, 200],
          ['Ngữ văn', 1170, 460, 250],
          ['Toán', 660, 1120, 300],
          ['Lý', 1030, 540, 350],
           ['CNTT', 1000, 400, 200],
          ['Ngữ văn', 1170, 460, 250],
          ['Toán', 660, 1120, 300],
          ['Lý', 1030, 540, 350],
           ['CNTT', 1000, 400, 200],
          ['Ngữ văn', 1170, 460, 250],
          ['Toán', 660, 1120, 300],
          ['Lý', 1030, 540, 350],
           ['CNTT', 1000, 400, 200],
          ['Ngữ văn', 1170, 460, 250],
          ['Toán', 660, 1120, 300],
          ['Lý', 1030, 540, 350],

           ['CNTT', 1000, 400, 200],
          ['Ngữ văn', 1170, 460, 250],
          ['Toán', 660, 1120, 300],

        ]);

        var options = {
          chart: {
            title: 'Các khoa'         }
        };

        var chart = new google.charts.Bar(document.getElementById('columnchart_material'));
var chart1 = new google.charts.Bar(document.getElementById('columnchart_material1'));
        chart.draw(data, google.charts.Bar.convertOptions(options));
         chart1.draw(data, google.charts.Bar.convertOptions(options));
        

      }

    </script>
 

            