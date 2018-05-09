<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Company-HTML Bootstrap theme</title>

    <-Подключаем стили Бутстрап->
    @include('layouts.stiles')

</head>

<body>

@include('layouts.header')

@yield('content');

@include('layouts.footer')
@include('layouts.scripts')

</body>

</html>