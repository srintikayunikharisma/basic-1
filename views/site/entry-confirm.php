<?php
use yii\helpers\Html;
?>
<p>Terimakasih sudah menginputkan form: </p>
<ul>
<li><label>Nama</label>:<?=HTML::encode($model->Name)?></li>
<li><label>Email</label>:<?=HTML::encode($model->email)?></li>
<li><label>Notelp</label>:<?=HTML::encode($model->notelp)?></li>
<li><label>Alamat</label>:<?=HTML::encode($model->alamat)?></li>
</ul>