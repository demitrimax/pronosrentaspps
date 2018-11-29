<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Catesquemactto */

$this->title = 'Create Catesquemactto';
$this->params['breadcrumbs'][] = ['label' => 'Catesquemacttos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="catesquemactto-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
