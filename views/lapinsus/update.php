<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Lapinsus */

$this->title = 'Update Lapinsus: ' . $model->id_lapinsus;
$this->params['breadcrumbs'][] = ['label' => 'Lapinsuses', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_lapinsus, 'url' => ['view', 'id' => $model->id_lapinsus]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="lapinsus-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
