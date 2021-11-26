<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Oghistorialscore */

$this->title = 'Create Oghistorialscore';
$this->params['breadcrumbs'][] = ['label' => 'Oghistorialscores', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="oghistorialscore-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
