<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\CatintervencionesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Catálogo de Intervenciones';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="catintervenciones-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Alta de tipo de intervenciones', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            'nombre',
            'clave',
            'colorrgb',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
