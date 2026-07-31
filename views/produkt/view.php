<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\Produkt $model */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Produkts'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="produkt-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->id], [
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
            'id',
            'name',
            'barcode',
            'standort',
            'quantitaet',
            'mindestbestand',
            'erstellt_am',
            'aktualisiert_am',
        ],
    ]) ?>

    <?= Html::beginForm(['produkt/buchen', 'id' => $model->id], 'post') ?>
    <button type="button" onclick="mengeAnpassen(-1)">−</button>
    <?= Html::input('number', 'delta', $model->quantitaet, ['id' => 'delta-input']) ?>
    <button type="button" onclick="mengeAnpassen(1)">+</button>
    <?= Html::submitButton('Buchen') ?>
    <?= Html::endForm() ?>

    <script>
        function mengeAnpassen(richtung) {
            const feld = document.getElementById('delta-input');
            feld.value = parseInt(feld.value || 0) + richtung;
        }
    </script>

</div>
