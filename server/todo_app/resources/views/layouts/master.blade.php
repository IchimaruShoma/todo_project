<!doctype html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>ToDo App</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <h1>Todo App</h1>
    <div class="container">
        @yield('login_content')
        @yield('content')
    </div>
</body>
</html>
