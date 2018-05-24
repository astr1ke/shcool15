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
    <link href="{{asset('css/header_block.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('css')}}/school.css?1517413835" rel="stylesheet"/>
    <link rel="stylesheet" href="{{asset('css')}}/bootstrap.css" />
    <link rel="stylesheet" href="{{asset('css')}}/nyroModal.css" media="all">

    <style type="text/css">
        .fld {
            background: whitesmoke;
            border-radius: 11px;
            padding: 10px;
            width: max-content;
            height: max-content;
        }
        .fld1 {
            background: whitesmoke;
            border-radius: 11px;
            padding: 10px;
            width: max-content;
            height: 80px;
        }
    </style>



</head>



<body>
@include('layouts.header')

<div class="content">
    <div class="wrapper">

        <p><h3 id="ca">Редактирование статьи<br/></h3></p>

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

        <form id="form" class="blocks" action="/articleEditRequest" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="fld">
                <p>
                    <label >Заголовок:</label>
                    <input type="text" class="text" name="articleName" value="{{$article->articleName}}"/>
                </p>
                <p>
                    <label >Категория:</label>
                    <select class="sel" name="categorie" size="1" >\
                        <? $i=0 ?>
                        @foreach($categorieSelect as $catSel)
                            @if($i==0 and $catSel->categorie == $article->categorie)
                                <option selected = "selected" value='{{$catSel->categorie}}'>{{$catSel->categorie}}</option>
                                <? $i++ ?>
                            @else
                                <option value='{{$catSel->categorie}}'>{{$catSel->categorie}}</option>
                            @endif
                        @endforeach
                    </select>
                </p>
            </div>
            <br/>
            <p class="area">
                <textarea class="text" name="text" id="text" rows="10" cols="80">{{$article->text}}</textarea>
            </p>
            <div class="fld1">
                <p>
                    <label id="lp">Фото для главной:</label>
                    <input id="img" type="file"  name="file">

                </p>
                <p>
                    <label id="lp"><input name="chkDel" type="checkbox"/> Удалить фото</label>
                </p>
            </div>
            <script>
                CKEDITOR.replace('text')
            </script>
            <p>
                <input style="margin-top: 10px " type="submit" class="btn" value="Редактировать" />
            </p>
            <input type="hidden" name = "user" value="{{\Illuminate\Support\Facades\Auth::user()->name}}" />
            <input type="hidden" name = "articleId" value="{{$article->id}}" />
        </form>
    </div>
</div>

@include('layouts.footer')

<!-------------------------подключаем скрипты ---------------------------------------->
<!--подключаем jquery -->
@include('layouts.scripts')
<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
<!-- подключаем bootstrap.js -->
<script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.js"></script>







</body>

</html>
