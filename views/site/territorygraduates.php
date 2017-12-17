<?php
use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
?>



<div class="container">

    <div class="col-md-12 all-page">
        <?


        echo \yii\widgets\Breadcrumbs::widget([
            'itemTemplate' => "<li><i>{link}</i></li>\n", // template for all links
            'links' => [

                ['label' => 'Территория выпускника' ],

            ],
        ]);

        ?>
    <div class="col-md-12  ">
        <text>
            <h1>Уважаемые Выпускники</h1>

            <p><center><strong>Вас Приветсвует Гродненский государственный университет имени Янки Купалы!</strong></center></p>

            <strong>Центр карьеры предлагает Вам</strong>
            <ul>

                <li>text</li>

                <li>text</li>


            </ul>
        </text>



        <div class="col-md-12 block-btn">
            <h1>История  успеха</h1>
            <div class="col-md-4">
                <a class="custom-btn" href="<?= yii\helpers\Url::to(['/user/summary/create'])?>">
                    <button class="btn btn-default btn-my"> Создать резюме </button>
                </a>



            </div>
            <div class="col-md-4">
                <a class="custom-btn" href="<?= yii\helpers\Url::to(['/user/job/jobs'])?>">
                    <button class="btn btn-default btn-my2"> Доступные Вакансии</button>
                </a>


            </div>
            <div class="col-md-4">
                <a class="custom-btn" href="<?= yii\helpers\Url::to(['/user/offer/offer'])?>"  >
                    <button class="btn btn-default btn-my3"> Практика/стажировка </button>
                </a>
            </div>
        </div>
    </div>
</div>
</div>
</div>