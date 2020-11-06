@extends('layouts.master')

@section('todo_content')
  <div>
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-center">
          <h1>タスクの一覧</h1>
          <a href="/create-todo">タスクを追加</a>
        </div>
      </div>
  </div>
  <table border="1">
    <tr>
        <th>タスクの名前</th>
        <th>タスクの説明</th>
        <th colspan="2">操作</th>
    </tr>

    {{-- @foreach($todos as $todo)
    <tr>
        <td>{{$todo->title}}</td>
        <td>{{$todo->content}}</td>
        <td><a href="/edit-todo/{{$todo->id}}">編集</a></td>
        <td><a href="/delete-todo/{{$todo->id}}">削除</a></td>
    </tr>
    @endforeach --}}
    <div id='app'>
      <tr>
        <td v-for="todo in todos">{{ todo.title }}</td>
      </tr>
    </div>

    </table>
  </div>
@endsection
