<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\CyberSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="cyber-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'nama') ?>

    <?= $form->field($model, 'tgl_lahir') ?>

    <?= $form->field($model, 'jekel') ?>

    <?= $form->field($model, 'angkatan') ?>

    <?php // echo $form->field($model, 'id_divisi') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
