<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Imagencia */

$this->title = 'Update Imagencia: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Imagencias', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="imagencia-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
