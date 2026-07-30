<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Benutzer $model */

$this->title = Yii::t('app', 'Update Benutzer: {firstname} {lastname}', [
    'firstname' => $model->firstname,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Benutzer'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->firstname . ' ' . $model->lastname, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="benutzer-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
