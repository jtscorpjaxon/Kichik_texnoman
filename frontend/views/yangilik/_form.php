<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Yangiliklar */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="yangiliklar-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'sarlavha')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'mahsulot')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'bolim_id')->dropDownList(\yii\helpers\ArrayHelper::map(\common\models\Bolimlar::find()->all(),'nomer','sarlavha')) ?>

   <!--  <?= $form->field($model, 'hosil_sana')->textInput() ?> -->

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
