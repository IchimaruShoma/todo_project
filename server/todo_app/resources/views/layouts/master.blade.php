<!doctype html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>ToDo App</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-center">
        @yield('content')
        @yield('login_content')
        @yield('todo_content')
      </div>
    </div>
  </div>
  <div id='todolist'>
    <ul>
      <li v-for='todo in todos'>{{ todo.title }}</li>
    </ul>
  </div>

  <script src="{{mix('js/app.js')}}"></script>
</body>
</html>
