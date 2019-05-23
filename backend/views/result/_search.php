<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\SearchResult */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="result-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <section class="content-search">
                            <div class="form-inline">
                                <div class="input-group">
                                    <span class="input-group-addon" id="basic-addon1">Mã lớp</span>
                                    
                                    <?= $form->field($model, 'classID')->textinput(['class' => 'form-control'])->label(false) ?>
 <?= Html::submitButton('Tìm', ['class' => 'btn btn-primary']) ?>
                                  </div>
                     
                                
                            </div>
</section>
   
   

    <?php ActiveForm::end(); ?>

</div>