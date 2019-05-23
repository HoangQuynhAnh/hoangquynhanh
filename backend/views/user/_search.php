<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\SearchUser */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="user-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

<section class="content-search">
                            <div class="form-inline">
                                <div class="input-group">
                                    <span class="input-group-addon" id="basic-addon1">Mã sinh viên</span>
                                    
                                    <?= $form->field($model, 'username')->textinput(['class' => 'form-control'])->label(false) ?>

                                  </div>
                                   <div class="input-group" style="margin-left: 30px">
                                    <span class="input-group-addon" id="basic-addon1">Tên sinh viên</span>
                                    
                                    <?= $form->field($model, 'name')->textinput(['class' => 'form-control'])->label(false) ?>
                                    
    
                                     <?= Html::submitButton('Tìm', ['class' => 'btn btn-primary']) ?>
                                  </div>
                                
                            </div>

                           <!--  <?php $value='username'; ?>
                            <div class="form-inline">
                                <div class="input-group">
                                   <select  class="input-group-addon">
                                    <option value="username">Mã sinh viên</option>
                                    <option value="name">Tên sinh viên</option>
                                
                                </select>
                                    
                                    <?= $form->field($model, $value)->textinput(['class' => 'form-control'])->label(false) ?>

                                  </div>
                                  <?php  ?>
                                  
                                     <?= Html::submitButton('Tìm', ['class' => 'btn btn-primary']) ?>
                    
                                
                            </div> -->
                        </section>

    <?php // echo $form->field($model, 'email') ?>

    <?php // echo $form->field($model, 'tel') ?>

<!-- <?php  echo $form->field($model, 'address') ?>
  -->   <?php // echo $form->field($model, 'name') ?>

    <?php // echo $form->field($model, 'status') ?>

    <?php // echo $form->field($model, 'avatar') ?>

    <?php // echo $form->field($model, 'batch') ?>

    <div class="form-group">
      
    </div>

    <?php ActiveForm::end(); ?>

</div>
