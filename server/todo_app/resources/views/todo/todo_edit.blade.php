@extends('layouts.master')

@section('todo_content')
  <div>
    <h2>タスクの修正</h2>
    <form method="POST" action="/edit">
      @csrf
      <input type="hidden" name="id" value="{{$todo->id}}">
      <p>
        タスクの名前：<input type="text" name="title" value="{{$todo->title}}">
      </p>
      <p>
        タスクの説明：<input type="text" name="content" value="{{$todo->content}}">
      </p>
      <input type="submit" name="edit" value="修正">
    </form>
    <a href="/todo">戻る</a>
  </div>
@endsection
