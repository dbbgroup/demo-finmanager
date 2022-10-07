<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Настройки / DBB Финансы / Бухгалтерия в твоём кармане</title>

    <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css') }}" type="text/css">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/normalize.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/main.css') }}">
    <link rel="icon" type="image/png" href="{{ URL::asset('images/favicon.png') }}">
</head>
<body>
<div id="root">
    @include("views.header")

    <main class="container">
        <h1 class="dashboard-h1">Настройки</h1>
        <section class="dashboard-wrapper d-flex flex-row">
            <aside class="dashboard-sidebar d-flex flex-column">
                <a href="{{ URL::to('settings') }}" class="dashboard-selection dashboard-selection-active">Общие</a>
                <a href="{{ URL::to('company') }}" class="dashboard-selection">Компании</a>
                <a href="{{ URL::to('coworker') }}" class="dashboard-selection">Сотрудники</a>
                <a href="{{ URL::to('payments') }}" class="dashboard-selection">Платежи</a>
            </aside>

            <article class="dashboard-content">
                <form method="post" class="auth-form d-flex flex-column w-50">
                    @csrf
                    <input type="password" name="old_password" class="form-input" placeholder="Старый пароль" required>
                    <input type="password" name="new_password" class="form-input" placeholder="Новый пароль" required>
                    <button class="form-submit">Продолжить</button>
                </form>
            </article>
        </section>
    </main>
</div>
</body>
</html>
