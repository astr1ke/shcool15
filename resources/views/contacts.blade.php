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
@include('layouts.header') <div class="container">
        <div class="row">
            <ol class="breadcrumb" itemscope itemtype="">
                <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a href="/" class="first" itemprop="item"><span itemprop="name">Главная</span><meta itemprop="position" content="1"></a></li>
                <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a itemprop="item"><span itemprop="name">Контакты</span><meta itemprop="position" content="2"></a></li>
            </ol>
        </div>
    </div>

    <div class="map" >
        <<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3252.2041029395373!2d41.32937217359657!3d44.84917508172796!3m2!1i1024!2i768!4f13.
        1!3m3!1m2!1s0x40f9c5d18ffe0627%3A0x91834f94af1f3938!2z0KjQutC-0LvQsCAxNQ!5e1!3m2!1sru!2sru!4v1525903502434"
        width=1170 height="400" frameborder="0" style="
        max-width: 100%;
        display: block;
        margin: 0 auto;
        border: none;" allowfullscreen></iframe>


    </div>



    <section id="contact-page">
        <div class="container">
            <div class="center">
                <h2>Создайте сообщение</h2>
            </div>
            <div class="row contact-wrap">
                <div class="status alert alert-success" style="display: none"></div>
                <div class="col-md-6 col-md-offset-3">
                    <div id="sendmessage">Ваше сообщение отправлено. Спасибо!</div>
                    <div id="errormessage"></div>
                    <form action="" method="post" role="form" class="contactForm">
                        <div class="form-group">
                            <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                            <div class="validation"></div>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                            <div class="validation"></div>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                            <div class="validation"></div>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                            <div class="validation"></div>
                        </div>
                        <div class="text-center"><button type="submit" name="submit" class="btn btn-primary btn-lg" required="required">Отправить сообщение</button></div>
                    </form>
                </div>
            </div>
            <!--/.row-->
        </div>
        <!--/.container-->
    </section>
    <!--/#contact-page-->
@include('layouts.footer')
@include('layouts.scripts')


</body>

</html>