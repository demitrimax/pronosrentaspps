<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Catactivos */

$this->title = 'Editar Activo: ' . $model->nombre;
$this->params['breadcrumbs'][] = ['label' => 'Catactivos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="catactivos-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
