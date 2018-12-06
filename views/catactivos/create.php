<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Catactivos */

$this->title = 'Alta de Activo de Producción';
$this->params['breadcrumbs'][] = ['label' => 'Catálogo de Activos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="catactivos-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
