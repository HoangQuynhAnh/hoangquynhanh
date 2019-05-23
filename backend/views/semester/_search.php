<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\SearchSemester */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="semester-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

 <section class="content-search">
                            <div class="form-inline">
                                <div class="input-group">
                                    <span class="input-group-addon" id="basic-addon1">Mã học kỳ</span>
                                    
                                    <?= $form->field($model, 'ID')->textinput(['class' => 'form-control'])->label(false) ?>

                                  </div>
                                   <div class="input-group" style="margin-left: 30px">
                                    <span class="input-group-addon" id="basic-addon1">Năm học</span>
                                    
                                    <?= $form->field($model, 'year')->textinput(['class' => 'form-control'])->label(false) ?>
                                    
    
                                     <?= Html::submitButton('Tìm', ['class' => 'btn btn-primary']) ?>
                                  </div>
                                
                            </div>
</section>
   
   

    <?php ActiveForm::end(); ?>

</div>
