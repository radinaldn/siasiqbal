<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\LapinharSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="lapinhar-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'id_lapinhar') ?>

    <?= $form->field($model, 'no_tar_tanggal') ?>

    <?= $form->field($model, 'no_rlik') ?>

    <?= $form->field($model, 'perihal') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
