<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\KontrolaNalazTerapija */

$this->title = Yii::t('app', 'Unos kontrole nalaza i terapije');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Kontrola Nalaz Terapija'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kontrola-nalaz-terapija-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
