<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Subjects */

$this->title = 'Môn học';
$this->params['breadcrumbs'][] = ['label' => 'Subjects', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="subjects-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
