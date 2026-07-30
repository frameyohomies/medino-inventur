<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Produkt $model */

$this->title = Yii::t('app', 'Create Produkt');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Produkts'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="produkt-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
