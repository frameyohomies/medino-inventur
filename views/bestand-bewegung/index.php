<?php

use app\models\BestandBewegung;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\widgets\Pjax;
/** @var yii\web\View $this */
/** @var app\models\BestandBewegungSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = Yii::t('app', 'Bestand Bewegungs');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="bestand-bewegung-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'produkt_id',
            'benutzer_id',
            'delta',
            'bestand_nach',
            //'gebucht_am',
            [
                'class' => ActionColumn::className(),
                'template' => '{view}',
                'urlCreator' => function ($action, BestandBewegung $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
