<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Группы</title>
    <link rel="stylesheet" href="{{ asset("css/group.css") }}">
</head>
<body>
    <div id="app">
        <div class="header">
            <a class="header__title" href="http://127.0.0.1:8000/group">Группы</a>
            @yield('btn')
        </div>
        @yield('main')
    </div>
    @yield('scripts')
</body>
</html>
