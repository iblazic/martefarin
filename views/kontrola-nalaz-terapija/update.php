<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\KontrolaNalazTerapija */

$this->title = Yii::t('app', 'Izmjena {modelClass}: ', [
    'modelClass' => 'Kontrola Nalaz Terapija',
]) . $model->Datum_kontrole;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Kontrola Nalaz Terapija'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->S_kontrole, 'url' => ['view', 'id' => $model->S_kontrole]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Izmjena');
?>
<div class="kontrola-nalaz-terapija-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
