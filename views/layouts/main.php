<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
use app\assets\ltAppAsset;

AppAsset::register($this);
ltAppAsset::register($this);

$hide_margin = <<< CSS

.header-section{
margin-bottom:  0px;
}

CSS;
//маркер конца строки, обязательно сразу, без пробелов и табуляции
$this->registerCss($hide_margin);


$search_js = <<<JS
new UISearch( document.getElementById( 'sb-search' ) );
JS;
$this->registerJs($search_js);

?>
<?php $this->beginPage() ?>
<!doctype html>
<html class="no-js" lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <title><?= Html::encode($this->title) ?> </title>
    <meta name="description" content="">

    <link rel="icon" href="images/favicon.png">
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<!-- PRELOADER -->
<div id="preloader">
    <div class="preloader-area">
        <div class="preloader-box">
            <div class="preloader"></div>
        </div>
    </div>
</div>


<!--<section class="header-top-section">
    <div class="container">
        <div class="row">
            <div  class="col-md-6">
                <div class="header-top-content">
                    <ul class="nav nav-pills navbar-left">
                        <li><a href="#"><i class="pe-7s-call"></i><span>123-123456789</span></a></li>
                        <li><a href="#"><i class="pe-7s-mail"></i><span> info@mart.com</span></a></li>
                    </ul>
                </div>
            </div>
            <div  class="col-md-6">
                <div class="header-top-menu">
                    <ul class="nav nav-pills navbar-right">
                        <li><a href="/web/profile">Мой аккаунт</a></li>
                        <li><a href="/site/contact">Контакты</a></li>


                        <li><a href="/web/signup">Регистрация</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>-->
<header class="header-section">
<?php
NavBar::begin([
    'brandLabel' => '<img src="/images/logo.png" style="max-width: 250px"/>',
    'brandUrl' => Yii::$app->homeUrl,
    'options' => [
        'class' => 'navbar navbar-default small-container ',
    ],
]);
echo Nav::widget([
    'options' => ['class' => 'nav navbar-nav '],
    'items' => [
     //   ['label' => 'Главная', 'url' => ['/site/index']],
      //  ['label' => 'About', 'url' => ['/site/about']],
       //   ['label' => 'База знаний', 'url' => ['/site/dbknow']],
        [
            'label' =>'Территория Работодателя', 'url' => ['/site/about'],
            'items' => [
            ['label' => 'Профиль Работодателя', 'url' => ['/user/user/profile']],
                ['label' => 'Разместить Оферту', 'url' => ['#']],
                Yii::$app->user->isGuest ? (
                ['label' => 'Поиск Резюме', 'url' => ['/login']]
                ) : (
                ['label' => 'Поиск Резюме', 'url' => ['/user/summary/summary']]
                ),

                        ['label' => 'Добавить Компанию в катлог', 'url' => ['#']],
                ['label' => 'Разместить вакансию', 'url' => ['/user/job/create']],
]
        ],
        [
            'label' =>'Территория Студента', 'url' => ['/site/about'],
            'items' => [
                ['label' => 'Профиль Студента', 'url' => ['/user/user/profile']],
                ['label' => 'База знаний', 'url' => ['/user/post/index']],
                Yii::$app->user->isGuest ? (
                ['label' => 'Поиск Вакансий', 'url' => ['/login']]
                ) : (
                        [
                                'label' => 'Поиск Вакансий', 'url' => ['/user/job/jobs'],

                        ]
                ),
                ['label' => 'Практика/Стажировка', 'url' => ['#']],
                ['label' => 'Добавить Резюме', 'url' => ['/user/summary/create']],
                ['label' => 'Презентации Компаний', 'url' => ['/#']],
            ]
        ],
        [
            'label' =>'Территория Выпускника', 'url' => ['/site/about'],
            'items' => [
                Yii::$app->user->isGuest ? (
                ['label' => 'Поиск Вакансий', 'url' => ['/login']]
                ) : (
                ['label' => 'Поиск Вакансий', 'url' => ['/user/job/jobs']]
                ),
                ['label' => 'Добавить Резюме', 'url' => ['/user/summary/create']],
                ['label' => 'Презентации Компаний', 'url' => ['#']],
            ]
        ],
        ['label' => 'Регистрация', 'url' => ['/signup'], 'linkOptions'=>  ['class' => '']
        ],
        Yii::$app->user->isGuest ? (
        ['label' => 'Вход', 'url' => ['/login']]
        ) : (
            '<li>'
            . Html::beginForm(['/site/logout'], 'post')
            . Html::submitButton(
                'Выход (' . Yii::$app->user->identity->username.')',
                ['class' => 'btn btn-link logout']
            )
            . Html::endForm()
            . '</li> <a href="/web/user/user/profile" class="link-profile">  <i class="fa fa-user icon-profile" aria-hidden="true"></i></a>'
        )
    ],


]);

NavBar::end();
?>

    <!-- Search form -->
    <div class="main clearfix">

        <div class="column">
            <div id="sb-search" class="sb-search">
                <form>
                    <input class="sb-search-input" placeholder="Введите поисковой запрос" type="text" value="" name="search" id="search">
                    <input class="sb-search-submit" type="submit" value="">
                    <span class="sb-icon-search"><i class="fa fa-search" aria-hidden="true"></i></span>
                </form>
            </div>
        </div>
    </div>

      <!-- <ul class="nav navbar-nav navbar-right cart-menu">
            <li><a href="#" class="search-btn"><i class="fa fa-search" aria-hidden="true"></i></a></li>
            <li><a href="#"><span> Cart -$0&nbsp;</span> <span class="shoping-cart">0</span></a></li>
        </ul>-->

</header>


<section class="search-section">
    <div class="container">
        <div class="row subscribe-from">
            <div class="col-md-12">
                <form class="form-inline col-md-12 wow fadeInDown animated">
                    <div class="form-group">
                        <input type="email" class="form-control subscribe" id="email" placeholder="Search...">
                        <button class="suscribe-btn" ><i class="pe-7s-search"></i></button>
                    </div>
                </form><!-- end /. form -->
            </div>
        </div><!-- end of/. row -->
    </div><!-- end of /.container -->
</section><!-- end of /.news letter section -->

<?= $content ?>
<section class="contact-section">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="titie-section wow fadeInDown animated ">
                    <h1>Свяжитесь с нами</h1>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 wow fadeInLeft animated">
                <div class="left-content">
                    <h1><span>M</span>art</h1>
                    <h3>We'd love To Meet You In Person Or Via The Web!</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vel nulla sapien. Class aptent tacitiaptent taciti sociosqu ad lit himenaeos. Suspendisse massa urna, luctus ut vestibulum necs et, vulputate quis urna. Donec at commodo erat.</p>
                    <div class="contact-info">
                        <p><b>Адрес:</b> 123 Elm St. New York City, NY</p>
                        <p><b>Телефон:</b> 1.555.555.5555</p>
                        <p><b>Email:</b> info@yourdomain.com</p>
                    </div>
                    <div class="social-media">
                        <ul>
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-6 wow fadeInRight animated">
                <form action="" method="" class="contact-form">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="input-group">
                                <input type="text" class="form-control" id="name" placeholder="Ваше Имя">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="input-group">
                                <input type="text" class="form-control" id="name" placeholder="Ваш Email">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="input-group">
                                <input type="text" class="form-control" id="name" placeholder="Тема">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="input-group">
                                <input type="text" class="form-control" id="name" placeholder="Веб сайт">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="input-group">
                                <textarea name="" id="" class="form-control" cols="30" rows="5" placeholder="Ваше сообщение"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="input-group">
                                <input type="submit" class="contact-submit" value="Отправить" />
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <p class="center">Все права защищены</p>

            </div>
        </div>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>