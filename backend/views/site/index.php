<?php 
use yii\helpers\Html;
use backend\models\Products;
use backend\models\Category;
use backend\models\News;
 ?>
<?php /*
$sanpham = new Products();
$sanpham = $sanpham->getthongke();
$news = new News();
$news = $news->getthongke();*/
?>
        
            <section class="content">
                <!-- Small boxes (Stat box) -->
                <div class="row">
                    <div class="col-lg-3 col-xs-6">
                        <!-- small box -->
                        <div class="small-box bg-aqua">
                            <div class="inner">
                                <h3><?php echo '14'; ?></h3>
                                <p>Danh sách giảng viên xuất sắc</p>
                            </div>
                            <div class="icon">
                                <i class="ion-ios-calendar-outline"></i>
                            </div>
                            <?php echo Html::a('',['/books'],['class'=>'small-box-footer']);  ?>
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
                            <?php echo Html::a('',['/news'],['class'=>'small-box-footer']);  ?>
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
                    <?php echo Html::a('',['/lienhe'],['class'=>'small-box-footer']);  ?>

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
                            <?php echo Html::a('',['/donhang'],['class'=>'small-box-footer']);  ?>

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
                                <h3 class="box-title">Bán hàng & Doanh thu</h3>
                            </div>
                            <div class="box-body">
                                <div class="chart">
                                    <div id="chart_div" style="width: 100%; height: 250px;"></div>
                                </div>
                            </div>
                            <div class="box-footer">
                                <div class="row">
                                    <div class="col-sm-4 col-xs-6">
                                        <div class="description-block border-right">
                                            <h5 class="description-header" style="color: #e90000;">0 VNĐ</h5>
                                            <span class="description-text">Tổng doanh thu</span>
                                        </div>
                                        <!-- /.description-block -->
                                    </div>
                                    <!-- /.col -->
                                    <div class="col-sm-4 col-xs-6">
                                        <!-- /.description-block -->
                                    </div>
                                    <!-- /.col -->
                                    <div class="col-sm-4 col-xs-6">
                                        <!-- /.description-block -->
                                    </div>
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
                google.charts.load('current', {
                    'packages': ['corechart']
                });
                google.charts.setOnLoadCallback(drawVisualization);

                function drawVisualization() {
                    // Some raw data (not necessarily accurate)
                    var data = google.visualization.arrayToDataTable([
                        ['Month', 'Bán ra', 'Đơn hàng'],
                        ['01/2017', 0, 0],
                        ['02/2017', 0, 0],
                        ['03/2017', 0, 0],
                        ['04/2017', 0, 0],
                        ['05/2017', 0, 0],
                        ['06/2017', 0, 0],
                        ['07/2017', 0, 0],
                        ['08/2017', 0, 0],
                        ['09/2017', 0, 0],
                        ['10/2017', 0, 0],
                        ['11/2017', 0, 0],
                        ['12/2017', 0, 0],
                    ]);

                    var options = {
                        title: 'Số lượng bán ra từ 01/2017 - 12/2017',
                        seriesType: 'bars'
                    };

                    var chart = new google.visualization.ComboChart(document.getElementById('chart_div'));
                    chart.draw(data, options);
                }
            </script>
            