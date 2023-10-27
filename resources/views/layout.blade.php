<!DOCTYPE html>
<html lang="ru" data-bs-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>КЭИ</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        * {
            font-family: 'Montserrat', sans-serif;
        }
    </style>
</head>
<body class="">
    <div id="app" class="">
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
              <a class="navbar-brand" href="/">КЭИ</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarScroll">
                <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                  <li class="nav-item">
                    <a class="nav-link" href="{{route('groups.index')}}">Группы</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href=" ">Предподаватели</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href=" ">Предметы</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href=" ">Студенты</a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Добавить
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="{{route('groups.create')}}">Добавить группу</a></li>
                      <li><a class="dropdown-item" href=" ">Добавить студента</a></li>
                      <li><a class="dropdown-item" href=" ">Добавить предподавателя</a></li>
                      <li><a class="dropdown-item" href=" ">Добавить предмет</a></li>
                    </ul>
                </li>
                </ul>
              </div>
            </div>
        </nav>
        <main id="main">
            @yield('main')
        </main>
    </div>
    @yield('scripts')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
