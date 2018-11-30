<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\CatpaisSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Catpais';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="catpais-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Catpais', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'nombre',
            'contador',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
