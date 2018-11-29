<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Catesquemactto */

$this->title = 'Actualizar la información del Esquema: ' . $model->nombre;
$this->params['breadcrumbs'][] = ['label' => 'Esquemas de Contratos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->nombre, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Actualizar';
?>
<div class="catesquemactto-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
