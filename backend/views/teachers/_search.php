<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\TeachersSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="teachers-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'teacher_id') ?>

    <?= $form->field($model, 'teacher_name') ?>

    <?= $form->field($model, 'teacher_address') ?>

    <?= $form->field($model, 'teacher_mail') ?>

    <?= $form->field($model, 'teacher_age') ?>

    <?php // echo $form->field($model, 'date_join') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
