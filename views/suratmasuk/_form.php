<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;;

/* @var $this yii\web\View */
/* @var $model app\models\SuratMasuk */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="surat-masuk-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_surat_masuk')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'perihal')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tanggal')->textInput(['type'=>'date']) ?>

    <?= $form->field($model, 'dari')->dropDownList([ 'Kejagung' => 'Kejagung', 'Kejari' => 'Kejari', 'Instansi Lain' => 'Instansi Lain', ], ['prompt' => '']) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
