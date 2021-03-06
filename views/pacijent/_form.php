<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Pacijent */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pacijent-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'S_Pacijenta')->textInput() ?>

    <?= $form->field($model, 'Ime')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'Prezime')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'OIB')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Spol')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Datum_rodenja')->textInput() ?>

    <?= $form->field($model, 'Adresa')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'Telefon')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'Status')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'Datum_i_vrijeme_unosa_pacijenta')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
