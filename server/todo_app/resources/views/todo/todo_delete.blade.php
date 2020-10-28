@extends('layouts.master')

@section('todo_content')
    <div>
        <h2>タスクを削除</h2>
        <form method="POST" action="/delete/{{$todo->id}}">
            @csrf
            <p>タスクの名前：{{$todo->title}}</p>
            <p>タスクの説明：{{$todo->content}}</p>
            <input type="submit" name="delete" value="削除">
        </form>
        <a href="/todo">戻る</a>
    </div>

@endsection
