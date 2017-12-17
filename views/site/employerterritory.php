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

                ['label' => 'Территория работодателя ' ],

            ],
        ]);

        ?>
    <div class="col-md-12 ">
        <text>
                    <h1>Уважаемые работодатели</h1>

                    <p><center><strong>Вас Приветсвует Гродненский государственный университет имени Янки Купалы!</strong></center></p>

                        <strong>Центр карьеры предлагает Вам</strong>
                        <ul>

                            <li>text</li>

                            <li>text</li>


                        </ul>
        </text>


        <div class="col-md-12 block-btn">
            <h1>Ваши возможности</h1>
            <div class="col-md-4">
                <?php

                if (Yii::$app->user->isGuest ):
                    ?>
                    <a class="custom-btn" href="<?= yii\helpers\Url::to(['/login'])?>">
                        <button class="btn btn-default btn-my"> Создать вакансию </button>
                    </a>
                <?php endif; ?>
                <?php

                if (!Yii::$app->user->isGuest  ):
                    ?>
                    <a class="custom-btn" href="<?= yii\helpers\Url::to(['/user/job/create'])?>">
                        <button class="btn btn-default btn-my"> Создать вакансию </button>
                    </a>
                <?php endif; ?>





            </div>
            <div class="col-md-4">

                <?php

                if (Yii::$app->user->isGuest ):
                ?>
                <a class="custom-btn" href="<?= yii\helpers\Url::to(['/login'])?>">
                    <button class="btn btn-default btn-my2"> Доступные Резюме</button>
                </a>
                <?php endif; ?>
                <?php

                if (!Yii::$app->user->isGuest  ):
                    ?>
                    <a class="custom-btn" href="<?= yii\helpers\Url::to(['/user/summary/summary'])?>">
                        <button class="btn btn-default btn-my2"> Доступные Резюме</button>
                    </a>
                <?php endif; ?>

            </div>
            <div class="col-md-4">
                <?php

                if (Yii::$app->user->isGuest ):
                    ?>
                    <a class="custom-btn" href="<?= yii\helpers\Url::to(['/login'])?>"  >
                        <button class="btn btn-default btn-my3">Разместить оферту </button>
                    </a>
                <?php endif; ?>
                <?php

                if (!Yii::$app->user->isGuest  ):
                    ?>
                    <a class="custom-btn" href="<?= yii\helpers\Url::to(['/user/offer/create'])?>"  >
                        <button class="btn btn-default btn-my3">Разместить оферту </button>
                    </a>
                <?php endif; ?>


            </div>
        </div>
    </div>
    </div>
</div>
</div>