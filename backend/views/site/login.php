<?php

/** @var yii\web\View $this */
/** @var yii\bootstrap5\ActiveForm $form */
/** @var \common\models\LoginForm $model */

use yii\bootstrap4\ActiveForm;
use yii\bootstrap4\Html;
use yii\helpers\Url;

$this->title = 'Login';
?>

<style type="text/css">
    .bg-login-image {
        background: url(https://source.unsplash.com/K4mSJ7kc0As/600x800);
        background-position: center;
        background-size: cover;
    }
</style>

<!-- Nested Row within Card Body -->
<div class="row">
    <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
    <div class="col-lg-6">
        <div class="p-5">
            <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
            </div>

            <?php $form = ActiveForm::begin([
                'id' => 'login-form',
                'fieldConfig' => [
                    'template' => "{input}\n{hint}\n{error}",
                ],
                'options' => ['class' => 'user'],
            ]); ?>
            <?= $form->field($model, 'username', ['inputOptions' => ['class' => ['widget' => 'form-control form-control-user']], ])->textInput(['autofocus' => true, 'placeholder' => 'Enter Username...']) ?>

            <?= $form->field($model, 'password', ['inputOptions' => ['class' => ['widget' => 'form-control form-control-user']]])->passwordInput(['placeholder' => 'Enter Password...']) ?>

            <?= $form->field($model, 'rememberMe', [
                'checkTemplate' => "<div class=\"custom-control custom-checkbox small\">\n{input}\n{label}\n{error}\n{hint}\n</div>"
            ])->checkbox() ?>

            <?= Html::submitButton('Login', ['class' => 'btn btn-primary btn-user btn-block', 'name' => 'login-button']) ?>
            <?php ActiveForm::end(); ?>
            <hr>
            <div class="text-center">
                <a class="small" href="<?= Url::to(['site/forgot-password']) ?>">Forgot Password?</a>
            </div>
        </div>
    </div>
</div>