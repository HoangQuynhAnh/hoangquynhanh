<?php

use yii\helpers\Html;

use backend\models\Department;
/* @var $this yii\web\View */
/* @var $model backend\models\Teacher */

$this->title = 'Cập nhật: ' . $model->teacherName;
$this->params['breadcrumbs'][] = ['label' => 'Teachers', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->teacherID, 'url' => ['view', 'id' => $model->teacherID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="teacher-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
