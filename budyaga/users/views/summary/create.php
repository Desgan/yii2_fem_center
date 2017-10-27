<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model budyaga\users\models\ResultSummary */

$this->title = Yii::t('app', 'Create Result Summary');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Result Summaries'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="result-summary-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
