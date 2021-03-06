<?php

use yii\helpers\Html;
use yii\grid\GridView;

use backend\models\Department;
/* @var $this yii\web\View */
/* @var $searchModel backend\models\SearchTeacher */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Danh sách giáo viên';
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
                            <table class="table table-hover table-bordered">
                        <!--ND-->

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        //'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'teacherID',
            'teacherName',
            'departmentID',
            'status',
            'avatar',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</table>
