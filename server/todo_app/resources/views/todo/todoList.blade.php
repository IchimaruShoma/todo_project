@extends('layouts.master')

@section('todo_content')
    <div>
        <h2>タスクの一覧</h2>
        <a href="/create-todo">タスクを追加</a>
        <table border="1">
            <tr>
                <th>タスクの名前</th>
                <th>タスクの説明</th>
                <th colspan="2">操作</th>
            </tr>

            @foreach($todos as $todo)
            <tr>
                <td>{{$todo->title}}</td>
                <td>{{$todo->content}}</td>
                <td><a href="/edit-todo/{{$todo->id}}">編集</a></td>
                <td><a href="/delete-todo/{{$todo->id}}">削除</a></td>
            </tr>
            @endforeach
        </table>
    </div>
@endsection
