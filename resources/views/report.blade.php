<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Отчёт от {{ date('d.m.Y') }}</title>

    <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css') }}" type="text/css">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/normalize.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/main.css') }}">
    <link rel="icon" type="image/png" href="{{ URL::asset('images/favicon.png') }}">
</head>
<body>
    <div id="root">
        <div class="report-wrapper">
            <h4>За период с {{ date('d.m.Y', strtotime(date('Y-m-d'). '- 30 days')) }} по {{ date('d.m.Y') }}</h4>
            <br><hr><br>
            <table class="table">
                <tr>
                    <th>Дата</th>
                    <th>ФИО сотрудника</th>
                    <th>Налог</th>
                    <th>Пенсионные отчисления</th>
                    <th>ИТОГО</th>
                </tr>

                @foreach($report as $rep)
                <tr>
                    <td>{{ $rep->created_at }}</td>
                    <td>{{ $rep->coworker_id }}</td>
                    <td>{{ $rep->fee }}</td>
                    <td>{{ $rep->old_fee }}</td>
                    <td>{{ $rep->total }}</td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
</body>
</html>
