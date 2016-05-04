<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Pacijent */

$this->title = $model->S_Pacijenta;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Pacijent'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pacijent-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->S_Pacijenta], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->S_Pacijenta], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
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
        ],
    ]) ?>

</div>
