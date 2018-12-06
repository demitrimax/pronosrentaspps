<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Catcias */

$this->title = 'Editar Compañía: ' . $model->nombre;
$this->params['breadcrumbs'][] = ['label' => 'Catcias', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Editar';
?>
<div class="catcias-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
