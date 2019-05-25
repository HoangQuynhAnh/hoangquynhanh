<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

use yii\helpers\ArrayHelper;
use backend\models\Teacher;

use backend\models\Schedule;

use backend\models\semester;

/* @var $this yii\web\View */
/* @var $model backend\models\Classes */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="classes-form">

    <?php $form = ActiveForm::begin(['options'=>['enctype'=>'multipart/form-data']]); ?>

    <?= $form->field($model, 'scheduleID')->dropDownList(
        ArrayHelper::map(semester::find()->all(), 'ID','year'),
        ['prompt'=>'---Chọn kỳ học---']

    ) ?>
    <?= $form->field($model, 'name')->textInput()?>

    <?= $form->field($model, 'teacherID')->dropDownList(
        ArrayHelper::map(teacher::find()->all(), 'teacherID','teacherName'),
        ['prompt'=>'---Chọn giáo viên---']

    ) ?>

  <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
