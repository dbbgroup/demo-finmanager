<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Выгрузка отчёта / DBB Финансы / Бухгалтерия в твоём кармане</title>

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
            <h2>Выгрузка отчета</h2>

            <form method="post" class="auth-form d-flex flex-column">
                @csrf
                <div class="d-flex flex-row justify-content-between mb-2">
                    <div class="radio-item">
                        <input type="radio" id="radio-pdf" class="hidden-radio" name="report_type" value="pdf">
                        <label class="input-radio" for="radio-pdf">
                            .PDF
                        </label>
                    </div>

                    <div class="radio-item">
                        <input type="radio" id="radio-web" class="hidden-radio" name="report_type" value="web">
                        <label class="input-radio" for="radio-web">
                            Онлайн
                        </label>
                    </div>
                </div>
                <input type="text" list="report_date" name="report_date" class="form-input" placeholder="Срок отчета" required>
                <datalist id="report_date">
                    <option value="7">Неделя</option>
                    <option value="30">Месяц</option>
                    <option value="ever">Всё время</option>
                </datalist>
                <button class="form-submit">Продолжить</button>
            </form>
        </section>
    </main>
</div>
</body>
</html>
