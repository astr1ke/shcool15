<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Company-HTML Bootstrap theme</title>

    <-Подключаем стили Бутстрап->
    @include('layouts.stiles')

<!--Выбираем цвет фона сообщений и отступы поля-->
    <style type="text/css">
        .art {
            background: whitesmoke;
            border-radius: 11px;
        }
        .pict {
            margin-right: 10px;
        }
        .txt {
            margin-right: 30px;
        }
    </style>

</head>

<body>
    <div id="breadcrumb">
        <div class="container">
            <div class="breadcrumb">
                <li><a href="/">Главная</a></li>
                <li>Новости

                <? if(isset($c)){
                    echo("- $c");
                    }?>

                </li>
                @if($isAdmin==1)
                    <li><a href="/articles">Добавить статью</a></li>
                @endif
            </div>
        </div>
    </div>

    <section id="blog" class="container">
        <div class="blog">
            <div class="row">
                <div class="col-md-8">

                    @foreach($news as $n)
                        <div class="art">
                            <div class="blog-item">
                                <div class="row">

                                    <div class="col-xs-12 col-sm-2">
                                        <div class="entry-meta">
                                            <span id="publish_date">{{$n->created_at}}</span>
                                            <span><i class="fa fa-user"></i> <a href="#">{{$n->user}}</a></span>
                                            <span><i class="fa fa-comment"></i> <a href="#">{{count(\App\article::find($n['id'])->comments) .' коммент.'}}</a></span>
                                        </div>
                                    </div>

                                    <div class="col-xs-12 col-sm-10 blog-content">
                                        <h4>{{$n['articleName']}}</h4>
                                        <div class="pict">
                                            <a href="{{$n->pictures}}" ><img class="img-responsive img-blog" src="{{$n->pictures}}" width="100%" alt="" /></a>
                                        </div>

                                        <div class="txt">
                                            <?  $txt = preg_replace ('/<img.*>/Uis', '', $n->text);
                                                $txt = preg_replace('/\s{2,}/', '', $txt);
                                                $txt = mb_strimwidth($txt,0,300,'...');?> <!---  обрезаем колво символов для превью статей на главной --->
                                            <p>{!!$txt!!}</p>
                                        </div>

                                        <form action="/articleNews/{{$n->id}}" >
                                         <button class="btn btn-primary readmore value="Читать далее">Читать далее  <i class="fa fa-angle-right"></i></button>
                                        </form>
                                        @if (Auth::check() and Auth::user()->IsAdmin == 1)
                                        <form action="/articleDelete/{{$n->id}}" method="post" >
                                            {{ csrf_field() }}
                                            {{ method_field('DELETE') }}
                                            <button style="margin-left: 15px" class="btn btn-primary readmore value="Удалить статью">Удалить статью  </i></button>
                                        </form>
                                        @endif

                                        @if (Auth::check() and Auth::user()->IsAdmin == 1)
                                            <form action="/articleEdit/article/{{$n->id}}"  >
                                                  <button style="margin-left: 15px" class="btn btn-primary readmore value="Редактировать статью">Редактировать статью  </i></button>
                                            </form>
                                        @endif


                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach

                    <!--Пагинация(вывод строки с номерами страниц)-->
                    <ul class="pagination pagination-lg">
                        @if($id>1)
                            <li><a href="{{($id-1)}}"><i class="fa fa-long-arrow-left"></i>Предыдущая страница</a></li>
                        @endif
                        @for($i=1; !($i>$st);$i++)
                            @if($i==$id)
                                <li class="active"><a href="/news/{{$i}}">{{$i}}</a></li>
                            @else
                                <li><a href="/news/{{$i}}">{{$i}}</a></li>
                            @endif
                        @endfor
                        @if($id<$st)
                            <li><a href="{{($id+1)}}">Следующая страница<i class="fa fa-long-arrow-right"></i></a></li>
                        @endif
                    </ul>
                </div>


                <aside class="col-md-4">

                    <!--Поиск-->
                    <div class="widget search">
                        <form role="form">
                            <input type="text" class="form-control search_box" autocomplete="off" placeholder="Search Here">
                        </form>
                    </div>


                    <!-- Вывод последних коментариев сайта-->
                    <div class="widget categories">
                        <h3>Последние коментарии</h3>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="single_comments">

                                    <!-- Получение последних пяти коментариев -->
                                    <?
                                    $cmts = \App\Comment::all();
                                    $cmts = $cmts->slice(-5,5);
                                    ?>

                                    <!-- Вывод на экран названий статей и их комментариев-->
                                    @foreach($cmts as $cmt)
                                        <div  style="background: whitesmoke; border-radius: 11px; margin-top: 10px; padding: 5px 15px 5px 15px;">
                                            <img src="images/blog/avatar3.png" alt="" />
                                            <p><a href="/articleNews/{{$cmt->article->id}}">{{$cmt->text.'  -'. $cmt->article->articleName}}</a></p>
                                            <div class="entry-meta small muted">
                                                <span>Отправлено <a href="#">{{$cmt->name}}</a></span>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>



                    <!--Вывод категорий статей-->
                    <div class="widget categories">
                        <h3>Categories</h3>
                        <div class="row">
                            <div class="col-sm-6">
                                <ul class="blog_category">
                                    <li><a href="/news/1">Все</a></li>
                                    @foreach($categories as $categorie)
                                        <!--Получение колекции нужных статей -->
                                            <?
                                            $art = \App\article::where('categorie',$categorie->categorie)->get();
                                            var_dump($art->count());
                                            ?>
                                        <li><a href="<?
                                            if(($art->count())>0) {
                                                echo("/news/categories/$categorie->categorie/1");
                                            }
                                            ?>">{{$categorie->categorie}}</a></li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>


                    <!--------Галерея-------->
                    <div class="widget blog_gallery">
                        <h3>Our Gallery</h3>
                        <ul class="sidebar-gallery">
                            <li><a href="#"><img src="images/blog/gallery1.png" alt="" /></a></li>
                            <li><a href="#"><img src="images/blog/gallery2.png" alt="" /></a></li>
                            <li><a href="#"><img src="images/blog/gallery3.png" alt="" /></a></li>
                            <li><a href="#"><img src="images/blog/gallery4.png" alt="" /></a></li>
                            <li><a href="#"><img src="images/blog/gallery5.png" alt="" /></a></li>
                            <li><a href="#"><img src="images/blog/gallery6.png" alt="" /></a></li>
                        </ul>
                    </div>

                </aside>
            </div>
        </div>
    </section>

    @include('layouts.header')

    @yield('content');

    @include('layouts.footer')
    @include('layouts.scripts')

</body>

</html>
