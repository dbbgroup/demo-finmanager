<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Генерация платежа / DBB Финансы / Бухгалтерия в твоём кармане</title>

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
            <h2>Генерация платежа</h2>

            <form method="post" class="auth-form d-flex flex-column">
                @csrf
                <div class="inline-form-inputs d-flex flex-row justify-content-between mb-2">
                    <input type="number" class="form-input" required placeholder="Сумма" name="pay_amount" min="0" step="100" value="0">
                    <input type="text" class="form-input" placeholder="Назначение" name="pay_target">
                </div>
                <input type="text" list="pay_coworker" name="pay_coworker" class="form-input" placeholder="Сотрудник" required>
                <datalist id="pay_coworker">
                    <option value="Долмат Владислав Александрович">Долмат Владислав Александрович</option>
                    <option value="Бондарев Антон Денисович">Бондарев Антон Денисович</option>
                    <option value="Казюкевич Матвей Максимович">Казюкевич Матвей Максимович</option>
                </datalist>
                <button class="form-submit">Продолжить</button>
            </form>
        </section>
    </main>
</div>
</body>
</html>
