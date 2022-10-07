<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Добавить компанию / DBB Финансы / Бухгалтерия в твоём кармане</title>

    <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css') }}" type="text/css">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/normalize.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/main.css') }}">
    <link rel="icon" type="image/png" href="{{ URL::asset('images/favicon.png') }}">
</head>
<body>
<div id="root">
    @include("views.header")

    <main class="container">
        <section class="auth-wrapper width-700">
            <h2>Добавить компанию</h2>

            <form method="post" class="auth-form d-flex flex-column">
                @csrf
                <div class="d-flex flex-row justify-content-between">
                    <div class="d-flex flex-column" style="width:48%">
                        <input type="text" class="form-input" required name="company_name" placeholder="Название">
                        <input type="text" class="form-input" name="company_activity" placeholder="Назначение">
                        <button class="form-submit">Добавить</button>
                    </div>

                    <div class="d-flex flex-column" style="width:48%">
                        <textarea name="company_description" class="form-input" placeholder="Описание" style="min-height:160px;"></textarea>
                    </div>
                </div>
            </form>
        </section>
    </main>
</div>
</body>
</html>
