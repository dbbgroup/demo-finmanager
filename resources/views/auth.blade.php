<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Авторизация / DBB Финансы / Бухгалтерия в твоём кармане</title>

    <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css') }}" type="text/css">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/normalize.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/main.css') }}">
    <link rel="icon" type="image/png" href="{{ URL::asset('images/favicon.png') }}">
</head>
<body>
<div id="root">
    @include("views.header")

    <main class="container">
        <section class="auth-wrapper">
            <h2>Авторизация</h2>

            <form method="post" class="auth-form d-flex flex-column">
                @csrf
                <input type="email" name="email" class="form-input" placeholder="Электропочта" required>
                <input type="password" name="password" class="form-input" placeholder="Пароль" required>
                <button type="button" onclick="document.location.replace('/settings')" class="form-submit">Авторизоваться</button>
                <button type="button" onclick="document.location.replace()" class="btn link-primary">Напомнить пароль</button>
            </form>
        </section>
    </main>
</div>
</body>
</html>
