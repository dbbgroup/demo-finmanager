<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Добавить сотрудника / DBB Финансы / Бухгалтерия в твоём кармане</title>

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
            <h2>Добавить сотрудника</h2>

            <form method="post" class="auth-form d-flex flex-column">
                @csrf
                <input type="text" name="name" class="form-input" placeholder="ФИО" required>
                <input type="text" list="cowork" name="role" class="form-input" placeholder="Должность" required>
                <datalist id="cowork">
                    <option value="Директор">Директор</option>
                    <option value="Техработник">Техработник</option>
                    <option value="Разработчик">Разработчик</option>
                    <option value="Системный администратор">Системный администратор</option>
                </datalist>
                <button class="form-submit">Добавить</button>
            </form>
        </section>
    </main>
</div>
</body>
</html>
