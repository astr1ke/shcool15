@extends('layouts.layouts')
@section('content')
<section id="main-slider" class="no-margin">
    <div class="carousel slide">
        <div class="carousel-inner">
            <div class="item active" style="background-image: url(images/main.jpg)">
                <div class="container">
                    <div class="row slide-margin">
                        <div class="col-sm-6">
                            <div class="carousel-content">
                                <h2 class="animation animated-item-1">Добро пожаловать <span>На сайт нашей школы</span></h2>
                                <p class="animation animated-item-2">Самой замечательной школы на земле :)</p>
                                <a class="btn-slide animation animated-item-3" href="/about">О нас</a>
                            </div>
                        </div>



                    </div>
                </div>
            </div>
            <!--/.item-->
        </div>
        <!--/.carousel-inner-->
    </div>
    <!--/.carousel-->
</section>
<!--/#main-slider-->

<div class="feature">
    <div class="container">
        <div class="text-center">
            <div class="col-md-3">
                <div class="hi-icon-wrap hi-icon-effect wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
                    <i class="fa fa-book"></i>
                    <h2>Чечин Сергей Юрьевич</h2>
                    <p>Директор школы. Самый главный чувак</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="hi-icon-wrap hi-icon-effect wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                    <i class="fa fa-laptop"></i>
                    <h2>Шматко Татьяна Ивановна</h2>
                    <p>Учитель иностранных языков и классный руководитель</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="hi-icon-wrap hi-icon-effect wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="900ms">
                    <i class="fa fa-heart-o"></i>
                    <h2>Иванова Наталья алексеевна</h2>
                    <p>Учитель русского языка и литературы.</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="hi-icon-wrap hi-icon-effect wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="1200ms">
                    <i class="fa fa-cloud"></i>
                    <h2>Смирнов Дмитрий Дмитриевич</h2>
                    <p>Учитель физкультуры и ОБЖ</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="about">
    <div class="container">
        <div class="col-md-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
            <h2>О нас</h2>
            <img src="images/6.jpg" class="img-responsive" />
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

<div class="lates">
    <div class="container">
        <div class="text-center">
            <h2>Последние новости</h2>
        </div>
        @foreach($articles as $article)
        <div class="col-md-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
            <?$txt=mb_strimwidth($article->text,0,300,'...');$txt=preg_replace ('/<img.*>/Uis', '', $txt);?> <!---  обрезаем колво символов для превью статей на главной --->
            <a href="/articleNews/{{$article->id}}?"><img  src="{{$article->pictures}}" class="img-responsive" />
            <h3>{{$article['articleName']}}</h3>
            <p>{!!$txt!!}
            </p></a>
        </div>
        @endforeach
    </div>
</div>

<section id="partner">
    <div class="container">
        <div class="center wow fadeInDown">
            <h2>Сайты образовательных организаций края</h2>
            <p>Ссылки на сайты образовательным учреждений и министерст <br> et dolore magna aliqua. Ut enim ad minim veniam</p>
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

<section id="conatcat-info">
    <div class="container">
        <div class="row">
            <div class="col-sm-8">
                <div class="media contact-info wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                    <div class="pull-left">
                        <i class="fa fa-phone"></i>
                    </div>
                    <div class="media-body">
                        <h2>Have a question or need a custom quote?</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation +0123 456 70 80</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/.container-->
</section>
<!--/#conatcat-info-->
@stop