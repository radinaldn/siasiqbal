<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;


/* @var $this yii\web\View */
/* @var $model app\models\SuratCekal */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="surat-cekal-form">

    <?php $form = ActiveForm::begin([
            'options' => ['enctype' => 'multipart/form-data']
    ]); ?>

    <?= $form->field($model, 'id_surat_cekal')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'asal')->dropDownList([ 'Kejari' => 'Kejari', 'Kejagung' => 'Kejagung', 'Instansi Lainnya' => 'Instansi Lainnya', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'nama')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'jk')->dropDownList([ 'Laki-Laki' => 'Laki-Laki', 'Perempuan' => 'Perempuan', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'tempat_lahir')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tanggal_lahir')->textInput(['type'=>'date']) ?>

    <?= $form->field($model, 'foto')->fileInput()->label('Foto') ?>

    <?= $form->field($model, 'status')->dropDownList([ 'Cekal' => 'Cekal', 'Diperpanjang' => 'Diperpanjang', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'pekerjaan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'alamat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'no_ktp')->textInput() ?>

    <?= $form->field($model, 'no_passport')->textInput() ?>

    <?= $form->field($model, 'surat_permohonan_cekal_no_tgl')->textInput() ?>

    <?= $form->field($model, 'keputusan_kerja_kepja')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tanggal_mulai_cekal')->textInput(['type'=>'date']) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
