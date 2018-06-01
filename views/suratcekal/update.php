<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\SuratCekal */

$this->title = 'Update Surat Cekal: ' . $model->id_surat_cekal;
$this->params['breadcrumbs'][] = ['label' => 'Surat Cekals', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_surat_cekal, 'url' => ['view', 'id' => $model->id_surat_cekal]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="surat-cekal-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
