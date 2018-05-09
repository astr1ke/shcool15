@extends('layouts.layouts')
@section('content')

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
                                    <a href="{{$n['pictures']}}"><img class="img-responsive img-blog" src="{{$n['pictures']}}" width="100%" alt="" /></a>
                                    <h4>{{$n['description']}}</h4>
                                    <p>{{$n['text']}}</p>
                                </div>
                            </div>
                        </div>

                @endforeach
                <!--/.blog-item-->




                </div>
                <!--/.col-md-8-->

                <aside class="col-md-4">

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

@endsection