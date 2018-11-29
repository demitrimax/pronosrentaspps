<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Catintervenciones */

$this->title = 'Actualizar tipo de Intervención: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Catintervenciones', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="catintervenciones-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
