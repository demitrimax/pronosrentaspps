<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Catsubdirecciones */

$this->title = 'Editar Subdirección: ' . $model->nombre;
$this->params['breadcrumbs'][] = ['label' => 'Catsubdirecciones', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Editar';
?>
<div class="catsubdirecciones-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
