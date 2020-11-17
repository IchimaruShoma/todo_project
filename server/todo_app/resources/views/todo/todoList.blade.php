@extends('layouts.master')

@section('todo_content')
<div>
  <h1>タスクの一覧</h1>
  <a href="/create-todo">タスクを追加</a>
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

  </table>
    {{-- @foreach を Vueで置き換えたい --}}
  <div id="app">
    <todolist></todolist>
  </div>
</div>
@endsection
