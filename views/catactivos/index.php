<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\CatactivosSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Catálogo de Activos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="catactivos-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Alta de Activo', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            'nombre',
            'nomcorto',
            //'id_subdir',
            [ 'attribute' => 'id_subdir',
                'value' => function ($model) {
                    //OBTIENE EL NOMBRE DE LA SUBDIRECCION
                    // Este dato lo obtiene de la funcion getSubdireccion en el modelo de activos
                    return $model->subdireccion->nomcorto;
                },
            ],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
