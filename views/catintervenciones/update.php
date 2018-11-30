<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Catintervenciones */

$this->title = 'Actualizar tipo de Intervención: ' . $model->nombre;
$this->params['breadcrumbs'][] = ['label' => 'Catálogo de Intervenciones', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->nombre, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Editar';
?>
<div class="catintervenciones-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
