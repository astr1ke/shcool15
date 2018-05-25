<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="{{asset('js/jquery-2.1.1.min.js')}}"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/jquery.prettyPhoto.js')}}"></script>
<script src="{{asset('js/jquery.isotope.min.js')}}"></script>
<script src="{{asset('js/wow.min.js')}}"></script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDo77G7S7s_IsNMwDwricUZ1fKi8bp0Gfo"></script>

<script src="{{asset('contactform/contactform.js')}}"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js" type="text/javascript"></script>
<!--Скрипты коментариев-->
<script type="text/javascript" src="{{asset('js')}}/app.js"></script>
<script type="text/javascript" src="{{asset('comments/js')}}/comment-reply.js"></script>
<script type="text/javascript" src="{{asset('comments/js')}}/comment-scripts.js"></script>
<!--меню-->
<script type="text/javascript" src="{{asset('js')}}/school.js"></script>
<script type="text/javascript" src="{{asset('js')}}/jquery.maskedinput.min.js"></script>
<script type="text/javascript" src="{{asset('js')}}/jquery.nyroModal.custom.min.js"></script>
<script type="text/javascript" src="{{asset('js')}}/jquery.bxslider.min.js"></script>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script type="text/javascript" src="{{asset('js')}}/jquery.wpModal.js"></script>

<script src="//ulogin.ru/js/ulogin.js"></script>

<script>
    $(document).ready(function(){
        $('.bxslider').bxSlider({
            mode: 'fade',
            auto: true,
            controls: false,
            pause: 5000
        });
        $('.item-slider').bxSlider({
            controls: true,
            pager: false
        });

        $('#EduCalcAge').focus(function(){
            if ($(this).val() < 1) $(this).val('');
        });
        $('#EduCalcAge').blur(function(){
            if ($(this).val() < 1) $(this).val(0);
        });

        $video = $(".video-banner__video");
        $("#video-mute").click( function (){
            textOn = $(this).data('text-on');
            textOff = $(this).data('text-off');
            if( $video.prop('muted') ) {
                $video.prop('muted', false);
                $(this).addClass('on').text(textOff);
            } else {
                $video.prop('muted', true);
                $(this).removeClass('on').text(textOn);
            }
        });

        $('.bx-pager .bx-pager-item + .bx-pager-item a').click(function(){
            $video[0].pause();
        });
        $('.bx-pager .bx-pager-item:first-child a').click(function(){
            $video[0].play();
        });
    });
</script>







