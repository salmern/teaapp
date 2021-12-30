<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Teachers */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="teachers-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'teacher_id')->textInput() ?>

    <?= $form->field($model, 'teacher_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'teacher_address')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'teacher_mail')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'teacher_age')->textInput() ?>

    <?= $form->field($model, 'date_join')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
