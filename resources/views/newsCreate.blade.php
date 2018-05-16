<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Средняя школа №15</title>

    <!----------------------------------------- подключаем стили ------------------------------------------->

    <!-- подключаем boostrap -->
    <link href="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.css" rel="stylesheet">

    <script src="/modules/ckeditor/ckeditor.js"></script>
    <link href="{{asset('css/style.css')}}" rel="stylesheet" />
    <link href="{{asset('css/default.css')}}" rel="stylesheet" type="text/css" />



</head>



<body>
    <header>
            <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
                <div class="navigation">
                    <div class="container">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse.collapse">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <div class="navbar-brand">
                                <a href="/"><h1><span>Шко</span>ла №15</h1></a>
                            </div>
                        </div>

                        <div class="navbar-collapse collapse">
                            <div class="menu">
                                <ul class="nav nav-tabs" role="tablist">
                                    <li role="presentation"><a href="/" @if($_SERVER['REQUEST_URI'] == '/') class="active"@endif>Главная</a></li>
                                    <li role="presentation"><a href="/about" @if($_SERVER['REQUEST_URI'] == '/about') class="active"@endif>О нас</a></li>
                                    <li role="presentation"><a href="/news/1" @if(substr($_SERVER['REQUEST_URI'],0,6) == '/news/' or
                                                                      substr($_SERVER['REQUEST_URI'],0,6) == '/artic' ) class="active"@endif>Жизнь школы</a></li>
                                    <li role="presentation"><a href="/gallery" @if($_SERVER['REQUEST_URI'] == '/gallery') class="active"@endif>Наша Галерея</a></li>
                                    <li role="presentation"><a href="/learner" @if($_SERVER['REQUEST_URI'] == '/learner') class="active"@endif>Учителям</a></li>
                                    <li role="presentation"><a href="/contacts" @if($_SERVER['REQUEST_URI'] == '/contacts') class="active"@endif>Контакты</a></li>
                                    @if (!(Auth::check()))
                                        <li role="presentation"><a href="/login">Войти</a></li>
                                    @else
                                        <li role="presentation"><a href="/logout">Выйти</a></li>
                                    @endif


                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
    </header>

    <div class="content">
        <div class="wrapper">
                <!------- Список ошибок формы ------->
                @if (count($errors) > 0)
                        <div class="alert alert-danger">
                             <strong>Упс! Что-то пошло не так!</strong>
                             <br><br>
                             <ul>
                                @foreach ($errors->all() as $error)
                                      <li>{{ $error }}</li>
                                @endforeach
                             </ul>
                        </div>
                @endif

                <form id="form" class="blocks" action="/article" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <p><h3 id="ca">Создание статьи<br/><br/></h3></p>
                    <p>
                        <label>Заголовок:</label>
                        <input type="text" class="text" name="articleName" />
                    </p>
                    <p>
                        <label>Категория:</label>
                        <select class="sel" name="categorie" size="1">\
                            <? $i=0 ?>
                            @foreach($categorieSelect as $catSel)
                                @if($i==0)
                                    <option selected value='{{$catSel->categorie}}'>{{$catSel->categorie}}</option>
                                    <? $i++ ?>
                                @else
                                <option value='{{$catSel->categorie}}'>{{$catSel->categorie}}</option>
                                @endif
                            @endforeach
                        </select>
                    </p>
                    <br/>
                    <p class="area">
                        <textarea class="text" name="text" id="text" rows="10" cols="80">dfgdgdfgdfg</textarea>
                    </p>
                    <div>
                        <p>
                            <label id="lp">Фото на заголовок:</label>
                            <input id="img" type="file"  name="file">
                        </p>
                        <p>
                            <label id="lp1">Описание фото:</label>
                            <input type="text" class="text" name="description" />
                        </p>
                        <script>
                            CKEDITOR.replace('text')
                        </script>
                    </div>
                    <p>
                        <label>&nbsp;</label>
                        <input type="submit" class="btn" value="Отправить" />
                    </p>
                    <input type="hidden" name = "user" value="{{\Illuminate\Support\Facades\Auth::user()->name}}" />
                </form>
        </div>
    </div>

   @include('layouts.footer')

    <!-------------------------подключаем скрипты ---------------------------------------->
        <!--подключаем jquery -->

        <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
        <!-- подключаем bootstrap.js -->
        <script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.js"></script>







</body>

</html>
