<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\PacijentSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pacijent-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'OIB') ?>

    <?php // echo $form->field($model, 'Datum_rodenja') ?>

    <?php // echo $form->field($model, 'Adresa') ?>

    <?php // echo $form->field($model, 'Telefon') ?>

    <?php // echo $form->field($model, 'Status') ?>

    <?php // echo $form->field($model, 'Datum_i_vrijeme_unosa_pacijenta') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
