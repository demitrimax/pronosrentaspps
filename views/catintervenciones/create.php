<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Catintervenciones */

$this->title = 'Alta de tipo de Intervenciones';
$this->params['breadcrumbs'][] = ['label' => 'Catálogo de Intervenciones', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="catintervenciones-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
