<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\bolimlar */

$this->title = 'Create Bolimlar';
$this->params['breadcrumbs'][] = ['label' => 'Bolimlars', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="bolimlar-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
