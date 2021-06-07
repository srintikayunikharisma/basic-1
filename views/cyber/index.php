<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\CyberSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Cybers';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cyber-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Cyber', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'nama',
            'tgl_lahir',
            'jekel',
            'angkatan',
            //'divisi',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
