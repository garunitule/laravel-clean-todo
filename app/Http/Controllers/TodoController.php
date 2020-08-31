<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use packages\UseCase\Todo\Create\TodoCreateUseCaseInterface;
use App\Http\Models\Todo\Create\ToDoCreateViewModel;

class TodoController extends Controller
{
    public function create()
    {
        return view('todos.create');
    }

    public function store(TodoCreateUseCaseInterface $interactor, Request $request)
    {
        $title = $request->input('title');
        $limit = $request->input('limit');
        $completed = $request->input('completed');
        $response = $interactor->handle($title, $limit, $completed); //$interactorが使用できる形に変換

        $viewmodel = new TodoCreateViewModel($response->title, $response->limit, $response->completed); //view用にデータを変換
        return view('todos.index', compact('viewmodel'));
    }
}
