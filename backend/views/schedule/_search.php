<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\SearchSchedule */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="schedule-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>
<section class="content-search">
                            <div class="form-inline">
                                <div class="input-group">
                                    <span class="input-group-addon" id="basic-addon1">Mã môn</span>
                                    
                                    <?= $form->field($model, 'offercode')->textinput(['class' => 'form-control'])->label(false) ?>

                                  </div>
                                   <div class="input-group" style="margin-left: 30px">
                                    <span class="input-group-addon" id="basic-addon1">Mã kỳ</span>
                                    
                                    <?= $form->field($model, 'semesterID')->textinput(['class' => 'form-control'])->label(false) ?>
                                    
    
                                     <?= Html::submitButton('Tìm', ['class' => 'btn btn-primary']) ?>
                                  </div>
                                
                            </div>
</section>
   
   

    <?php ActiveForm::end(); ?>

</div>