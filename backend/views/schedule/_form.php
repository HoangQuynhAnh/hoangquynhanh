<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use backend\models\Subjects;

use backend\models\Semester;
/* @var $this yii\web\View */
/* @var $model backend\models\Schedule */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="schedule-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'semesterID')->dropDownList(
        ArrayHelper::map(Semester::find()->all(), 'ID','year'),
        ['prompt'=>'---Chọn danh mục---']

    ) ?>

    <?= $form->field($model, 'offercode')->dropDownList(
        ArrayHelper::map(Subjects::find()->all(), 'offercode','subjectname'),
        ['prompt'=>'---Chọn danh mục---']

    ) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
