<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

use backend\models\Department;
/* @var $this yii\web\View */
/* @var $model backend\models\Teacher */

$this->title = $model->teacherName;
$this->params['breadcrumbs'][] = ['label' => 'Teachers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="teacher-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Cập nhật', ['update', 'id' => $model->teacherID], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Xóa', ['delete', 'id' => $model->teacherID], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'teacherID',
            'teacherName',
            'departmentID',
            'status',
            'avatar',
        ],
    ]) ?>

</div>
