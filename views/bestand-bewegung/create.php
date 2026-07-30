<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\BestandBewegung $model */

$this->title = Yii::t('app', 'Create Bestand Bewegung');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Bestand Bewegungs'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="bestand-bewegung-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
