<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\SuratCekal */

$this->title = 'Create Surat Cekal';
$this->params['breadcrumbs'][] = ['label' => 'Surat Cekals', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="surat-cekal-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
