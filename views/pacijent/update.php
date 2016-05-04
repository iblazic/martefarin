<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Pacijent */

$this->title = Yii::t('app', 'Izmjena podataka: ', [
    'modelClass' => 'Pacijent',
]) . $model->Ime   . $model->Prezime;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Pacijent'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->S_Pacijenta, 'url' => ['view', 'id' => $model->S_Pacijenta]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="pacijent-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
