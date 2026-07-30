<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Produkt $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="produkt-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'barcode')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'standort')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'quantitaet')->textInput() ?>

    <?= $form->field($model, 'mindestbestand')->textInput() ?>

    <?= $form->field($model, 'erstellt_am')->textInput() ?>

    <?= $form->field($model, 'aktualisiert_am')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
