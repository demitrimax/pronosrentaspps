<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Catprogramas */

$this->title = 'Editar Programa Operativo: ' . $model->nombre;
$this->params['breadcrumbs'][] = ['label' => 'Catálogo de Programas Operativos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Editar';
?>
<div class="catprogramas-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
