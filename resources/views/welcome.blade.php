@extends('layouts.layouts')
@section('content')

    <!-- slider -->
    <div class="container-fluid">
        <div id="slider" class="row">
            <ul class="bxslider">
                <li>
                    <img src="images/main.jpg"/>
                </li>
            </ul>
        </div>
    </div>
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
                </div>
            @endforeach
        </div>
    </div>

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


@stop