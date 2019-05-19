<?php 
use yii\helpers\Html;
use yii\data\ActiveDataProvider;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;
use frontend\models\user;
use frontend\models\evalutionform;
use frontend\models\Schedule;
use frontend\models\Semester;
use yii\grid\GridView;
use yii\grid\CheckboxColumn;
use frontend\models\Subjects;
use frontend\controllers;
use yii\data\SqlDataProvider;?>
<?php 
	$sumMarks = new evalutionform();
	$result = $sumMarks->insertDB();
	if ($result) {
		Yii::$app->getResponse()->redirect(['site/index']);
	}
?>
<div class="wrap">
	<?php 
	$getdata = new semester(); $getyear = $getdata->getYear();
	echo "<h4 style='text-align:center'>Thời khóa biểu: "."<span style='color:orange'>".$getyear->year.'</span>'.'</h4>'; ?>
	<table class="table table-hover table-bordered ">
		<tr>
			<th><span style="font-weight:bold">STT</span></th>
			<th>Mã môn</th>
			<th>Tên môn</th>
			<th>Giảng viên</th>
			<th>Trạng thái</th>
			<th style="text-align: center;">#</th>
		</tr>
		<?php
		$getgiatri=new Schedule();
		$getgiatri=$getgiatri->getGiaTri1();
		foreach ($getgiatri as $value) {
			$getscore=Yii::$app->db->createCommand('select score
				from evalutionform
				where attendanceID='.$value['id'].'')->queryAll();
					echo '<tr>';
					echo '<td>'.$value['#'].'</td>';
					echo '<td>'.$value['offercode'].'</td>';
					echo '<td>'.$value['subjectname'].'</td>';
					echo '<td>'.$value['teacherName'].'</td>';
					echo '<td>';
					
					$string='href= "http://localhost/Webdanhgia/frontend/web/index.php?r=evalutionform&id='.$value['id'].'"';
					foreach ($getscore as $value1) {
		 					if(isset($value1['score'])){
						echo'<div class="custom-control custom-checkbox">
									<input type="checkbox" class="custom-control-input"  checked disabled>
									<label class="custom-control-label">Đã làm</label>
							</div>';
						
					$string='';

					//$string='';
					//$string='href= "http://localhost/Webdanhgia/frontend/web/index.php?r=evalutionform&id='.$string.$value['id'].'"';
						}
						else{
					echo '<td>';
					echo "Chưa làm";
					echo '</td>';
						}
					};
					echo '</td>';
					echo '<td>';
					$link='<a '.$string.'> Bấm vào đây phản hồi';
					echo $link;
					echo '</td>';
					echo '</tr>';
				}
				?>
			</table>