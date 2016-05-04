<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Kontrola Nalaz Terapija');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kontrola-nalaz-terapija-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Unos kontrole nalaza i terapije'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'S_kontrole',
            'Datum_kontrole',
            'Datum_i_vrijeme_unosa_kontrole',
            'Broj_nalaza',
            'Datum_nalaza',
            'INR',
            'Datum_i_vrijeme_unosa_nalaza',
            'Shema',
            'Datum_i_vrijeme_unosa_terapije',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
