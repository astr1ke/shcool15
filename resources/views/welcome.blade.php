<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=1024">
    <title>Company-HTML Bootstrap theme</title>

    <link href="{{asset('css/style.css')}}" rel="stylesheet" />
    <link href="{{asset('css/header_block.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('css')}}/school.css?1517413835" rel="stylesheet"/>
    <link rel="stylesheet" href="{{asset('css')}}/bootstrap.css" />
    <link rel="stylesheet" href="{{asset('css')}}/nyroModal.css" media="all">
    <link rel="stylesheet" href="{{asset('css')}}/jquery.bxslider.css" />
    <link rel="stylesheet" href="{{asset('css')}}/slider.css" media="all">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu:400,500,700,300" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="{{asset('css')}}/footer_block.css" media="all">
    <link rel="stylesheet" href="{{asset('css')}}/wpModal.css" media="all">
    <script>/*IE*/if( 1-'\0' ) document.write('<link rel="stylesheet" href="/assets/css/ie.css">');</script>

    <style>
        .wp-teachers .item-slider-wrapper .item-slider-row .name {height: 48px; overflow: hidden;}
        /* video banner */
        .video-banner {
            position: relative;
            width: 100%;
            height: 100%;
        }
        .video-banner__video {
            width: 100%;
        }
        .video-banner__control {
            position: absolute;
            left: 80px;
            display: block;
            border-radius: 0;
            border: 2px solid #fff;
            background: rgba(0,0,0,0.7) url("http://school.wunderpark.ru/assets/uploads/videobanner/volume-mute.svg") 10px center no-repeat;
            background-size: 35px;
            color: #fff;
            padding: 15px 10px 15px 60px;
            font-size: 20px;
            z-index: 1;
            opacity: 0;
            -webkit-transition: opacity 0.4s;
            transition: opacity 0.4s;
        }
        .video-banner__control.on {
            background-image: url("http://school.wunderpark.ru/assets/uploads/videobanner/volume-medium.svg");
        }
        .video-banner:hover .video-banner__control {
            opacity: 1;
        }

        @media (min-width: 1541px) and (max-width: 1705px) {
            .video-banner__control {
                top: 360px;
            }
        }
        @media (min-width: 1330px) and (max-width: 1540px) {
            .video-banner__control {
                top: 310px;
            }
        }
        @media (min-width: 300px) and (max-width: 1330px) {
            .video-banner__control {
                top: 230px;
            }
        }

    </style>

</head>

<body>

@include('layouts.header')

<!-- slider -->
<div class="container-fluid">
    <div id="slider" class="row">
        <ul class="bxslider">
            <li>
                <img src="images/main.jpg"/>
            </li>
        </ul>
    </div>
<<<<<<< HEAD
</div>

    <!-- Учителя  -->
<div class="container">
    <div class="wp-teachers row">
        <div class="wp-widget section-title-1 uppercase">
            Наши педагоги
            <a class="int-link" href="/teachers">ВСЕ ПЕДАГОГИ</a>
            <a class="int-question question nyroModal" href="/ajax/question">Задать вопрос?</a>
        </div>
        <div class="item-slider-wrapper">
            <div class="item-slider">
                <div class="item-slider-row">
                    <div class="col-md-3 col-xs-6">
                        <a href="/teachers/victoria-rudenko">
                            <span class="img-border-circle"><img src="/images/logo.jpg"/></span>
                            <div class="section-title-2 name">Виктория Николаевна Руденко</div>
                            <div class="job-title">Директор школы</div>
                        </a>
                    </div>
                    <div class="col-md-3 col-xs-6">
                        <a href="/teachers/tatyana-valerievna-chernova">
                            <span class="img-border-circle"><img src="/images/logo.jpg"/></span>
                            <div class="section-title-2 name">Татьяна Валерьевна Чернова</div>
                            <div class="job-title">Заместитель директора по учебно-воспитательной работе</div>
                        </a>
                    </div>
                    <div class="col-md-3 col-xs-6">
                        <a href="/teachers/douglas-clementson">
                            <span class="img-border-circle"><img src="/images/logo.jpg"/></span>
                            <div class="section-title-2 name">Douglas Clementson</div>
                            <div class="job-title">Классный руководитель Year 4, 5</div>
                        </a>
                    </div>
                    <div class="col-md-3 col-xs-6">
                        <a href="/teachers/elena-anatolievna-krupchikova">
                            <span class="img-border-circle"><img src="/images/logo.jpg"/></span>
                            <div class="section-title-2 name">Елена Анатольевна Крупчикова</div>
                            <div class="job-title">Классный руководитель Year 5 </div>
                        </a>
                    </div>
                </div>
                <div class="item-slider-row">
                    <div class="col-md-3 col-xs-6">
                        <a href="/teachers/nina-aleksandrovna-kruglova">
                            <span class="img-border-circle"><img src="/images/logo.jpg"/></span>
                            <div class="section-title-2 name">Нина Александровна Круглова</div>
                            <div class="job-title">Классный руководитель Year 4</div>
                        </a>
                    </div>
                    <div class="col-md-3 col-xs-6">
                        <a href="/teachers/daniel-lundin">
                            <span class="img-border-circle"><img src="/images/logo.jpg"/></span>
                            <div class="section-title-2 name">Daniel Lundin</div>
                            <div class="job-title">Классный руководитель Year 3</div>
                        </a>
                    </div>
=======
<!--Последние новости-->
    <div class="lates">
        <div class="container">
            <div class="text-center">
                <h2>Последние новости</h2>
            </div>
            @foreach($articles as $article)
                <div class="col-md-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
                <?
                $txt=$article->text;
                $txt=preg_replace ('/<img.*>/Uis', '', $txt);
                $txt=preg_replace ('/<img[^>]*?src=\"(.*)\"/iU', '', $txt);
                $txt=strip_tags($txt, '<br>');
                $txt=mb_strimwidth($txt,0,300,'...');
                ?> <!---  обрезаем колво символов для превью статей на главной --->
                    <a href="/articleNews/{{$article->id}}?"><img  src="{{$article->pictures}}" class="img-responsive" />
                        <h3>{{$article['articleName']}}</h3></a>
                        <p>{!!$txt!!}</p>
>>>>>>> 2eb600a
                </div>
            @endforeach
        </div>
    </div>


    <!-- О нас -->

<div class="about">
    <div class="container">
        <div class="col-md-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
            <h2>О нас</h2>
            <img src="images/about.jpg" class="img-responsive" />
            <p>Учебное заведение находится по адресу: Краснодарский край, Успенский район,
                село Коноково, улица Донская,5.
            </p>
        </div>

        <div class="col-md-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
            <h2><br/></h2>

            <p>Школа за время своего существования прошла путь от малокомплектной начальной до средней общеобразовательной.</p>
            <p>С 01. 09. 1999 школа стала средним общеобразовательным учреждением в соответствии с постановлением Главы
                Администрации Успенского района Краснодарского края №386 от 21.06.99 «О реорганизации Коноковской основной
                общеобразовательной школы №15 в среднюю общеобразовательную школу».
            <p>В 2008-2009 учебном году на основании постановления Главы Администрации Успенского района школа получила
                статус основной общеобразовательной.  Руководили школой за это время: Бондина Лидия Степановна,
                Бондин Михаил Титович, Пысь Михаил Прохорович, Щербинин Григорий Петрович, Хевсоков Роман Михайлович,
                Петрашов Федор Анатольевич, Фисунова Ирина Юрьевна .
            </p>
            <p>Каждый из них внес свою лепту в развитие школы. В настоящее время директором МБОУООШ №15
                является Сергей Юрьевич Чечин.  </p>
        </div>
    </div>
</div>

<!--Карусель учителя-->
<div id="amazingcarousel-container-1">
    <div id="amazingcarousel-1" style="display:none;position:relative;width:100%;max-width:1040px;margin:0px auto 0px;">
        <div class="amazingcarousel-list-container">
            <ul class="amazingcarousel-list">

                <?
                $teachers = \App\teacher::all();
                ?>
                @foreach($teachers as $teacher)
                <li class="amazingcarousel-item">
                    <div class="col-md-31 col-xs-61">
                        <a href="/teachers">
                            <span class="img-border-circle"><img src="{{$teacher->foto}}"/></span>
                            <div class="section-title-2 name">{{$teacher->FIO}}</div>
                            <div class="job-title">{{$teacher->specialization}}</div>
                        </a>
                    </div>
                </li>
                @endforeach



            </ul>
            <div class="amazingcarousel-prev"></div>
            <div class="amazingcarousel-next"></div>
        </div>
        <div class="amazingcarousel-nav"></div>
        <div class="amazingcarousel-engine"><a href="http://amazingcarousel.com">JavaScript Image Carousel</a></div>
    </div>
</div>

<!--Партнерские ресурсы-->
<section id="partner">
    <div class="container">
        <div class="center wow fadeInDown">
            <h2>Ссылки на другие образовательные ресурсы</h2>
            <p>Если Вас интересует другая информация по образовательной тематике вы можете поискать ее на преставленных ниже серурсах: <br>  </p>
        </div>

        <div class="partners">
            <ul>
                <li> <a href="#"><img class="img-responsive wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms" src="images/partners/partner1.png"></a></li>
                <li> <a href="#"><img class="img-responsive wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms" src="images/partners/partner2.png"></a></li>
                <li> <a href="#"><img class="img-responsive wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="900ms" src="images/partners/partner3.png"></a></li>
                <li> <a href="#"><img class="img-responsive wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="1200ms" src="images/partners/partner4.png"></a></li>
                <li> <a href="#"><img class="img-responsive wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="1500ms" src="images/partners/partner5.png"></a></li>
            </ul>
        </div>
    </div>
    <!--/.container-->
</section>
<!--/#partner-->

<<<<<<< HEAD
<section id="conatcat-info">
    <div class="container">
        <div class="row">
            <div class="col-sm-8">
                <div class="media contact-info wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                    <div class="pull-left">
                        <i class="fa fa-phone"></i>
                    </div>
                    <div class="media-body">
                        <h2>У вас есть вопросы к нам?</h2>
                        <p>Вы можете отправить сообщение нам на почту Mail-shcool15@mail.ru или посзонить по номеру телефона +7 (86140) 67251</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/.container-->
</section>
<!--/#conatcat-info-->

@include('layouts.footer')

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js" type="text/javascript"></script>
<script type="text/javascript" src="{{asset('js')}}/school.js"></script>
<script type="text/javascript" src="{{asset('js')}}/jquery.maskedinput.min.js"></script>
<script type="text/javascript" src="{{asset('js')}}/jquery.nyroModal.custom.min.js"></script>
<script type="text/javascript" src="{{asset('js')}}/jquery.bxslider.min.js"></script>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script type="text/javascript" src="{{asset('js')}}/jquery.wpModal.js"></script>

<script src="//ulogin.ru/js/ulogin.js"></script>

<script>
    $(document).ready(function(){
        $('.bxslider').bxSlider({
            mode: 'fade',
            auto: true,
            controls: false,
            pause: 5000
        });
        $('.item-slider').bxSlider({
            controls: true,
            pager: false
        });

        $('#EduCalcAge').focus(function(){
            if ($(this).val() < 1) $(this).val('');
        });
        $('#EduCalcAge').blur(function(){
            if ($(this).val() < 1) $(this).val(0);
        });

        $video = $(".video-banner__video");
        $("#video-mute").click( function (){
            textOn = $(this).data('text-on');
            textOff = $(this).data('text-off');
            if( $video.prop('muted') ) {
                $video.prop('muted', false);
                $(this).addClass('on').text(textOff);
            } else {
                $video.prop('muted', true);
                $(this).removeClass('on').text(textOn);
            }
        });

        $('.bx-pager .bx-pager-item + .bx-pager-item a').click(function(){
            $video[0].pause();
        });
        $('.bx-pager .bx-pager-item:first-child a').click(function(){
            $video[0].play();
        });
    });
</script>
</body>
</html>
=======

@stop
>>>>>>> 2eb600a
