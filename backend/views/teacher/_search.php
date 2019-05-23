<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\SearchTeacher */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="teacher-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>
<section class="content-search">
                            <div class="form-inline">
                                <div class="input-group">
                                    <span class="input-group-addon" id="basic-addon1">Mã giảng viên</span>
                                    
                                    <?= $form->field($model, 'teacherID')->textinput(['class' => 'form-control'])->label(false) ?>

                                  </div>
                                   <div class="input-group" style="margin-left: 30px">
                                    <span class="input-group-addon" id="basic-addon1">Tên giảng viên</span>
                                    
                                    <?= $form->field($model, 'teacherName')->textinput(['class' => 'form-control'])->label(false) ?>
                                    
    
                                     <?= Html::submitButton('Tìm', ['class' => 'btn btn-primary']) ?>
                                  </div>
                                
                            </div>
</section>
   
   

    <?php ActiveForm::end(); ?>

</div>
