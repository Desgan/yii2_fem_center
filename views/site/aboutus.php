<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
?>

<div style="margin-top: 20px;"></div>

<div class="container">


    <div class="col-md-12 ter-company">
        <h1>ОБЩАЯ ИНФОРМАЦИЯ</h1>

        <p><strong>Миссия Центра</strong> – содействие трудоустройству, профессиональному развитию и карьерному росту студентов и выпускников университета на основе научного, информационного и делового сотрудничества.</p>
       <div><img src="/web/images/structure/al.jpg" style="width:100%;margin: 20px 0px;"/></div>
        <p><strong>Задачи</strong></p>

        <p>Формирование в университете эффективной внутренней системы управления взаимоотношениями «ГрГУ им. Я. Купалы – стратегические партнеры (предприятия и организации региона и республики)» на основе создания и работы Центра профессиональной поддержки студентов и выпускников.</p>

        <p>Содействие профильному трудоустройству выпускников ГрГУ им. Я. Купалы в компаниях стратегических партнерах.</p>

        <p>Создание и поддержка электронной коммуникационной платформы для обеспечения оперативной связи ГрГУ им. Я. Купалы со стратегическими партнерами и формирования портфеля заказов ГрГУ им. Я. Купалы.</p>

        <p>Содержательное наполнение модели «практикоориентированное обучение в ГрГУ им. Я. Купалы» на основе разработки и реализации инновационно-образовательных траекторий студентов, магистрантов, слушателей под заказ компаний-работодателей.</p>
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