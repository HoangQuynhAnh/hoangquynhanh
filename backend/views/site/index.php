<?php 
use yii\helpers\Html;
use backend\models\Result;
 ?>
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://code.highcharts.com/highcharts.js"></script>
<?php  $host = 'http://' . $_SERVER['HTTP_HOST'];
$homeUrl = str_replace('/frontend/web', '', Yii::$app->urlManager->baseUrl) . '/';
?>
        <?php
        $getDTB=new Result();
        $getDTB=$getDTB->getDTB();
        $gioi=0; $kha=0;
             $kem=0;$xs=0;
        foreach ($getDTB as $value) {
            if($value['DTB']>=90){
                
                $xs=$xs+1;
                            }
            elseif($value['DTB']<90&&$value['DTB']>=70){
               
               $gioi=$gioi+1;
           }
           elseif($value['DTB']<70&&$value['DTB']>=50){
            
               $kha=$kha+1;
               
           }
           else{
               $kem=$kem+1;
               
           }} 
         ?>
            <section class="content">
                <!-- Small boxes (Stat box) -->
                <div class="row">
                    <div class="col-lg-3 col-xs-6">
                        <!-- small box -->
                        <div class="small-box bg-red">
                            <div class="inner">
                                <h3><?php echo $xs; ?></h3>
                                <p>Danh sách giảng viên xuất sắc</p>
                            </div>
                            <div class="icon">
                                <i class="ion-ios-calendar-outline"></i>
                            </div>
                                <a class="small-box-footer" href="<?php echo$host.$homeUrl.'index.php?r=evateacherbymark%2Fview&mark=1'; ?>">Chi tiết</a>
                            
             </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-3 col-xs-6">
                        <!-- small box -->
                        <div class="small-box bg-aqua">
                            <div class="inner">
                                <h3><?php echo $gioi; ?></h3>

                                <p>Danh sách giảng viên loại giỏi</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-stats-bars"></i>
                            </div>
                           <a class="small-box-footer" href="<?php echo$host.$homeUrl.'index.php?r=evateacherbymark%2Fview&mark=2'; ?>">Chi tiết</a>
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-3 col-xs-6">
                        <!-- small box -->
                        <div class="small-box bg-green">
                            <div class="inner">
                                <h3><?php echo $kha ?></h3>

                                <p>Danh sách giảng viên loại khá</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-person-add"></i>
                            </div>
                   <a class="small-box-footer" href="<?php echo$host.$homeUrl.'index.php?r=evateacherbymark%2Fview&mark=3'; ?>">Chi tiết</a>

                        </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-3 col-xs-6">
                        <!-- small box -->
                        <div class="small-box bg-yellow">
                            <div class="inner">
                                <h3><?php echo $kem ?></h3>

                                <p>Danh sách giảng viên chưa đạt</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-pie-graph"></i>
                            </div>
                            <a class="small-box-footer" href="<?php echo$host.$homeUrl.'index.php?r=evateacherbymark%2Fview&mark=4'; ?>">Chi tiết</a>

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
                            <div class="box-body" style="height: 100%">
                                <div class="chart" >
                                    <div id="columnchart_material" >
                                 
                                    </div>
                        <div id="columnchart_material1" style=" height: 250px; width:500px;float:left;">
                                 
                                    </div>
                        
                                    <div id="piechart" style="width:400px; height: 300px;float:right; margin-right: 40px">

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

            ['Giỏi', <?php echo $gioi ?>],
            
            ['Xuất sắc', <?php echo $xs ?>],
            
            ['Chưa đạt', <?php echo $kem ?>],
            ['Khá', <?php echo $kha ?>],
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
          ['Year', 'Xuất sắc', 'Giỏi', 'Khá', 'Kém'],
          ['Địa lý', 1000, 400, 200,10],
           ['Ngữ văn', 1170, 460, 250,10],
           ['Anh', 660, 1120, 300,10],
           ['Mầm non', 1170, 460, 250,10],
           ['Triết', 1030, 540, 350,10],
           ['Âm nhạc', 1000, 400, 200,10],
           
           ['Lịch sử', 660, 1120, 300,10],
          ['Chính trị', 1030, 540, 350,10],
           ['Pháp', 1000, 400, 200,10],
           ['Mỹ thuật', 1170, 460, 250,10],
          ['GDDB', 660, 1120, 300,10],
          ['QLGD', 1030, 540, 350,10],
            ['VN học', 1000, 400, 200,10],
          ['Tâm lý', 1170, 460, 250,10],
           ['CTXH', 660, 1120, 300,10],
           ['Tiểu học', 660, 1120, 300,10],
         
        ]);
        var data1 = google.visualization.arrayToDataTable([
          ['Year', 'Xuất sắc', 'Giỏi', 'Khá', 'Kém'],
          ['Toán', 1000, 400, 200,10],
           ['Lý', 1170, 460, 250,10],
           ['Hóa', 660, 1120, 300,10],
           ['Sinh', 1030, 540, 350,10],
           ['Kỹ thuật', 1000, 400, 200,10],
           ['Cnghệ', 1170, 460, 250,10],
           ['Tin', 660, 1120, 300,10],
          ['Quốc phòng', 1030, 540, 350,10],
           
        ]);


        var options1 = {
          chart: {
            title: 'Các khoa tự nhiên'         }
        };


        var options = {
          chart: {
            title: 'Các khoa xã hội'         }
        };

        var chart = new google.charts.Bar(document.getElementById('columnchart_material'));
    var chart1 = new google.charts.Bar(document.getElementById('columnchart_material1'));
        chart.draw(data, google.charts.Bar.convertOptions(options));
        chart1.draw(data1, google.charts.Bar.convertOptions(options1));
        

      }
    </script>
 

            