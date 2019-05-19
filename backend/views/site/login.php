<?php
 use yii\helpers\Html;

use yii\bootstrap\ActiveForm;
 ?>
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
<div class="row" style="background-color: lightgrey">

    <div class="container" style="background-color: white; padding-top: 70px
; padding-bottom: 70px">

        <div  style="width: 40%; margin: auto; padding: 1%; border: 1px solid #3399CC">
            <div class="panel panel-default">
                <div class="panel-heading" style="padding-bottom: 2%;
                font-weight: bolder; font-size: 135%"> Đăng nhập</div>
                <div class="panel-body">
            <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>
                <?= $form->field($model, 'username')->textInput(['autofocus' => true, 'class'=>'form-control', 'placeholder'=>'Tên đăng nhập', 'required'=>'']) ?>
                 <?= $form->field($model, 'password')->passwordInput(['class'=>'form-control', 'placeholder'=>'Mật khẩu', 'required'=>'']) ?>

               
                <div class="form-check" style="padding-bottom: 1%">
                    <?= $form->field($model, 'rememberMe')->checkbox() ?>
                   
                </div>
                <?= Html::submitButton('Đăng nhập', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
            
                <span><a href="">Quên mật khẩu</a></span>
           <?php ActiveForm::end(); ?>
                    </div>
            </div>
        </div>

    </div>

</div>
<!-- Footer -->
<footer class="page-footer" style="background-color:gray">

    <!-- Copyright -->
    <div class="footer-copyright text-center py-3">© 2019 Copyright
    </div>
    <!-- Copyright -->

</footer>