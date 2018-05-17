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
                <li>Новости</li>
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
                                            <span id="publish_date">{{$n['created_at']}}</span>
                                            <span><i class="fa fa-user"></i> <a href="#">{{$n['user']}}</a></span>
                                            <span><i class="fa fa-comment"></i> <a href="#">2 Comments</a></span>
                                            <span><i class="fa fa-heart"></i><a href="#">56 Likes</a></span>
                                        </div>
                                    </div>

                                    <div class="col-xs-12 col-sm-10 blog-content">
                                        <h4>{{$n['articleName']}}</h4>
                                        <div class="pict">
                                            <a href="{{$n['pictures']}}" ><img class="img-responsive img-blog" src="{{$n['pictures']}}" width="100%" alt="" /></a>
                                        </div>

                                        <div class="txt">
                                            <?$txt=mb_strimwidth($n['text'],0,300,'...');$txt=preg_replace ('/<img.*>/Uis', '', $txt);?> <!---  обрезаем колво символов для превью статей на главной --->
                                            <p>{!!$txt!!}</p>
                                        </div>

                                        <form action="/articleNews/{{$n['id']}}" >
                                         <button class="btn btn-primary readmore value="Читать далее">Читать далее  <i class="fa fa-angle-right"></i></button>
                                        </form>
                                        @if (Auth::check() and Auth::user()->IsAdmin == 1)
                                        <form action="/articleDelete/{{$n['id']}}" method="post" >
                                            {{ csrf_field() }}
                                            {{ method_field('DELETE') }}
                                            <button style="margin-left: 15px" class="btn btn-primary readmore value="Удалить статью">Удалить статью  </i></button>
                                        </form>
                                        @endif

                                        @if (Auth::check() and Auth::user()->IsAdmin == 1)
                                            <form action="/articleEdit/article/{{$n['id']}}"  >
                                                  <button style="margin-left: 15px" class="btn btn-primary readmore value="Редактировать статью">Редактировать статью  </i></button>
                                            </form>
                                        @endif


                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach

                    <!--/.blog-item-->
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
                    <!--/.pagination-->
                </div>
                <!--/.col-md-8-->

                <aside class="col-md-4">
                    <div class="widget search">
                        <form role="form">
                            <input type="text" class="form-control search_box" autocomplete="off" placeholder="Search Here">
                        </form>
                    </div>
                    <!--/.search-->

                    <div class="widget categories">
                        <h3>Recent Comments</h3>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="single_comments">
                                    <img src="images/blog/avatar3.png" alt="" />
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do </p>
                                    <div class="entry-meta small muted">
                                        <span>By <a href="#">Alex</a></span>
                                    </div>
                                </div>
                                <div class="single_comments">
                                    <img src="images/blog/avatar3.png" alt="" />
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do </p>
                                    <div class="entry-meta small muted">
                                        <span>By <a href="#">Alex</a></span>
                                    </div>
                                </div>
                                <div class="single_comments">
                                    <img src="images/blog/avatar3.png" alt="" />
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do </p>
                                    <div class="entry-meta small muted">
                                        <span>By <a href="#">Alex</a></span>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!--/.recent comments-->


                    <div class="widget categories">
                        <h3>Categories</h3>
                        <div class="row">
                            <div class="col-sm-6">
                                <ul class="blog_category">
                                    <li><a href="#">Все</a></li>
                                    @foreach($categories as $categorie)
                                        <li><a href="#">{{$categorie->categorie}}</a></li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!--/.categories-->

                    <div class="widget archieve">
                        <h3>Archieve</h3>
                        <div class="row">
                            <div class="col-sm-12">
                                <ul class="blog_archieve">
                                    <li><a href="#"><i class="fa fa-angle-double-right"></i> December 2015 <span class="pull-right">(97)</span></a></li>
                                    <li><a href="#"><i class="fa fa-angle-double-right"></i> November 2015 <span class="pull-right">(32)</span></a></li>
                                    <li><a href="#"><i class="fa fa-angle-double-right"></i> October 2015 <span class="pull-right">(19)</span></a></li>
                                    <li><a href="#"><i class="fa fa-angle-double-right"></i> September 2015 <span class="pull-right">(08)</span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!--/.archieve-->

                    <div class="widget tags">
                        <h3>Tag Cloud</h3>
                        <ul class="tag-cloud">
                            <li><a class="btn btn-xs btn-primary" href="#">Apple</a></li>
                            <li><a class="btn btn-xs btn-primary" href="#">Barcelona</a></li>
                            <li><a class="btn btn-xs btn-primary" href="#">Office</a></li>
                            <li><a class="btn btn-xs btn-primary" href="#">Ipod</a></li>
                            <li><a class="btn btn-xs btn-primary" href="#">Stock</a></li>
                            <li><a class="btn btn-xs btn-primary" href="#">Race</a></li>
                            <li><a class="btn btn-xs btn-primary" href="#">London</a></li>
                            <li><a class="btn btn-xs btn-primary" href="#">Football</a></li>
                            <li><a class="btn btn-xs btn-primary" href="#">Porche</a></li>
                            <li><a class="btn btn-xs btn-primary" href="#">Gadgets</a></li>
                        </ul>
                    </div>
                    <!--/.tags-->

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
                    <!--/.blog_gallery-->
                </aside>
            </div>
            <!--/.row-->
        </div>
    </section>
    <!--/#blog-->

    @include('layouts.header')

    @yield('content');

    @include('layouts.footer')
    @include('layouts.scripts')

</body>

</html>
