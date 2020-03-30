<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\bolimlar */

$this->title = 'Update Bolimlar: ' . $model->nomer;
$this->params['breadcrumbs'][] = ['label' => 'Bolimlars', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->nomer, 'url' => ['view', 'id' => $model->nomer]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="bolimlar-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
