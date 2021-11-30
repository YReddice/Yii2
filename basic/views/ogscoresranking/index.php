<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;

/* @var $this yii\web\View */
/* @var $searchModel app\models\OgscoresrankingSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '历届冬奥会奖牌榜查询';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ogscoresranking-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <?php  echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        //'filterModel' => $searchModel,
        'columns' => [
            'rID',
            'goldRank:ntext',
            'medalsRank:ntext',

            //['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
