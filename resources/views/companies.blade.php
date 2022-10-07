<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Компании / DBB Финансы / Бухгалтерия в твоём кармане</title>

    <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css') }}" type="text/css">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/normalize.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/main.css') }}">
    <link rel="icon" type="image/png" href="{{ URL::asset('images/favicon.png') }}">
</head>
<body>
<div id="root">
    @include("views.header")

    <main class="container">
        <h1 class="dashboard-h1">Компании</h1>
        <section class="dashboard-wrapper d-flex flex-row">
            <aside class="dashboard-sidebar d-flex flex-column">
                <a href="{{ URL::to('settings') }}" class="dashboard-selection">Общие</a>
                <a href="{{ URL::to('company') }}" class="dashboard-selection dashboard-selection-active">Компании</a>
                <a href="{{ URL::to('coworker') }}" class="dashboard-selection">Сотрудники</a>
                <a href="{{ URL::to('payments') }}" class="dashboard-selection">Платежи</a>
            </aside>

            <article class="dashboard-content">
                <div class="dashboard-buttons d-flex flex-row">
                    <a href="{{ URL::to('company/add') }}" class="btn btn-primary m-1">Добавить компанию</a>
                </div>

                <div class="d-flex flex-column mt-3">
                    @foreach($company as $company)
                    <section class="dashboard-linear-item d-flex flex- justify-content-between">
                        <span>{{ $company->name }}</span>
                        <div class="d-flex flex-row justify-content-between">
                            <span>{{ $company->shortname }}</span>
                            <span>{{ $company->balance }}</span>
                        </div>
                        <a href="{{ URL::to('report/add') }}" class="button-primary">Отчёт</a>
                    </section>
                    @endforeach
                </div>
            </article>
        </section>
    </main>
</div>
</body>
</html>
