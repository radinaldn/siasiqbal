<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\SuratCekal */

$this->title = $model->id_surat_cekal;
$this->params['breadcrumbs'][] = ['label' => 'Surat Cekals', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="surat-cekal-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id_surat_cekal], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_surat_cekal], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_surat_cekal',
            'asal',
            'nama',
            'jk',
            'tempat_lahir',
            'tanggal_lahir',
            'foto',
            'status',
            'pekerjaan',
            'alamat',
            'no_ktp',
            'no_passport',
            'surat_permohonan_cekal_no_tgl',
            'keputusan_kerja_kepja',
            'tanggal_mulai_cekal',
        ],
    ]) ?>

</div>
