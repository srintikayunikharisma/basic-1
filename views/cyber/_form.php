<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Cyber */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="cyber-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nama')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tgl_lahir')->textInput() ?>

    <?= $form->field($model, 'jekel')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'angkatan')->textInput() ?>

    <?= $form->field($model, 'id_divisi')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
