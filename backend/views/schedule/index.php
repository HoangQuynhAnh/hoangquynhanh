<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\SearchSchedule */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Các môn học theo kỳ';
$this->params['breadcrumbs'][] = $this->title;
?>

<section class="content-header">
    <h1><i class=""></i> <?= Html::encode($this->title) ?></h1>
    <div class="breadcrumb">
      <?= Html::a('<span class="glyphicon glyphicon-plus"></span>Thêm mới', ['create'], ['class' => 'btn btn-primary btn-sm']) ?>
      
  </div>
</section>
<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="box" id="view">
                <div class="box-header with-border">
                    <!-- Search Limit -->
                    <section class="content-search">
                          <?php echo $this->render('_search', ['model' => $searchModel]); ?>
                    </section>
                    
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <div class="row" style='padding:0px; margin:0px;'>
                        <!--ND-->
                            <table class="table table-hover table-bordered">

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        //'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',

            ['attribute'=>'Kỳ',
            'value'=>'semester.year',],

            ['attribute'=>'Tên môn học',
            'value'=>'offercode0.subjectname',],
            'semesterID',
           'offercode',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
