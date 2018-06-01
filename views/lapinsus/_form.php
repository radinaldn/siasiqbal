<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Lapinsus */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="lapinsus-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'no_tar_tanggal')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'no_rlik')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'perihal')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
