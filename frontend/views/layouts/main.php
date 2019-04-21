
<?php

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;
use frontend\models\user;
use frontend\models\Schedule;
use frontend\models\Semester;

use frontend\models\Subjects;
use frontend\controllers;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/index.css">
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
    <?php $this->registerCsrfMetaTags() ?>
    <title>Trang chủ</title>
    <?php $this->head() ?>
</head>
<body>

<?php $this->beginBody() ?>
<div style="background-image: url('anh/bg-head.png')">
    <div style="margin-left: 15%">
    <a class="navbar-brand" href="index.php">
        <img class="img-responsive" src="anh/banner_left.jpg" alt="">
    </a>

    </div>
</div>
<div class="row" style="border: 1px solid #3399CC; background-color: #3399CC">
    <nav class="navbar navbar-expand-lg navbar-light bg-light" style="padding: 0%" >
        <div class="collapse navbar-collapse" id="navbarNav" style="background-color: #3399CC; width: 1920px">
            <ul class="navbar-nav" style="margin-left: 10%" >
                <li class="nav-item ">
                    <a class="nav-link aitem" href="index.php">Trang chủ <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link aitem" href="#">Chương trình đào tạo</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link aitem" href="#">Phiếu đánh giá giảng viên</a>       
                </li>
                <li class="nav-item ">
                    <a class="nav-link aitem" href="#">Lịch đăng kí học</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link aitem" href="#">Tra cứu văn bằng</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link aitem" href="#">Hướng dẫn đăng kí</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link aitem" href="#">Diễn đàn</a>
                </li>
            </ul>
        </div>
    </nav>
</div>
<div>

<div class="wrap">
     <?php
    if (!Yii::$app->user->isGuest){
echo "Chào ".'<i style="color:pink;">'.Yii::$app->user->identity->name."!".'</i>';}?>
    <?php
        $menuItems[] = '<li>'
            . Html::beginForm(['/site/logout'], 'post')
            . Html::submitButton(
                'Thoát',
                ['class' => 'btn btn-link logout']
            )
            . Html::endForm()
            . '</li>';
    
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => $menuItems,
    ]);
    ?>
         <div style="background-color: white; margin-left:20%; margin-right: 20%">

<?php $this->endBody() ?>
<div style="text-align: center; padding-bottom: 1%; padding-top: 1%; font-size: 200%"><b>Lấy ý kiến phản hồi từ người học đối với giảng viên</b> </div>


    <div>


        <?php 
    $getdata = new semester(); $getyear = $getdata->getYear();
  echo "Thời khóa biểu: ".$getyear->year; ?>
    <style type="text/css">
.tg  {border-collapse:collapse;border-spacing:0;}
.tg td{font-family:Arial, sans-serif;font-size:14px;padding:8px 20px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:black;}
.tg th{font-family:Arial, sans-serif;font-size:14px;font-weight:normal;padding:8px 20px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:black;}
.tg .tg-fvme{font-weight:bold;font-size:16px;font-family:"Times New Roman", Times, serif !important;;border-color:inherit;text-align:left}
</style>
<table class="tg">
  <tr>
    <th class="tg-fvme">Mã học phần</th>
    <th class="tg-fvme">Tên học phần</th>
    <th class="tg-fvme">Giảng viên</th>
    <th class="tg-fvme">Trạng thái</th>
    <th class="tg-fvme">#</th>
  </tr>
  <?php
$getdata = new schedule();
$getdata1=new Subjects();
$getsubject=$getdata1->getSchedules();
 $getsemes = $getdata->getseme();
    foreach ($getsemes as $item): ?>
   <tr>
    <td>  <?php echo $item->offercode?> </td>
<td> <?php $getsubject=$getdata1->getSchedules();
 ?></td>
<td></td>
<td></td>
<td></td>
</tr>
<?php endforeach; 
      ?> 
</table>
 
    </div>
 

<!-- Just an image -->

<!-- Footer -->
