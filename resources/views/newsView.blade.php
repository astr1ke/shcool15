<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Company-HTML Bootstrap theme</title>

    <-Подключаем стили Бутстрап->
    @include('layouts.stiles')

    <style type="text/css">
        .art {
            background: whitesmoke;
            border-radius: 10px;
        }
        .txt {

            margin-right: 30px;
        }
    </style>

</head>

<body>

    @include('layouts.header')

    <div id="breadcrumb">
        <div class="container">
            <div class="breadcrumb">
                <li><a href="/">Главная</a></li>
                <li>Новости  / </li>
                    @foreach($news as $newS)
                    <label><a>{{$newS['articleName']}}</a></label>
                    @endforeach
                <li><a href="/news/1">/ Вернуться</a></li>
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
                                            <span><i class="fa fa-comment"></i> <a href="#">{{count(\App\article::find($n['id'])->comments).' коммент.' }}</a></span>
                                        </div>
                                    </div>

                                    <div class="col-xs-12 col-sm-10 blog-content">
                                        <div class="pict">
                                            <a href="{{$n['pictures']}}" ><img class="img-responsive img-blog" src="{{$n['pictures']}}" width="100%" alt="" /></a>
                                        </div>
                                        <h4>{{$n['articleName']}}</h4>
                                        <div class="txt">
                                            <p>{!!$n['text']!!}</p>
                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>
                    @include('comments.comments_block', ['essence' => $n])
                @endforeach




                <!--/.blog-item-->



                </div>
                <!--/.col-md-8-->

                <aside class="col-md-4">

                    <!--Поиск-->
                    <div class="widget search">
                        <form role="form">
                            <input type="text" class="form-control search_box" autocomplete="off" placeholder="Search Here">
                        </form>
                    </div>

                    <div class="widget categories">
                        <h3>Categories</h3>
                        <div class="row">
                            <div class="col-sm-6">
                                <ul class="blog_category">
                                    @foreach($categories as $categorie)
                                        <li><a href="#">{{$categorie->categorie}}</a></li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!--/.categories-->


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

    @include('layouts.footer')
    @include('layouts.scripts')

</body>

</html>
