<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\Jabatan;
use kartik\date\DatePicker;

/* @var $this yii\web\View */
/* @var $model app\models\Organisasi */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="organisasi-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nama')->textInput(['maxlength' => true]) ?>

    <?=$form->field($model, 'tgl_lahir')->widget(DatePicker::classname(), [
    'options' => ['placeholder' => 'Pilih Tanggal...'],
    'pluginOptions' => [
        'autoclose'=>true,
        'format' => 'yyyy-mm-dd'
    ]
    ]);?>

    <?= $form->field($model, 'jenis_kelamin')->radiolist(array('L'=> 'Laki-Laki','P'=> 'Perempuan'))->label('Jenis Kelamin') ?>

    <?= $form->field($model, 'alamat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'jabatan')->dropDownList(ArrayHelper::map(Jabatan::find()->all(),'id_jabatan' ,'jabatan'), ['prompt' => 'Pilih'])->label('Jabatan'); ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
