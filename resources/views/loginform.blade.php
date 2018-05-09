<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Авторизация</title>
    <link rel="stylesheet" href="{{asset('css/RegStyle.css')}}" media="screen" type="text/css" />
    <link rel="icon" href="http://vladmaxi.net/favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="http://vladmaxi.net/favicon.ico" type="image/x-icon">
</head>

<body>

<div id="login">
    <div class="flip">
        <div class="form-login">
            <h1>Авторизация</h1>
            <fieldset>
                <p class="login-msg"></p>
                <form>
                    <input type="email" placeholder="Логин или Email" required />
                    <input type="password" placeholder="Пароль" required />
                    <input type="submit" value="ВОЙТИ" />
                </form>
                <p>Войти через: <span class="social fb">Facebook</span> <span class="social gp">Google +</span></p>
                <p><a href="registration" class="flipper">Нет аккаунта? Регистрация.</a><br>
                    <a href="#">Забыли пароль?</a></p>
            </fieldset>
        </div>
    </div>
</div>


<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
<script src="{{asset('js/index.js')}}"></script>


</body>
</html>