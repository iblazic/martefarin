<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Pacijent */

$this->title = Yii::t('app', 'Unos Pacijenta');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Pacijent'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pacijent-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
