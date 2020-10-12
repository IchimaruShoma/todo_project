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
    @include('partials.navbar')

    <div class="container">
        @yield('content')
    </div>

    @include('partials.footer')

</body>
</html>
