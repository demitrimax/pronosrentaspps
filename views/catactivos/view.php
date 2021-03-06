<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Catactivos */

$this->title = $model->nombre;
$this->params['breadcrumbs'][] = ['label' => 'Catálogo de Activos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="catactivos-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Editar', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Eliminar', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Está seguro de eliminar este elemento?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'nombre',
            'nomcorto',
            //'id_subdir',
            [ 'attribute' => 'id_subdir',
                'value' => function ($model) {
                    //OBTIENE EL NOMBRE DE LA SUBDIRECCION
                    // Este dato lo obtiene de la funcion getSubdireccion en el modelo de activos
                    return $model->subdireccion->nombre;
                },
            ],
        ],
    ]) ?>

</div>
