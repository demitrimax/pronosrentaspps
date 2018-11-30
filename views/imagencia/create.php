<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Imagencia */

$this->title = 'Create Imagencia';
$this->params['breadcrumbs'][] = ['label' => 'Imagencias', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="imagencia-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
