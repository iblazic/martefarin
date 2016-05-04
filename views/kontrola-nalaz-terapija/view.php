<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\KontrolaNalazTerapija */

$this->title = $model->S_kontrole;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Kontrola Nalaz Terapija'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kontrola-nalaz-terapija-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Izmjena'), ['update', 'id' => $model->S_kontrole], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Brisanje'), ['delete', 'id' => $model->S_kontrole], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('app', 'Sigurno želite izbrisati?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'S_kontrole',
            'Datum_kontrole',
            'Datum_i_vrijeme_unosa_kontrole',
            'Broj_nalaza',
            'Datum_nalaza',
            'INR',
            'Datum_i_vrijeme_unosa_nalaza',
            'Shema',
            'Datum_i_vrijeme_unosa_terapije',
        ],
    ]) ?>

</div>
