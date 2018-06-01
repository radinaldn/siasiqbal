<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Lapinhar */

$this->title = 'Create Lapinhar';
$this->params['breadcrumbs'][] = ['label' => 'Lapinhars', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="lapinhar-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
