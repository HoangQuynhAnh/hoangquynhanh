<?php

use yii\helpers\Html;

use backend\models\Department;
/* @var $this yii\web\View */
/* @var $model backend\models\Teacher */

$this->title = 'Tạo mới';
$this->params['breadcrumbs'][] = ['label' => 'Teachers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="teacher-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
