<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Subjects */

$this->title = $model->subjectname;
$this->params['breadcrumbs'][] = ['label' => 'Subjects', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="subjects-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Cập nhật', ['update', 'id' => $model->offercode], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Xóa', ['delete', 'id' => $model->offercode], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Bạn có chắc muốn xóa?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'offercode',
            'subjectname',
            'status',
            'description',
        ],
    ]) ?>

</div>
