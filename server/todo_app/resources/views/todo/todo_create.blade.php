@extends('layouts.master')

@section('todo_content')
    <div>
        <h2>タスクを追加</h2>
        <form method="POST" action="/create">
            @csrf
            @if ($errors->any())
                <ul>
                @foreach ($errors->all() as $error)
                    <li style="color:red">{{$error}}</li>
                @endforeach
                </ul>
            @endif
            <p>
                タスクの名前：<input type="text" name="title">
            </p>
            <p>
                タスクの説明：<input type="text" name="content">
            </p>
            <input type="submit" name="create" value="追加">
        </form>
        <a href="/todo">戻る</a>
    </div>
@endsection
