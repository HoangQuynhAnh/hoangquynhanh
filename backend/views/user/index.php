<?php

use yii\helpers\Html;
use yii\grid\GridView;

use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\SearchUser */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Danh sách sinh viên';
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
                               <?= GridView::widget([
                                'dataProvider' => $dataProvider,
        //'filterModel' => $searchModel,
                                'columns' => [
                                    ['class' => 'yii\grid\SerialColumn'],

                                    'id',
                                    'username',
            //'auth_key',
            //'password_hash',
            //'password_reset_token',
                                    'email:email',
                                    'tel',
            //'address',
                                    'name',
                                    'status',
            //'avatar',
                                    'batch',

                                    ['class' => 'yii\grid\ActionColumn'],
                                ],
                            ]); ?>
                        </table>
                  
