<?php

/* @var $this yii\web\View */

$this->title = 'Центр Планирования и Развития Карьеры';

$slide_hover = <<< JS

$( ".slider-section" ).hover(
  function() {
    $( 'a.carousel-control.left').show("slow");
    $( 'a.carousel-control.right').show("slow");
  }, function() {
     $( 'a.carousel-control.left' ).hide(1000);
      $( 'a.carousel-control.right').hide(1000);
  }
);


	
			
		//play video	
	  setTimeout(function() {
    $('#myVideo')[0].play();//.attr('autoplay', 'autoplay');
}, 1000); 

	 $(function(){
	$(".typed").typed({
		strings: ["Developers.", "Designers.", "People."],
		// Optionally use an HTML element to grab strings from (must wrap each string in a <p>)
		stringsElement: null,
		// typing speed
		typeSpeed: 30,
		// time before typing starts
		startDelay: 1200,
		// backspacing speed
		backSpeed: 20,
		// time before backspacing
		backDelay: 500,
		// loop
		loop: true,
		// false = infinite
		loopCount: 5,
		// show cursor
		showCursor: false,
		// character for cursor
		cursorChar: "|",
		// attribute to type (null == text)
		attr: null,
		// either html or text
		contentType: 'html',
		// call when done callback function
		callback: function() {},
		// starting callback function before each string
		preStringTyped: function() {},
		//callback for every typed string
		onStringTyped: function() {},
		// callback for reset
		resetCallback: function() {}
	});
});
	
JS;
$this->registerJs($slide_hover);

?>
<?php
    if (Yii::$app->user->isGuest):
?>
        <div class="background-video-container">
            <video src="/web/video/feymyway.mp4" id="myVideo"   loop="loop"  autobuffer="" preload="auto" muted="muted">
                video not supported
            </video>


        </div>
<?php endif;?>
<?php
if (!Yii::$app->user->isGuest):
    ?>

<section class="slider-section " style="position: relative;">

    <div class="content-spec">
        <div class="field field-name-field-p-1-col-main field-type-text-long field-label-hidden"><div class="field-items"><div class="field-item even"><div class="hero">
                        <h3 class="hero-title">#BeaverNationWorks</h3>

                        <div class="typed-container">
                            <div id="typed-strings" style="display: none;">
                                <p><a href="#">explore my future.</a></p>
                                <p><a href="#">find a job or internship.</a></p>
                                <p><a href="#">hire a beaver.</a></p>
                                <p><a href="#">learn about Handshake.</a></p>
                            </div>
                            <span class="before-typed-string">I want to </span><span class="typed"></span>


                        </div>
                    </div>

                </div></div></div>
    </div>
    <div class="paraxify main-image-static">

    </div>


  <!--  <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">

        <ol class="carousel-indicators slider-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
        </ol>


        <div class="carousel-inner" role="listbox">
            <div class="item active"  style="    min-height: 600px;
    background-position: center center;
    background-repeat: no-repeat;
    background-image: url(/images/slider/s001.jpg);
    background-size: cover;">

                <div class="carousel-caption">
                    <h2>ЦЕНТР КАРЬЕРА</h2>
                    <h4 style="    color: #fff;">Содействие трудоустройству, профессиональному развитию и карьерному росту
                        студентов и выпускников факультета Экономики и Управления
                        на основе научного,  информационного и делового сотрудничества.</h4>
                    <a href="<?= yii\helpers\Url::to(['/site/aboutus'])?>">О нас</a>
                </div>
            </div>
            <div class="item" style="  min-height: 600px;
    background-position: center center;
    background-repeat: no-repeat;
    background-image: url(/images/slider/s002.jpg);
    background-size: cover;">

                <div class="carousel-caption">
                    <h2>НАЙДИТЕ РАБОТУ МЕЧТЫ

                       </h2>
                    <h4 style="    color: #fff;"> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys
                        standard dummy text ever since the 1500s.</h4>
                    <a href="<?= yii\helpers\Url::to(['/user/summary/create'])?>">Разместить резюме</a>
                </div>
            </div>
            <div class="item ">
                <img src="/images/slider/3.png" width="1648" height="600" alt="">
                <div class="carousel-caption">
                    <h2>ПРАКТИКА</h2>
                    <h4 style="    color: #fff;">Хочешь получить опыт работы? Не знаешь с чего начать?</h4>
                    <a href="<?= yii\helpers\Url::to(['/user/offer/offer']) ?>">Практика/стажировка</a>
                </div>
            </div>
        </div>


        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
            <span class="pe-7s-angle-left glyphicon-chevron-left" aria-hidden="true"></span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
            <span class="pe-7s-angle-right glyphicon-chevron-right" aria-hidden="true"></span>
        </a>
    </div>-->
</section>
<?php endif;?>



<section class="col-md-12" style="padding: 40px 0">
    <div class="container">
    <div field="text" class="t-text t-text_md ">
        <div style="text-align:center;" data-customstyle="yes"><span style="font-size: 30px;">
                              <strong>Как происходит оказание помощи в трудоустройстве?</strong>
                          </span><br></div>
    </div>
    <div class="t-container col-md-12 " style="padding: 40px 0">
        <div class="t073__col t-col col-md-4">
            <div class="t073__tablewrapper">
                <div class="t073__circlewrapper">
                    <div class=" circle t-title" field="number" style="background-color:#0077c1; color:#ffffff;">
                        <span>1</span>
                    </div>
                </div>
                <div class="t073__textwrapper">
                    <div class="t-title text-center" field="title">Регистрация</div>
                    <div class="t073__blockdescr t-text t-text_xs" field="descr">
                        Значимость этих проблем настолько очевидна, что укрепление и развитие структуры способствует подготовки и реализации форм развития. Задача организации, в особенности же укрепление и развитие структуры позволяет выполнять
                        важные задания по разработке новых предложений.
                    </div>
                </div>
            </div>
        </div>
        <div class="t073__col t-col col-md-4">
            <div class="t073__tablewrapper">
                <div class="t073__circlewrapper">
                    <div class="circle t-title " field="number2" style="background-color:#0077c1; color:#ffffff;">
                        <span> 2</span>
                    </div>
                </div>
                <div class="t073__textwrapper">
                    <div class=" t-title text-center" field="title2">Создание документа</div>
                    <div class="t073__blockdescr t-text t-text_xs" field="descr2">Значимость этих проблем настолько очевидна, что укрепление и развитие структуры способствует подготовки и реализации форм развития. Задача организации, в особенности же укрепление и развитие структуры позволяет выполнять важные задания по разработке новых предложений.
                      </div>
                </div>
            </div>
        </div>
        <div class="t073__col t-col col-md-4">
            <div class="t073__tablewrapper">
                <div class="t073__circlewrapper">
                    <div class="circle t-title" field="number3" style="background-color:#0077c1; color:#ffffff;">
                        <span> 3</span>

                    </div>
                </div>
                <div class="t073__textwrapper">
                    <div class=" t-title text-center" field="title3">
                        Трудоустройство
                    </div>
                    <div class="t073__blockdescr t-text t-text_xs" field="descr3">
                        Значимость этих проблем настолько очевидна, что укрепление и развитие структуры способствует подготовки и реализации форм развития. Задача организации, в особенности же укрепление и развитие структуры позволяет выполнять важные задания по разработке новых предложений.

                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>
<section class="container" style="    margin-bottom: 80px;">
    <div class="row">


            <div class="col-md-4 col-sm-6">

                <div class="effect eff-25">

                    <div class="overlay">
                        <span>Территория работодателя</span>
                        <div class="icon"></div>
                    </div>
                    <div class="flash flash-1"></div>
                    <div class="flash flash-2"></div>
                    <div class="flash flash-3"></div>
                    <div class="caption">
                        <h4>Территория работодателя</h4>
                        <p style="visibility: hidden"> Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut. </p>
                        <a class="btn btn-success my-btn" href="<?= yii\helpers\Url::to(['/site/employerterritory'])?>" title="Подробнее">Подробнее</a>
                    </div>
                </div>


            </div>
            <div class="col-md-4 col-sm-6">

            <div class="effect eff-26"  >

                <div class="overlay">
                    <span>Территория Студента</span>
                    <div class="icon"></div>
                </div>
                <div class="flash"></div>
                <div class="caption">
                    <h4>Территория Студента</h4>
                    <p style="visibility: hidden"> Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut. </p>
                    <a class="btn btn-success my-btn" href="<?= yii\helpers\Url::to(['/site/studentterritory'])?> " title="Подробнее">Подробнее</a>
                </div>
            </div>

            </div>

            <div class="col-md-4 col-sm-6">
            <div class="effect eff-27">

                <div class="overlay">
                   <span>Территория Выпускника</span>
                    <div class="icon"></div>
                </div>
                <div class="circle">
                    <div class="half-circle half-circle-left"></div>
                    <div class="half-circle half-circle-right"></div>
                </div>
                <div class="caption">
                    <h4>Территория Выпускника</h4>
                    <p style="visibility: hidden"> Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut. </p>
                    <a class="btn btn-success my-btn" href="<?= yii\helpers\Url::to(['/site/territorygraduates/'])?>" title="Подробнее">Подробнее</a>
                </div>
            </div>
            </div>


          <!--  <div class="col-md-4 col-sm-6">
                <div class="box">
                    <div class="pic">
                        <img src="/images/ter_pro.jpg" alt="Территория работодателя"/>
                    </div>

                    <div class="over-layer">
                        <h4 class="post">
                            <a href="<?= yii\helpers\Url::to(['/site/employerterritory'])?>">Территория Работодателя
                            <small>Подробнее</small></a>
                        </h4>

                    </div>
                </div>
            </div>

            <div class="col-md-4 col-sm-6">
                <div class="box">
                    <div class="pic">
                        <img src="/images/ter_stud.jpg" alt="Территория студента"/>
                    </div>

                    <div class="over-layer">
                        <h4 class="post">
                            <a href="<?= yii\helpers\Url::to(['/site/studentterritory'])?> ">Территория Студента
                            <small>Подробнее</small>
                            </a>
                        </h4>

                    </div>
                </div>
            </div>

            <div class="col-md-4 col-sm-6">
                <div class="box">
                    <div class="pic">
                        <img src="/images/ter_ofer.jpg" alt="Территория Выпускника"/>
                    </div>

                    <div class="over-layer">
                        <h4 class="post">
                            <a href="<?= yii\helpers\Url::to(['/site/territorygraduates/'])?>"> Территория Выпускника
                            <small>Подробнее</small>
                            </a>
                        </h4>

                    </div>
                </div>
            </div>-->
    </div>
</section>
<section class="service-section">
    <div class="container">
        <div style="text-align:center;padding: 50px 0px;" data-customstyle="yes"><span style="font-size: 30px;">
                              <strong>Наши преимущества</strong>
                          </span><br></div>
        <div class="row">
            <div class="col-md-3 col-sm-6 wow fadeInRight animated" data-wow-delay="0.1s">
                <div class="service-item">
                    <i class="pe-7s-settings"></i>
                    <h3>ЛЕГКО В ИСПОЛЬЗОВАНИИ</h3>

                </div>
            </div>
            <div class="col-md-3 col-sm-6 wow fadeInRight animated" data-wow-delay="0.2s">
                <div class="service-item">
                    <i class="pe-7s-safe"></i>
                    <h3>БОЛЬШАЯ БАЗА КОМПАНИЙ</h3>

                </div>
            </div>
            <div class="col-md-3 col-sm-6 wow fadeInRight animated" data-wow-delay="0.3s">
                <div class="service-item">
                    <i class="pe-7s-global"></i>
                    <h3>ДРУЖЕСТВЕННЫЕ ОТНОШЕНИЯ</h3>

                </div>
            </div>
            <div class="col-md-3 col-sm-6 wow fadeInRight animated" data-wow-delay="0.4s">
                <div class="service-item">
                    <i class="pe-7s-headphones"></i>
                    <h3>ВСЕГДА НА СВЯЗИ</h3>

                </div>
            </div>
        </div>
    </div>
</section>
<section class="new-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="titie-section wow fadeInDown animated ">
                    <h1>Наша Команда</h1>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 col-sm-6 wow fadeInLeft animated" data-wow-delay="0.2s">
                <div class="product-item">
                    <img src="/images/team/team1.jpg" class="img-responsive" width="255" height="322" alt="">
                    <div class="product-hover">
                        <div class="product-meta">

                            <a href="#">Подробнее</a>
                        </div>
                    </div>
                    <div class="product-title">
                            <h3>ФИО</h3>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 wow fadeInLeft animated" data-wow-delay="0.4s">
                <div class="product-item">
                    <img src="/images/team/team2.jpg" class="img-responsive" width="255" height="322" alt="">
                    <div class="product-hover">
                        <div class="product-meta">

                            <a href="#">Подробнее</a>
                        </div>
                    </div>
                    <div class="product-title">
                        <h3>ФИО</h3>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 wow fadeInLeft animated" data-wow-delay="0.6s">
                <div class="product-item">
                    <img src="/images/team/team3.jpg" class="img-responsive" width="255" height="322" alt="">
                    <div class="product-hover">
                        <div class="product-meta">

                            <a href="#">Подробнее</a>
                        </div>
                    </div>
                    <div class="product-title">
                        <h3>ФИО</h3>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 wow fadeInLeft animated" data-wow-delay="0.8s">
                <div class="product-item">
                    <img src="/images/team/team4.jpg" class="img-responsive" width="255" height="322" alt="">
                    <div class="product-hover">
                        <div class="product-meta">

                            <a href="#">Подробнее</a>
                        </div>
                    </div>
                    <div class="product-title">
                        <h3>ФИО</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="review-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="titie-section wow fadeInDown animated ">
                    <h1>Наши отзывы</h1>
                </div>
            </div>
        </div>
        <div class="row">
            <div id="feedback" class="carousel slide feedback" data-ride="feedback">
                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <img src="/images/member1.png" width="320" height="439" alt="">
                        <div class="carousel-caption">
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, </p>
                            <h3>- Olivia -</h3>
                            <span>Melbour, Aus</span>
                        </div>
                    </div>
                    <div class="item">
                        <img src="/images/member2.png" width="320" height="439" alt="">
                        <div class="carousel-caption">
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, </p>
                            <h3>- Olivia -</h3>
                            <span>Melbour, Aus</span>
                        </div>
                    </div>
                    <div class="item">
                        <img src="/images/member3.png" width="320" height="439" alt="">
                        <div class="carousel-caption">
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, </p>
                            <h3>- Olivia -</h3>
                            <span>Melbour, Aus</span>
                        </div>
                    </div>
                </div>
                <!-- Indicators -->
                <ol class="carousel-indicators review-controlar">
                    <li data-target="#feedback" data-slide-to="0" class="active">
                        <img src="/images/member1.png" width="320" height="439" alt="">
                    </li>
                    <li data-target="#feedback" data-slide-to="1">
                        <img src="/images/member2.png" width="320" height="439" alt="">
                    </li>
                    <li data-target="#feedback" data-slide-to="2">
                        <img src="/images/member3.png" width="320" height="439" alt="">
                    </li>
                </ol>
            </div>
        </div>
    </div>
</section>

<section class="news-letter-section">
    <div class="container">
        <div class="row col-row">
            <div class="col-xs-12 col-md-4">
                <h3 class="name-col">Количество  пользователей</h3>
                <div class="text">
                    <?php


                    echo $this->params['count_user'] ;
                    ?>

                </div>
            </div>
           <div class="col-xs-12 col-md-4">
                <h3 class="name-col">Количество резюме в банке</h3>
               <div class="text">
                    <?php


                        echo $this->params['count_summary'] ;
                    ?>

               </div>
           </div>
            <div class="col-xs-12 col-md-4">
                <h3 class="name-col">Количество вакансий в банке</h3>
                <div class="text">
                    <?php


                    echo $this->params['count_jobs'] ;
                    ?>

                </div>
            </div>
        </div><!-- end of/. row -->
    </div><!-- end of /.container -->
</section><!-- end of /.news letter section -->

<section class="client-section">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="titie-section wow fadeInDown animated ">
                    <h1>Наши партнеры</h1>
                </div>
            </div>
        </div>
        <div id="client" class="row owl-carousel owl-theme client-area">
            <div class="col-md-12 item">
                <a href="#">
                    <img src="/images/client_01.jpg" class="img-responsive" width="300" height="200" alt="">
                </a>
            </div>
            <div class="col-md-12 item">
                <a href="#">
                    <img src="/images/client_02.jpg" class="img-responsive" width="300" height="200" alt="">
                </a>
            </div>
            <div class="col-md-12 item">
                <a href="#">
                    <img src="/images/client_03.jpg" class="img-responsive" width="300" height="200" alt="">
                </a>
            </div>
            <div class="col-md-12 item">
                <a href="#">
                    <img src="/images/client_04.jpg" class="img-responsive" width="300" height="200" alt="">
                </a>
            </div>
            <div class="col-md-12 item">
                <a href="#">
                    <img src="/images/client_01.jpg" class="img-responsive" width="300" height="200" alt="">
                </a>
            </div>
            <div class="col-md-12 item">
                <a href="#">
                    <img src="/images/client_02.jpg" class="img-responsive" width="300" height="200" alt="">
                </a>
            </div>
            <div class="col-md-12 item">
                <a href="#">
                    <img src="/images/client_03.jpg" class="img-responsive" width="300" height="200" alt="">
                </a>
            </div>
            <div class="col-md-12 item">
                <a href="#">
                    <img src="/images/client_04.jpg" class="img-responsive" width="300" height="200" alt="">
                </a>
            </div>
        </div>
        <div class="customNavigation works-navigation">
            <a class="btn-work works-prev"><i class="pe-7s-angle-left"></i></a>
            <a class="btn-work works-next"><i class="pe-7s-angle-right"></i></a>
        </div><!-- end of /.client navigation -->
    </div>
</section>

<section class="news-section">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="titie-section wow fadeInDown animated ">
                    <h1>Последнее новости</h1>
                </div>
            </div>
        </div>
        <div class="row" >
            <div class="col-sm-4 wow fadeInDown animated" data-wow-delay="0.2s">
                <div class="blog-item">
                    <a href="#"><img src="/images/blog1.jpg" width="350" height="262" alt=""></a>
                    <h3>Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean </h3>
                    <p>Nam nec tellus a odio tincidunt auc. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt</p>
                    <a href="#">Читать дальше</a>
                </div>
            </div>
            <div class="col-sm-4 wow fadeInDown animated" data-wow-delay="0.4s">
                <div class="blog-item">
                    <a href="#"><img src="/images/blog2.jpg" width="350" height="262" alt=""></a>
                    <h3>Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean </h3>
                    <p>Nam nec tellus a odio tincidunt auc. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt</p>
                    <a href="#">Читать дальше</a>

                </div>
            </div>
            <div class="col-sm-4 wow fadeInDown animated" data-wow-delay="0.6s">
                <div class="blog-item">
                    <a href="#"><img src="/images/blog3.jpg" width="350" height="262" alt=""></a>
                    <h3>Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean </h3>
                    <p>Nam nec tellus a odio tincidunt auc. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt</p>
                    <a href="#">Читать дальше</a>
                </div>
            </div>
        </div>
    </div>
</section>



