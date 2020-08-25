<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models;

class TodosController extends Controller
{
    /**
     * index 画面表示
     */
    public function index()
    {
        $todos = TodosController::all();
        return view('layouts.common', [
        'todos' => $todos,
        ]);
    }

    /**
     * create 新規作成
     */
    public function create()
    {
        $todos = new TodosController;
        return view('layouts.create', [
            'todos' => $todos,
        ]);
    }

    /**
     * store 保存
     */
    public function store(Request $request)
        {
            $todo = new TodosController;
            $todo->fill( $request->all() );
            $todo->save();
            return redirect('/todos');
        }

    /**
     * show 詳細
     */
    public function show($id)
    {
            $todo = TodosController::find($id);
            return view('layouts.show', [
                'todo' => $todo,
            ]);
    }

    /**
     * edit 編集
     */
    public function edit($id)
    {
            $todo = TodosController::find($id);
            return view('layouts.edit', [
                'todo' => $todo,
            ]);
    }

    /**
     * update 更新
     */
    public function update(Request $request, $id)
    {
            $todo = TodosController::find($id);
            $todo->fill( $request->all() );
            $todo->save();
            return redirect('/todos');
    }

    /**
     * destroy 削除
     */
    public function destroy($id)
    {
            $todo = TodosController::find($id);
            $todo->delete();
            return redirect('/todos');
    }
}
