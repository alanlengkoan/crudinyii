<h2>halaman <?= $page ?></h2>

<?php

use yii\bootstrap4\ActiveForm;
use yii\bootstrap4\Html;

$form = ActiveForm::begin(['id' => 'add-data']); ?>

<?= $form->field($model, 'judul') ?>

<?= $form->field($model, 'link') ?>

<?= $form->field($model, 'text')->textarea(['rows' => 6]) ?>

<div class="form-group">
    <?= Html::submitButton('Simpan', ['class' => 'btn btn-primary', 'name' => 'contact-button']) ?>
</div>

<?php ActiveForm::end(); ?>