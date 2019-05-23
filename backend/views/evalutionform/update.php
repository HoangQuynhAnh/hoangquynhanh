<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Evalutionform */

$this->title = 'Update Evalutionform: ' . $model->attendanceID;
$this->params['breadcrumbs'][] = ['label' => 'Evalutionforms', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->attendanceID, 'url' => ['view', 'id' => $model->attendanceID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="evalutionform-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
