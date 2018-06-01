<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\SuratCekalSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Surat Cekals';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="surat-cekal-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Surat Cekal', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_surat_cekal',
            'asal',
            'nama',
            'jk',
            'tempat_lahir',
            //'tanggal_lahir',
            //'foto',
            //'status',
            //'pekerjaan',
            //'alamat',
            //'no_ktp',
            //'no_passport',
            //'surat_permohonan_cekal_no_tgl',
            //'keputusan_kerja_kepja',
            //'tanggal_mulai_cekal',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>
