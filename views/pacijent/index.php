<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Pacijent');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pacijent-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Unos Pacijenta'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'S_Pacijenta',
            'Ime:ntext',
            'Prezime:ntext',
            'OIB',
            'Spol',
            'Datum_rodenja',
            'Adresa:ntext',
            'Telefon:ntext',
            'Status:ntext',
            'Datum_i_vrijeme_unosa_pacijenta',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
