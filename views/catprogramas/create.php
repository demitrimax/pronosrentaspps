<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Catprogramas */

$this->title = 'Alta de Programas Operativos';
$this->params['breadcrumbs'][] = ['label' => 'Catálogo de Programas Operativos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="catprogramas-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
