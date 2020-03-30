<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Yangiliklar */

$this->title = 'Update Yangiliklar: ' . $model->nomer;
$this->params['breadcrumbs'][] = ['label' => 'Yangiliklar', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->nomer, 'url' => ['view', 'id' => $model->nomer]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="yangiliklar-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
