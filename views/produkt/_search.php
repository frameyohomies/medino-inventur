<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\ProduktSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="produkt-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'name') ?>

    <?= $form->field($model, 'barcode') ?>

    <?= $form->field($model, 'standort') ?>

    <?= $form->field($model, 'quantitaet') ?>

    <?php // echo $form->field($model, 'mindestbestand') ?>

    <?php // echo $form->field($model, 'erstellt_am') ?>

    <?php // echo $form->field($model, 'aktualisiert_am') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
