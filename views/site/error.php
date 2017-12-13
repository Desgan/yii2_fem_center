<?php

/* @var $this yii\web\View */
/* @var $name string */
/* @var $message string */
/* @var $exception Exception */

use yii\helpers\Html;

$this->title = $name;

$text_eror = <<< CSS
 
div p { margin:0; }
#error:hover {  text-shadow: 0 0 80px #0077c1, 0 0 30px #171718, 0 0 6px #0077c1;margin-top: 30px; }
#code:hover { text-shadow: 0 0 100px red,0 0 40px FireBrick,0 0 8px DarkRed; }
#error {
  color: #fff;
      text-shadow: 0 0 80px #0077c1, 0 0 30px #171718, 0 0 6px #0077c1;
   font-size: 75px;
       margin-top: 30px;
        
}
#code{ font-size: 75px;    margin: 60px;}
#error span {
  animation: upper 11s linear infinite;
}
#code span:nth-of-type(2) {
  animation: lower 10s linear infinite;
}
#code span:nth-of-type(1) {
  text-shadow: none;
  opacity:.4;
}
@keyframes upper {
  0%,19.999%,22%,62.999%,64%, 64.999%,70%,100% {
    opacity:.99; text-shadow: 0 0 80px #ffffff,0 0 30px #008000,0 0 6px #0000ff;
  }
  20%,21.999%,63%,63.999%,65%,69.999% {
    opacity:0.4; text-shadow: none; 
  }
}
@keyframes lower {
  0%,12%,18.999%,23%,31.999%,37%,44.999%,46%,49.999%,51%,58.999%,61%,68.999%,71%,85.999%,96%,100% {
    opacity:0.99; text-shadow: 0 0 80px red,0 0 30px FireBrick,0 0 6px DarkRed;
  }
  19%,22.99%,32%,36.999%,45%,45.999%,50%,50.99%,59%,60.999%,69%,70.999%,86%,95.999% { 
    opacity:0.4; text-shadow: none; 
  }
}}

CSS;
//маркер конца строки, обязательно сразу, без пробелов и табуляции
$this->registerCss($text_eror);

?>
<div class="site-error paraxify">
    <div class="container error-backgorund">
        <div class="text-error">
            <?php if($exception-> statusCode == '404') :
                $this->title = "Где-то ошибка..."; ?>
                <link href='http://fonts.googleapis.com/css?family=Monoton' rel='stylesheet' type='text/css'>
                <h1>Упс..Такой страницы нет.</h1>

                <div style="    margin: 60px;">
                    <p id="error">E<span>r</span>ror</p>
                    <p id="code">4<span>0</span><span>4</span></p>
                </div>
                <div style="padding: 10px;"><a href="/">Вернуться на главную</a></div>
            <? endif; ?>
            <?php if($exception-> statusCode == '403') :?>

                <h1>У вас нет прав для просмотра данной страницы!</h1>

                <p id="error">E<span>r</span>ror</p>
                <p id="code">4<span>0</span><span>3</span></p>




                <div class="alert alert-danger">
                    <?= nl2br(Html::encode($message)) ?>
                </div>

                <p>
                    Считаете произошла ошибка? Свяжитесь с нами! <div style="padding: 10px;"><a href="/">Вернуться на главную</a></div>
                </p>
            <? endif;  ?>
            <?php if(!($exception-> statusCode == '403') && !($exception-> statusCode == '404')) :?>

            <p id="error">E<span>r</span>ror</p>





            <div class="alert alert-danger">
                <?= nl2br(Html::encode($message)) ?>
            </div>

            <p>
                Считаете произошла ошибка? Свяжитесь с нами! <div style="padding: 10px;"><a href="/">Вернуться на главную</a></div>
            </p>
            <? endif;  ?>
        </div>
    </div>
</div>
