<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Company-HTML Bootstrap theme</title>
    @include('layouts.stiles')
</head>

<body>
@include('layouts.header')
    <div class="container">
        <div class="row">
            <ol class="breadcrumb" itemscope itemtype="">
                <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a href="/" class="first" itemprop="item"><span itemprop="name">Главная</span><meta itemprop="position" content="1"></a></li>
                <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a itemprop="item"><span itemprop="name">О нас</span><meta itemprop="position" content="2"></a></li>
            </ol>
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









<div class="our-team">
    <div class="our-team">
        <div class="container">
            <h3>Наша команда</h3>
            <div class="text-center">

                    <div id="amazingcarousel-1" style="display:none;position:relative;width:100%;max-width:1040px;margin:0px auto 0px;">

                            <ul class="amazingcarousel-list">

                                <?
                                $teachers = \App\teacher::all();
                                ?>
                                @foreach($teachers as $teacher)
                                    <li class="amazingcarousel-item">
                                        <div class="col-md-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
                                            <img src="{{$teacher->foto}}" alt="">
                                            <h4>{{$teacher->FIO}}</h4>
                                            <p>{{$teacher->specialization}}</p>
                                        </div>
                                    </li>
                                @endforeach



                            </ul>
                            <div class="amazingcarousel-prev"></div>
                            <div class="amazingcarousel-next"></div>

                        <div class="amazingcarousel-nav"></div>
                        <div class="amazingcarousel-engine"><a href="http://amazingcarousel.com">JavaScript Image Carousel</a></div>
                    </div>

            </div>
        </div>
    </div>
</div>

@include('layouts.footer')
@include('layouts.scripts')


</body>

</html>