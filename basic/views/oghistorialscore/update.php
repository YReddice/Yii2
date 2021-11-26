<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Oghistorialscore */

$this->title = 'Update Oghistorialscore: ' . $model->hSportsID;
$this->params['breadcrumbs'][] = ['label' => 'Oghistorialscores', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->hSportsID, 'url' => ['view', 'id' => $model->hSportsID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="oghistorialscore-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
