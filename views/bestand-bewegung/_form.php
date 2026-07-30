<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\BestandBewegung $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="bestand-bewegung-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'produkt_id')->textInput() ?>

    <?= $form->field($model, 'benutzer_id')->textInput() ?>

    <?= $form->field($model, 'delta')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
