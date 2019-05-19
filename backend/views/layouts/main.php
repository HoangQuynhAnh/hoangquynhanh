<?php

/* @var $this \yii\web\View */
/* @var $content string */

use backend\assets\AppAsset;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use common\widgets\Alert;
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
    <style>
    .content-header h1,
    th,
    label {
        color: #333;
    }

    label {
        font-weight: 600 !important;
    }

    .maudo {
        color: red
    }
</style>
<?= Html::csrfMetaTags() ?>
<title><?= Html::encode($this->title) ?></title>
<?php $this->head() ?>
<?php  $host='http://'.$_SERVER['HTTP_HOST'];
$homeUrl=str_replace('/backend/web', '', Yii::$app->urlManager->baseUrl).'/';  ?>                    

</head>

<body class="hold-transition skin-blue sidebar-mini">
    <?php $this->beginBody() ?>
    <div class="wrapper">
        <!-- Vung Header -->
        <header class="main-header">
            <a href="index.html" class="logo">
                <span class="logo-mini">
                    <i class="fa fa-arrow-right" aria-hidden="true"></i>
                </span>
                <span class="logo-lg">Quản trị hệ thống</span>
            </a>
            <nav class="navbar navbar-static-top" style="height: 52px">
                <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                    <span class="sr-only">Toggle navigation</span>
                </a>
                <div class="navbar-custom-menu">
                    <ul class="nav navbar-nav" style="height: 52px;  padding: 1px">
                        <li style="height: 52px">
                        </li>
                        <li class="dropdown user user-menu" style="height: 52px; padding: 0px">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <img src="<?php echo $host; echo $homeUrl;?>uploads/<?php echo Yii::$app->user->identity->avatar?>" class="user-image" alt="User Image">
                                <span class="hidden-xs"><?php 
                                if (!Yii::$app->user->isGuest){
                                  echo "Chào ".'<i style="color:pink;">'.Yii::$app->user->identity->name."!".'</i>';?>

                              </span>
                          </a>
                          <ul class="dropdown-menu">
                            <li class="user-header">
                                <img src="<?php echo $host; echo $homeUrl;?>uploads/<?php echo Yii::$app->user->identity->avatar?>" class="img-circle" alt="User Image">
                                <p>Tài khoản:
                                    <i style="color: yellow">
                                        <?php  echo Yii::$app->user->identity->username; ?></i></br>
                                        <small>SĐT: <?php  echo Yii::$app->user->identity->tel; ?></br></small><?php ; } ?>
                                    </p>
                                </li>
                                <li class="user-footer">
                                    <div class="pull-right">
                                        <?php 
                                        if (Yii::$app->user->isGuest) {
                                         echo Html::a('<span> Đăng nhập<span>',['/site/login'],['class'=>'']);} 
                                         else { 

                                          echo Html::a('<span> [Thoát]<span>',['/site/logout'],['data-method'=>'post']);
                                          ?>


                                      </div>
                                  </li>
                              </ul>
                          </li>
                      </ul>
                  </div>
              </nav>
          </header>

          <!-- ./Vung Header -->
          <aside class="main-sidebar">
            <section class="sidebar">
                <div class="user-panel">
                    <div class="pull-left image">
                        <img src="<?php echo $host; echo $homeUrl;?>uploads/<?php echo Yii::$app->user->identity->avatar?>" class="img-circle" alt="User Image">
                    </div>
                    <div class="pull-left info">
                        <p>Quản trị viên</i></p>
                        <a href="#"><?php ; } ?>
                        <i class="fa fa-circle text-success"></i> Trực tuyến</a>
                    </div>
                </div>
                <ul class="sidebar-menu">
                    <li class="header">CHỨC NĂNG</li>

                    <li class="treeview">
                     <?php echo Html::a('<span> Thống kê<span>',['/thongke'],['class'=>'fa fa-bar-chart']);?>
                 </li>
                 <li class="treeview">
                   <?php echo Html::a('<span > Giảng viên<span>',['/teacher'],['class'=>'fa fa-user']);?></li>
                      <li class="treeview">
                       <?php echo Html::a('<span> Sinh viên<span>',['/user'],['class'=>'fa fa-users']);?></li>
                          <li class="treeview">
                           <?php echo Html::a('<span> Môn học<span>',['/subjects'],['class'=>'fa fa-book']);?></li>
                               <li class="treeview">
                                   <?php echo Html::a('<span> Lịch môn học<span>',['/schedule'],['class'=>'fa fa-align-justify']);?></li>
                                    <li class="treeview">
                                       <?php echo Html::a('<span> Học kỳ<span>',['/semester'],['class'=>'fa fa-calendar']);?></li>
                                        <li class="treeview">
                                           <?php echo Html::a('<span> Lớp học với giảng viên<span>',['/classes'],['class'=>'fa fa-cloud']);?></li>
                                            <li class="treeview">
                                           <?php echo Html::a('<span> Khoa<span>',['/department'],['class'=>'fa fa-leaf']);?></li>
                                            <li class="treeview">
                                                <?php echo Html::a('<span> Lớp học cho sinh viên<span>',['/attendance'],['class'=>'fa fa-star-half-o']);?></li>
                                                   <li class="treeview">
                                                <?php echo Html::a('<span> Phiếu đánh giá<span>',['/evalutionform'],['class'=>'fa fa-file-o']);?></li>
                                               </li>

                                               <li class="header">CÀI ĐẶT</li>
                                               <li class="treeview">
                                                   <ul class="treeview-menu">
                                                    <li class="active">
                                                        <?php echo Html::a('<span> Banner<span>',['/'],['class'=>'fa fa-cogs']);?>
                                                    </li> 
                                                </ul>
                                            </li>


                                            <li>

                                                <?php 
                                                if (!Yii::$app->user->isGuest){
                                                    ?><?php

                                                    echo Html::a(' Thoát',['/site/logout'],['class'=>'fa fa-sign-out text-red'],['data-method'=>'post']);}?>
                                                </li>
                                                <li>
                                                    <?php echo Html::a('<span> Trợ giúp<span>',['/#'],['class'=>'fa fa-question-circle text-yellow']);?>

                                                </li>
                                            </ul>

                                        </section>
                                        <!-- /.sidebar -->
                                    </aside>
                                    <!-- Content Wrapper. Contains page content -->
                                    <!-- Content Wrapper. Contains page content -->
                                    <div class="content-wrapper">
                                        <!-- Content Header (Page header) -->

                                        <!-- Main content -->
                                        <section class="content">
                                         <?= $content ?>
                                     </section>
                                     <!-- /.content -->
                                 </div>
                                 <!-- /.content-wrapper -->
                                 <footer class="main-footer">
                                    <div class="pull-right hidden-xs">
                                        <b>Version</b> 2.3.5</div>
                                        <p class="text-center">Copyright &copy; 2017
                                            <a href="http://facebook.com/trungphatit">PYWeb</a>.</strong> All rights reserved.
                                        </footer>
                                        <?php $this->endBody() ?>

                                    </div>
                                </body>

                                </html>
                                <?php $this->endPage() ?>