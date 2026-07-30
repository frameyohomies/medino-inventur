<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Benutzer $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="benutzer-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'entra_oid')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'rolle')->dropDownList([ 'admin' => 'Admin', 'ordihilfe' => 'Ordihilfe', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'aktiv')->textInput() ?>

    <?= $form->field($model, 'erstellt_am')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
