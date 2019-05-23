<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Result */

$this->title = 'Update Result: ' . $model->classID;
$this->params['breadcrumbs'][] = ['label' => 'Results', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->classID, 'url' => ['view', 'id' => $model->classID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="result-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
