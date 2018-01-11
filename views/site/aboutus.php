<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;

use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;

?>

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
                        'label' => 'Наши Специальности','options'=>['id'=>'inside-list'], 'url' => ['/login'],
                        /*  'items' => [

                         /* ['label' => 'I ступень', 'url' => ['/login']],

                             ['label' => 'II ступень', 'url' => ['/login']],
                             ['label' => 'Практика', 'url' => ['/login']],
                         ]*/

                    ]
                    ) : (
                    [
                        'label' => 'Наши Специальности', 'options'=>['id'=>'inside-list'], 'url' => ['/site/ourspeciality'],

                       /* 'items' => [
                            ['label' => 'I ступень', 'url' => ['#']],

                            ['label' => 'II ступень', 'url' => ['#']],
                            ['label' => 'Практика', 'url' => ['#']],
                        ]*/

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
<section class="col-md-12 fon-about-myway paraxify">


<div class="container">


    <div class="col-md-12 ter-company">
        <h1>ОБЩАЯ ИНФОРМАЦИЯ</h1>

        <p><strong>Центр планирования и развития карьеры</strong>
            основной канал входа партнеров в ГрГУ им. Я. Купалы Факультет экономики и Управления.</p>
          <p><strong>  Миссия Центра </strong> – содействие трудоустройству, профессиональному развитию и карьерному росту студентов и выпускников ГрГУ им. Я. Купалы Факультета экономики и Управления на основе научного,
              информационного и делового сотрудничества с организациями-заказчиками кадров.</p>
        <p><strong>Целью </strong>деятельности Центра является повышение конкурентоспособности студентов и выпускников Факультета Экономики и Управления на рынке труда.</p>

       <div><img src="/web/images/structure/al.jpg" style="width:100%;margin: 20px 0px;"/></div>
        <p><strong>Задачи</strong></p>
        <ul>
       <li> формирование эффективной системы управления взаимоотношениями «ФЭУ – стратегические партнеры (предприятия и организации региона и республики)»;</li>
        <li>содержательное наполнение модели практико-ориентированного образования на основе разработки и реализации инновационно-образовательных траекторий обучающихся под заказ компаний-работодателей;</li>
        <li>содействие профильному трудоустройству выпускников ФЭУ в компаниях стратегических партнерах;</li>
        <li>обеспечение оперативной связи ФЭУ со стратегическими партнерами и формирование портфеля заказов на подготовку кадров экономического профиля.</li>
        </ul>

        <div><img src="/web/images/structure/mih.jpg" style="width:100%;margin: 20px 0px;"/></div>
        <p>В целях расширения долгосрочных контактов и повышения оперативности взаимодействия ГрГУ им. Я. Купалы с внешней средой разработан пакет документов для заключения договоров о сотрудничестве ГрГУ им. Я. Купалы со стратегическими партнерами. Он состоит из следующих типовых форм:</p>
        <ul>
        <li> договор о взаимодействии учреждения образования с организацией-заказчиком кадров при подготовке специалистов, рабочих, служащих;</li>

        <li> договор о сотрудничестве (рамочный договор);</li>

        <li> заявка на прохождение практики;</li>

        <li> заявка на прохождение стажировки студентов ГрГУ им. Я. Купалы;</li>

        <li> заявка на трудоустройство выпускников ГрГУ им. Я. Купалы.</li>
        </ul>



    <div class="col-md-12 block-btn">
        <h1>Наши платформы</h1>
        <div class="col-md-4">
            <a class="custom-btn" href="<?= yii\helpers\Url::to(['/site/employerterritory'])?>">
                <button class="btn btn-default btn-my"> Территория работодателя </button>
            </a>



        </div>
        <div class="col-md-4">
            <a class="custom-btn" href="<?= yii\helpers\Url::to(['/site/studentterritory'])?>">
                <button class="btn btn-default btn-my2"> Территория студента </button>
            </a>


        </div>
        <div class="col-md-4">
            <a class="custom-btn">
                <button class="btn btn-default btn-my3"> Территория выпускника  </button>
            </a>
        </div>
    </div>
    </div>
</div>
</section>