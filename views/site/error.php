<?php

/* @var $this yii\web\View */
/* @var $name string */
/* @var $message string */
/* @var $exception Exception */

use yii\helpers\Html;

$this->title = $name;
?>
<div class="site-error">
    <div class="container error-backgorund">
        <div class="text-error">
            <h1><?= Html::encode($this->title) ?></h1>

            <div class="alert alert-danger">
                <?= nl2br(Html::encode($message)) ?>
            </div>

            <p>
                Считаете произошла ошибка? Свяжитесь с нами! <div style="padding: 10px;"><a href="/">Вернуться на главную</a></div>
            </p>
        </div>
    </div>
</div>
