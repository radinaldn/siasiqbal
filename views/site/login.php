<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="login-box">
    <div class="login-logo">
        <a href="../../index2.html"><b>Siasy</b>IQBAL</a>

    </div>
    <!-- /.login-logo -->
    <div class="card">
        <div class="card-body login-card-body">
            <p class="login-box-msg">Assalamualaikum, silahkan login</p>
            <img style="display: block;
    margin-left: auto;
    margin-right: auto;
    width: 50%;" src="<?= Yii::$app->getHomeUrl() ?>files/images/pekanbaru_logo.png" height="100"/>
            <?php $form = ActiveForm::begin([
                'id' => 'login-form',
                'layout' => 'horizontal',
                'fieldConfig' => [
                    //'template' => "{label}\n<div class=\"col-lg-3\">{input}</div>\n<div class=\"col-lg-8\">{error}</div>",
                  //  'labelOptions' => ['class' => 'col-lg-1 control-label'],
                ],
            ]); ?>

            <?= $form->field($model, 'username')->textInput(['autofocus' => true, 'class'=>'form-control']) ?>

            <?= $form->field($model, 'password')->passwordInput(['class'=>'form-control border-input']) ?>


            <?= $form->field($model, 'rememberMe')->checkbox([
                'template' => "<div class=\"col-lg-offset-1 col-lg-3\">{input} {label}</div>\n<div class=\"col-lg-8\">{error}</div>",
            ]) ?>

            <div class="form-group">
                <div class="col-lg-offset-1 col-lg-11">
                    <?= Html::submitButton('Login', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
                </div>
            </div>

            <?php ActiveForm::end(); ?>

<!--    <div class="col-lg-offset-1" style="color:#999;">-->
<!--        You may login with <strong>admin/admin</strong> or <strong>demo/demo</strong>.<br>-->
<!--        To modify the username/password, please check out the code <code>app\models\User::$users</code>.-->
<!--    </div>-->
</div>
