<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model budyaga\users\models\ResultSummarySearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="result-summary-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'LastName') ?>

    <?= $form->field($model, 'FirstName') ?>

    <?= $form->field($model, 'Patronymic') ?>

    <?= $form->field($model, 'DateBirth') ?>

    <?php // echo $form->field($model, 'Nationality') ?>

    <?php // echo $form->field($model, 'UniversityName') ?>

    <?php // echo $form->field($model, 'Faculty') ?>

    <?php // echo $form->field($model, 'Course') ?>

    <?php // echo $form->field($model, 'ExpirianceWorkText') ?>

    <?php // echo $form->field($model, 'ProSkill') ?>

    <?php // echo $form->field($model, 'languageSkills') ?>

    <?php // echo $form->field($model, 'OtherSkills') ?>

    <?php // echo $form->field($model, 'NumPhone') ?>

    <?php // echo $form->field($model, 'email') ?>

    <?php // echo $form->field($model, 'MaritalStatus') ?>

    <?php // echo $form->field($model, 'imgpath') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
