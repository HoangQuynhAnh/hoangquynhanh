<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Evalutionform */

$this->title = 'Tạo';
$this->params['breadcrumbs'][] = ['label' => 'Evalutionforms', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="evalutionform-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
