<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Employee */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="employee-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Ime')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Prezime')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Zanimanje')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'firm_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
