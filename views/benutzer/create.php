<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Benutzer $model */

$this->title = Yii::t('app', 'Create Benutzer');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Benutzers'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="benutzer-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
