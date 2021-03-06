<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ParkingSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="parking-search">

    <?php $form = ActiveForm::begin([
        'action' => ['admin'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'location_id') ?>

    <?= $form->field($model, 'type') ?>

    <?= $form->field($model, 'number_of_parking_spots') ?>

    <?= $form->field($model, 'company_id') ?>

    <?php // echo $form->field($model, 'status') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
