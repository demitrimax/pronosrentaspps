<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Catactivos */

$this->title = 'Create Catactivos';
$this->params['breadcrumbs'][] = ['label' => 'Catactivos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="catactivos-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
