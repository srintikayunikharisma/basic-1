<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Cyber */

$this->title = 'Create Cyber';
$this->params['breadcrumbs'][] = ['label' => 'Cybers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cyber-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
