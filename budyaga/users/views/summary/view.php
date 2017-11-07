<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model budyaga\users\models\ResultSummary */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Result Summaries'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="result-summary-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'LastName',
            'FirstName',
            'Patronymic',
            'DateBirth',
            'Nationality',
            'UniversityName',
            'Faculty',
            'Course',
            'ExpirianceWorkText',
            'ProSkill',
            'languageSkills',
            'OtherSkills',
            'NumPhone',
            'email:email',
            'MaritalStatus',
            'imgpath',
        ],
    ]) ?>

</div>
