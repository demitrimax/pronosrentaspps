<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Catprogramas */

$this->title = $model->nombre;
$this->params['breadcrumbs'][] = ['label' => 'Catprogramas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="catprogramas-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Editar', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Eliminar', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Esta seguro de eliminar este elemento?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            //'id',
            'nombre',
            'anio',
            'version',
            //'usuario_id',
        ],
    ]) ?>

</div>
