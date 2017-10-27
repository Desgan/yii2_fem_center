<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel budyaga\users\models\ResultSummarySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Result Summaries');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="result-summary-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Create Result Summary'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>
<?php Pjax::begin(); ?>    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'LastName',
            'FirstName',
            'Patronymic',
            'DateBirth',
            // 'Nationality',
            // 'UniversityName',
            // 'Faculty',
            // 'Course',
            // 'ExpirianceWorkText',
            // 'ProSkill',
            // 'languageSkills',
            // 'OtherSkills',
            // 'NumPhone',
            // 'email:email',
            // 'MaritalStatus',
            // 'imgpath',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
<?php Pjax::end(); ?></div>
