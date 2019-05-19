
<?php

use yii\helpers\Html;

use yii\data\ActiveDataProvider;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;
use frontend\models\user;
use frontend\models\Schedule;
use frontend\models\Evalutionform;
use frontend\models\Semester;
use yii\grid\GridView;
use yii\grid\CheckboxColumn;
use frontend\models\Subjects;
use frontend\controllers;
use yii\data\SqlDataProvider;

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
            <a class="navbar-brand;float:left" href="index.php">
                <img class="img-responsive" src="anh/banner_left.jpg" alt="">
            </a>
            <?php
            if (Yii::$app->user->isGuest) {
         } else {
             $greeting = "Chào " . '<i style="color:blue;">' . Yii::$app->user->identity->name . '</i>' . "!";
             $menuItems = Html::beginForm(['/site/logout'], 'post', ['class'=>'logout_form'])
                          . $greeting
                          . Html::submitButton(
                                'Đăng xuất',
                                ['class' => 'btn btn-link  logout_form']
                            )
                          . Html::endForm();
             echo $menuItems;
         }

         ?>

     </div>
 </div>
 <div class="row" style="border: 1px solid #3399CC; background-color: #3399CC">
    <nav class="navbar navbar-expand-lg navbar-light bg-light" style="padding: 0%" >
        <div class="collapse navbar-collapse".subjectName="navbarNav" style="background-color: #3399CC; width: 1224px">
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

    <div style="background-color: white; margin-left:20%; margin-right: 20%;">

        
        <div style="text-align: center; padding-bottom: 1%; padding-top: 1%; font-size: 200%"><b style="color:green">Lấy ý kiến phản hồi từ người học đối với giảng viên</b> </div>
        <div>
      
                <section class="content">
               <?= $content ?>
            </section>
        </div>
    </div>
</div>
<footer class="page-footer text-center" style="background-color:gray;color:white; font-size: 13px;">
    
  Copyright ©2017 Trường Đại học Sư phạm Hà Nội
    <!-- Copyright -->
 </br> Phần mềm Quản lý đào tạo UniSoft 6.0 phát triển bởi Team1
    <!-- Copyright -->

</footer>

<!-- Just an image -->

<!-- Footer -->
<style> 

html{ height:100%; }
body{ min-height:100%; padding:0; margin:0; position:relative; }
header{ height:50px; background:lightcyan; }
footer{ background:PapayaWhip; }

/* Trick: */
body {
  position: relative;
}

body::after {
  content: '';
  display: block;
  height: 50px; /* Set same as footer's height */
}

footer {
  position: absolute;
  bottom: 0;
  width: 100%;
  height: 50px;
}</style>
