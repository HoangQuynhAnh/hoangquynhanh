
<?php

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

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
    $menuItems = [
    ];
    if (Yii::$app->user->isGuest) {
        $menuItems[] = ['label' => 'Signup', 'url' => ['/site/signup']];
        $menuItems[] = ['label' => 'Login', 'url' => ['/site/login']];
    } else {
        $menuItems[] = '<li>'
            . Html::beginForm(['/site/logout'], 'post')
            . Html::submitButton(
                'Thoát',
                ['class' => 'btn btn-link logout']
            )
            . Html::endForm()
            . '</li>';
    }
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => $menuItems,
    ]);
    ?>
<?php $this->endBody() ?>


<!-- Just an image -->

<!-- Footer -->
