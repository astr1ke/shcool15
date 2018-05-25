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

<div class="aboutus">
    <div class="container">
        <h3>Our company information</h3>
        <hr>
        <div class="col-md-7 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
            <img src="images/7.jpg" class="img-responsive">
            <h4>We Create, Design and Make it Real</h4>
            <p>Nam tempor velit sed turpis imperdiet vestibulum. In mattis leo ut sapien euismod id feugiat mauris euismod. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Phasellus id nulla risus, vel tincidunt
                turpis. Aliquam a nulla mi, placerat blandit eros. </p>
            <p>In neque lectus, lobortis a varius a, hendrerit eget dolor. Fusce scelerisque, sem ut viverra sollicitudin, est turpis blandit lacus, in pretium lectus sapien at est. Integer pretium ipsum sit amet dui feugiat vitae dapibus odio eleifend.</p>
        </div>
        <div class="col-md-5 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
            <div class="skill">
                <h2>Our Skills</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>

                <div class="progress-wrap">
                    <h3>Graphic Design</h3>
                    <div class="progress">
                        <div class="progress-bar  color1" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 85%">
                            <span class="bar-width">85%</span>
                        </div>

                    </div>
                </div>

                <div class="progress-wrap">
                    <h4>HTML</h4>
                    <div class="progress">
                        <div class="progress-bar color2" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 95%">
                            <span class="bar-width">95%</span>
                        </div>
                    </div>
                </div>

                <div class="progress-wrap">
                    <h4>CSS</h4>
                    <div class="progress">
                        <div class="progress-bar color3" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                            <span class="bar-width">80%</span>
                        </div>
                    </div>
                </div>

                <div class="progress-wrap">
                    <h4>Wordpress</h4>
                    <div class="progress">
                        <div class="progress-bar color4" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 90%">
                            <span class="bar-width">90%</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="our-team">
    <div class="container">
        <h3>Our Team</h3>
        <div class="text-center">
            <div class="col-md-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
                <img src="images/services/1.jpg" alt="">
                <h4>John Doe</h4>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing eil sed deiusmod tempor</p>
            </div>
            <div class="col-md-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                <img src="images/services/2.jpg" alt="">
                <h4>John Doe</h4>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing eil sed deiusmod tempor</p>
            </div>
            <div class="col-md-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="900ms">
                <img src="images/services/3.jpg" alt="">
                <h4>John Doe</h4>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing eil sed deiusmod tempor</p>
            </div>
        </div>
    </div>
</div>

@include('layouts.footer')
@include('layouts.scripts')


</body>

</html>