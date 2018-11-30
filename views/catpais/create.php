<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Catpais */

$this->title = 'Create Catpais';
$this->params['breadcrumbs'][] = ['label' => 'Catpais', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="catpais-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
