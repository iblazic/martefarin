<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\KontrolaNalazTerapija */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="kontrola-nalaz-terapija-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'S_kontrole')->textInput() ?>

    <?= $form->field($model, 'Datum_kontrole')->textInput() ?>

    <?= $form->field($model, 'Datum_i_vrijeme_unosa_kontrole')->textInput() ?>

    <?= $form->field($model, 'Broj_nalaza')->textInput() ?>

    <?= $form->field($model, 'Datum_nalaza')->textInput() ?>

    <?= $form->field($model, 'INR')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Datum_i_vrijeme_unosa_nalaza')->textInput() ?>

    <?= $form->field($model, 'Shema')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Datum_i_vrijeme_unosa_terapije')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Unos') : Yii::t('app', 'Izmjena'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
