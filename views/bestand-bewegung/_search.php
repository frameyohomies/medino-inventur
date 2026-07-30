<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\BestandBewegungSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="bestand-bewegung-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'produkt_id') ?>

    <?= $form->field($model, 'benutzer_id') ?>

    <?= $form->field($model, 'delta') ?>

    <?= $form->field($model, 'bestand_nach') ?>

    <?php // echo $form->field($model, 'gebucht_am') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
