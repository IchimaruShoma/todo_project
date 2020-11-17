<?php

namespace App\Http\Controllers;

use App\Models\Todo;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TodoController extends Controller{
    // タスクを一覧で表示
    public function index(){
        $todos = Todo::orderBy('id', 'asc')->get();
        return view('todo.todoList');
    }

    public function getData(){
        return \App\Models\Todo::all();
    }

    // タスク作成画面を表示
    public function createPage(){
        return view('todo.todo_create');
    }

    // タスクを新規作成
    public function create(Request $request){
        $validator = $request->validate([
            'title' => 'required',
            'content' => 'required',
        ]);

        $todo = new Todo();
        $todo->title = $request->title;
        $todo->content = $request->content;
        $todo->save();

        return redirect('/todo');
    }

    // タスク編集画面を表示
    public function editPage($id){
        $todo = Todo::find($id);
        return view('todo.todo_edit', [
            "todo" => $todo
        ]);
    }

    // タスクを更新
    public function edit(Request $request){
        Todo::find($request->id)->update([
            'title' => $request->title,
            'content' => $request->content,
        ]);
        return redirect('/todo');
    }

    // タスク削除画面を表示
    public function deletePage($id){
        $todo = Todo::find($id);
        return view('todo.todo_delete', [
            "todo" => $todo
        ]);
    }

    // タスクを削除
    public function delete($id){
        Todo::find($id)->delete();
        return redirect('/todo');
    }
}
