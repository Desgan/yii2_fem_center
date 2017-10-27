<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model budyaga\users\models\ResultSummary */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="result-summary-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'LastName')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'FirstName')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Patronymic')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'DateBirth')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Nationality')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'UniversityName')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Faculty')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Course')->textInput() ?>

    <?= $form->field($model, 'ExpirianceWorkText')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ProSkill')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'languageSkills')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'OtherSkills')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'NumPhone')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'MaritalStatus')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'imgpath')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
