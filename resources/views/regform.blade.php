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
        <div class="form-signup">
            <h1>Регистрация</h1>
            <fieldset>
                <p class="login-msg"></p>
                <form>
                    <input type="email" placeholder="Введите Ваш email адрес..."  required/>
                    <input type="password" placeholder="Ваш сложный пароль..."  required/>
                    <input type="text" placeholder="Имя пользователя" required />
                    <input type="submit" value="Зарегистрироваться" />
                </form>
                <p>Войти через: <span class="social fb">Facebook</span> <span class="social gp">Google +</span></p>
                <a href="login" class="flipper">Уже зарегистрированы? Войти.</a>
            </fieldset>
        </div>

    </div>
</div>


<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
<script src="{{asset('js/index.js')}}"></script>


</body>
</html>