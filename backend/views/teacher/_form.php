<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use backend\models\Department;

/* @var $this yii\web\View */
/* @var $model backend\models\Teacher */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="teacher-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'teacherName')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'departmentID')->dropDownList(
        ArrayHelper::map(Department::find()->all(), 'id','department'),
        ['prompt'=>'---Chọn danh mục---']

    ) ?>

    <?= $form->field($model, 'status')->dropDownList(
        [
        0=>'Ẩn',
        1=>'Hiện'
        ]
        
    ) ?>

    <?= $form->field($model, 'avatar')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Lưu', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
