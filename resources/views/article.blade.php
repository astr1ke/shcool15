<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Company-HTML Bootstrap theme</title>

    <!-- подключаем boostrap -->
    <link href="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.css" rel="stylesheet">
    <!-- подключаем стили Summernote -->
    <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.7/summernote.css" rel="stylesheet">
    <link href="{{asset('css/style.css')}}" rel="stylesheet" />
    <link href="{{asset('css/default.css')}}" rel="stylesheet" type="text/css" />
</head>

<header>
        <div class="navigation">
            <div class="container">
                <div class="navbar-brand">
                    <a href="/"><h1><span>Шко</span>ла №15</h1></a>
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
</header>

<body>
<div class="wrapper">
    @if (count($errors) > 0)
        <!-- Список ошибок формы -->
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
            <textarea class="text" name="text" id="text"></textarea>
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
        </div>
        <p>
            <label>&nbsp;</label>
            <input type="submit" class="btn" value="Отправить" />
        </p>
        <input type="hidden" name = "user" value="{{\Illuminate\Support\Facades\Auth::user()->name}}" />

    </form>
        <!-- подключаем jquery -->
        <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
        <!-- подключаем bootstrap.js -->
        <script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.js"></script>
        <!-- подключаем сам summernote -->
        <script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.7/summernote.js"></script>
        <script>
            $(document).ready(function() {
                $('#text').summernote();
            });
        </script>
</div>
<footer>
    <div class="footer">
        <div class="container">
            <div class="social-icon">
                <div class="col-md-4">
                    <ul class="social-network">
                        <li><a href="#" class="fb tool-tip" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#" class="twitter tool-tip" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#" class="gplus tool-tip" title="Google Plus"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#" class="linkedin tool-tip" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="#" class="ytube tool-tip" title="You Tube"><i class="fa fa-youtube-play"></i></a></li>
                    </ul>
                </div>
            </div>

            <div class="col-md-4 col-md-offset-4">
                <div class="copyright">
                    &copy; Company Theme. All Rights Reserved.
                    <div class="credits">
                        <!--
                          All the links in the footer should remain intact.
                          You can delete the links only if you purchased the pro version.
                          Licensing information: https://bootstrapmade.com/license/
                          Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Company
                        -->
                        <a href="https://bootstrapmade.com/bootstrap-business-templates/">Bootstrap Business Templates</a> by <a href="https://bootstrapmade.com/">BootstrapMade</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="pull-right">
            <a href="#home" class="scrollup"><i class="fa fa-angle-up fa-3x"></i></a>
        </div>
    </div>

</body>

</html>
