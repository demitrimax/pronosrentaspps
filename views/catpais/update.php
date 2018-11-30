<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Catpais */

$this->title = 'Update Catpais: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Catpais', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="catpais-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
