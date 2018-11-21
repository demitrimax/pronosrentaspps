<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Catcias */

$this->title = 'Create Catcias';
$this->params['breadcrumbs'][] = ['label' => 'Catcias', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="catcias-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
