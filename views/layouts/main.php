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

$this->registerCss($hide_margin);



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
<?php

if (Yii::$app->user->can('administrator')):?>

    <?php
    $this->registerCssFile(' /web/css/admin_panel.css');
    $menu_admin = <<< JS

$(document).ready(function () {
 var trigger = $('.hamburger'),
 overlay = $('.overlay'),
 isClosed = false;

 trigger.click(function () {
 hamburger_cross(); 
 });

 function hamburger_cross() {

 if (isClosed == true) { 
 overlay.hide();
 trigger.removeClass('is-open');
 trigger.addClass('is-closed');
 isClosed = false;
 } else { 
 overlay.show();
 trigger.removeClass('is-closed');
 trigger.addClass('is-open');
 isClosed = true;
 }
 }
 
 $('[data-toggle="offcanvas"]').click(function () {
 $('#wrapper').toggleClass('toggled');
 }); 
});
JS;
    $this->registerJs($menu_admin);


    ?>

    <div id="wrapper">
        <div class="overlay"></div>

        <!-- Sidebar -->
        <nav class="navbar navbar-inverse navbar-fixed-top" id="sidebar-wrapper" role="navigation">
            <ul class="nav sidebar-nav" style="    width: 100%;">
                <li class="sidebar-brand">

                </li>
                <li>
                    <a href="<?=yii\helpers\Url::to(['/user/admin']) ?>">Пользователи</a>
                </li>
                <li>
                    <a href="<?=yii\helpers\Url::to(['/user/rbac']) ?>">Rbac Настройка</a>
                </li>
                <li>
                    <a href="<?=yii\helpers\Url::to(['/user/post/create']) ?>  ">Добавление Базы Знаний</a>
                </li>
                <li>
                    <a href="#">Team</a>
                </li>
               <!-- <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Works <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li class="dropdown-header">Dropdown heading</li>
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li><a href="#">Separated link</a></li>
                        <li><a href="#">One more separated link</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#">Services</a>
                </li>
                <li>
                    <a href="#">Contact</a>
                </li>
                <li>
                    <a href="#">Follow me</a>
                </li>-->
            </ul>
        </nav>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <button type="button" class="hamburger is-closed" data-toggle="offcanvas">
                <span class="hamb-top"></span>
                <span class="hamb-middle"></span>
                <span class="hamb-bottom"></span>
            </button>

        </div>
        <!-- /#page-content-wrapper -->

    </div>

    <?php endif;?>

<?php if (Yii::$app->user->isGuest):?>



<?php endif;?>

<?php
if (!Yii::$app->user->isGuest):?>

<header class="header-section">
    <?
NavBar::begin([
    'brandLabel' => '<img src="/images/logo_.png" style="max-width: 250px;margin-top: -7px;"/>',
    'brandUrl' => Yii::$app->homeUrl,
    'options' => [
        'class' => 'navbar navbar-default small-container ',
    ],
]);
echo Nav::widget([
    'options' => ['class' => 'nav navbar-nav '],
    'items' => [

        [
            'label' =>'Территория Работодателя',  'url' => ['/site/employerterritory'],'options'=>['id'=>'list1'],
            'items' => [
            ['label' => 'Профиль Работодателя', 'url' => ['/user/user/profile']],
                Yii::$app->user->isGuest ? (
                [
                    'label' => 'Информация о специальностях ФЭУ','options'=>['id'=>'inside-list'], 'url' => ['/login'],
                    'items' => [

                        ['label' => 'I ступень', 'url' => ['/login']],

                        ['label' => 'II ступень', 'url' => ['/login']],
                        ['label' => 'Практика', 'url' => ['/login']],
                    ]

                ]
                ) : (
                [
                    'label' => 'Информация о специальностях ФЭУ', 'options'=>['id'=>'inside-list'], 'url' => ['#'],

                    'items' => [
                        ['label' => 'I ступень', 'url' => ['#']],

                        ['label' => 'II ступень', 'url' => ['#']],
                        ['label' => 'Практика', 'url' => ['#']],
                    ]

                ]
                ),
                Yii::$app->user->isGuest ? (
                ['label' => 'Заявка на подготовку специалиста
', 'url' => ['/login']]
                ) : (
                ['label' => 'Заявка на подготовку специалиста
', 'url' => ['#']]
                ),


                Yii::$app->user->isGuest ? (
                [
                        'label' => 'Разместить Оферту', 'url' => ['/login'],'options'=>['id'=>'add-doc-emp'],
                    'items' => [

                        ['label' => 'Практика', 'url' => ['/login']],

                        ['label' => 'Трудоустройство', 'url' => ['/login']],

                    ]

                ]
                ) : (
                [
                        'label' => 'Разместить Оферту', 'url' => ['/user/offer/create'],'options'=>['id'=>'add-doc-emp'],
                    'items' => [

                        ['label' => 'Практика', 'url' => ['/user/offer/create']],

                        ['label' => 'Трудоустройство', 'url' => ['/user/job/create']],

                    ]

                ]
                ),
                ['label' => 'Распределение выпускников', 'url' => ['#']],
                ['label' => 'Филиалы кафедр', 'url' => ['#']],
                Yii::$app->user->isGuest ? (
                ['label' => 'База Резюме', 'url' => ['/login']]
                ) : (
                ['label' => 'База Резюме', 'url' => ['/user/summary/summary']]
                ),

                        ['label' => 'Добавить Компанию в каталог', 'url' => ['user/company/create']],

]
        ],
        [
            'label' =>'Территория Студента', 'url' => ['/site/studentterritory'],'options'=>['id'=>'list2'],
            'items' => [
                ['label' => 'Профиль Студента', 'url' => ['/user/user/profile']],
                ['label' => 'База знаний', 'url' => ['/user/post/index']],
                Yii::$app->user->isGuest ? (
                [
                    'label' => 'Поиск Вакансий','options'=>['id'=>'inside-list'], 'url' => ['/login'],
                    'items' => [

                        ['label' => 'Оферта Трудоустройства', 'url' => ['/login']],

                        ['label' => 'Оферта Практики', 'url' => ['/login']],
                    ]

                ]
                ) : (
                        [
                            'label' => 'Поиск Вакансий', 'options'=>['id'=>'inside-list'], 'url' => ['/user/job/jobs'],

                            'items' => [
                                ['label' => 'Оферта Трудоустройства', 'url' => ['/user/job/jobs']],

                                ['label' => 'Оферта Практики', 'url' => ['/user/offer/offer']],
                            ]

                        ]
                ),
                /*['label' => 'Практика/Стажировка', 'url' => ['#']],*/
                ['label' => 'Добавить Резюме', 'url' => ['/user/summary/create']],
                ['label' => 'Презентации Компаний', 'url' => ['/user/company/company']],
                ['label' => 'HR-консультация', 'url' => ['#']],
            ]
        ],
        [
            'label' =>'Территория Выпускника', 'url' => ['/site/territorygraduates'],'options'=>['id'=>'list3'],
            'items' => [
                Yii::$app->user->isGuest ? (
                ['label' => 'Поиск Вакансий', 'url' => ['/login']]
                ) : (
                ['label' => 'Поиск Вакансий', 'url' => ['/user/job/jobs']]
                ),
                ['label' => 'Добавить Резюме', 'url' => ['/user/summary/create']],
                ['label' => 'Презентации Компаний', 'url' => ['/user/company/company']],
                ['label' => 'Заявка о сотрудничестве', 'url' => ['#']],
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



      <!-- <ul class="nav navbar-nav navbar-right cart-menu">
            <li><a href="#" class="search-btn"><i class="fa fa-search" aria-hidden="true"></i></a></li>
            <li><a href="#"><span> Cart -$0&nbsp;</span> <span class="shoping-cart">0</span></a></li>
        </ul>-->

</header>
<?php endif;?>


<!-- Search form -->
<div class="main clearfix width-search" id="cl-search">

    <div class="column">
        <div id="sb-search" class="sb-search">
            <form>
                <input class="sb-search-input" placeholder="Введите поисковой запрос" type="text" value="" name="search" id="search">
                <input class="sb-search-submit" type="submit" value="">
                <span class="sb-icon-search "><i class="fa fa-search" aria-hidden="true"></i></span>
            </form>
        </div>
    </div>
</div>


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
                    <h1><span>Ц</span>ентр планирования и</h1>
                    <h1><span>Р</span>азвития карьеры</h1>

                    <p>

                        Если у Вас возникли вопросы по содержанию сайта,
                        обращайтесь по телефонам: 73-19-52, 73-19-72</p>
                    <div class="contact-info">

                        <p><b>Адрес:</b> Республика Беларусь, г. Гродно,  ул. Гаспадарчая, 23</p>
                        <p><b>Телефон:</b>+375 (152) 73-19-00, факс: +375 (152) 73-19-10</p>
                        <p><b>Email:</b> i.i.dorniak@gmail.com </p>
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
            <div class="col-md-12" style="padding: 10px;">
                <p class="center">Copyright © 2011-2017. Факультет экономики и управления.</p>

<p class="center">Учебная лаборатория "Информационные технологии в экономике и управлении"</p>

            </div>
        </div>
    </div>
    <p class="back-top"><a href="#"><b style="position: absolute;"></b><span></span></a><p>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>