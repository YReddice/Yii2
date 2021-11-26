<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Oghistorialscore */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="oghistorialscore-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'hSportsID')->textInput() ?>

    <?= $form->field($model, 'hSports')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'hSportsRecord')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
