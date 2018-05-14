@extends('layouts.layouts')
@section('content')


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
        <p>
            <label>Заголовок:</label>
            <input type="text" class="text" name="articleName" />
        </p>
        <p>
            <label>Описание:</label>
            <input type="text" class="text" name="description" />
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

        <p class="area">
            <label>Текст статьи:</label>
            <textarea class="text" name="text" id="text"></textarea>
        </p>
        <p>
            <label>Выберите файл</label>
            <input id="img" type="file"  name="file">
        </p>
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
@endsection

