<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\CatsubdireccionesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Subdirecciones';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="catsubdirecciones-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Alta de Subdirecciones', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            'nombre',
            'nomcorto',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
