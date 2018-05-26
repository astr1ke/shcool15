   <!-- header -->
    <div id="header" >
        <div class="container">
            <div class="row">
                <div class="col-xs-4">
                    <div class="header-social">
                        <script src="//ulogin.ru/js/ulogin.js"></script>
                        <div id="uLogin" data-ulogin="display=panel;theme=classic;fields=first_name,last_name;providers=vkontakte,odnoklassniki,mailru,facebook;hidden=other;redirect_uri=http%3A%2F%2F;mobilebuttons=0;"></div>
                    </div>
                    <div class="fzinfo-link"><a href="http://school.wunderpark.ru/svedeniya-ob-obrazovatelnoj-org"></a></div>
                    @if (!(Auth::check()))
                        <div class="signup">
                            <a class="btn-flat nyroModal" href="/login" >Войти на сайт</a>
                        </div>
                    @else
                    <div class="signup">
                        <a class="btn-flat nyroModal" href="/logout" >Выйти с сайта</a>
                    </div>
                    @endif
                </div>
                <div class="col-xs-4">
                    <div class="top-logo">
                        <a rel='nofollow'  class="top-logo-link" href="/">Школа №15 </a>
                    </div>
                </div>
                <div class="col-xs-4">
                    <div class="phone">Тел.: +7 (86140) 67251
                        <div class="address"><a href="/contacts">село Коноково, улица Донская,5.</a></div>
                    </div>
                    <div class="callback">
                        <a class="nyroModal" href="/ajax/modal/callback" onclick="yaCounter30740753.reachGoal('zakaz_zvonka'); return true;">Отправить нам E-mail</a>
                    </div>
                </div>
            </div>
            <!-- menu -->
            <div id="main_menu" class="row">
                <div class="col-md-12">
                    <ol class="main-menu-list">
                        <li><a href="/" >Главная</a></li>

                        <li><a href="/about" >О школе</a><ul>
                        <li><a href="/about">О школе</a></li>
                        <li><a href="/teachers">Наши педагоги</a></li></ul></li>

                        <li><a href="/news/1" >Жизнь школы</a><!--<ul>
                        <li><a href="/news/1" >События</a></li>
                        <li><a href="/gallery">Фотогалерея</a></li>--></ul></li>

                        <li><span>Наши возможности</span><ul>
                        <li><a href="/dopolnitelnie-zaniatia">Дополнительные занятия</a></li>
                        <li><a href="/stadion">Стадион</a></li>
                        <li><a href="/krujki">Кружки</a></li>
                        <li><a href="http://school.wunderpark.ru/gamepark">Детская площадка</a></li>
                        <li><a href="http://school.wunderpark.ru/lab">Тепличный комплекс</a></li></ul></li>

                        <li><span>Документация</span><ul>
                        <li><a href="/mainInformation">1.Основная Информация</a></li>
                        <li><a href="/structureOrgansAuthority">2.Структуры огранов власти</a></li>
                        </ul></li>


                        <li><a href="/contacts" >Контакты</a></li>			</ol>
                </div>
            </div>
        </div>
    </div>