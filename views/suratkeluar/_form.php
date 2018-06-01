<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\SuratKeluar */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="surat-keluar-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_surat_keluar')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tanggal')->textInput() ?>

    <?= $form->field($model, 'perihal')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kepada')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
