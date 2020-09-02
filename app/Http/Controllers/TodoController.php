<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use packages\UseCase\Todo\Create\TodoCreateUseCaseInterface;
use App\Http\Models\Todo\Create\TodoCreateViewModel;
use packages\UseCase\Todo\Create\TodoCreateRequest;

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
        $limit = new \DateTime($limit);
        $completed = $request->input('completed');
        $createRequest = new TodoCreateRequest($title, $limit, $completed);
        $response = $interactor->handle($createRequest); //$interactorが使用できる形に変換

        $viewModel = new TodoCreateViewModel($response->getTitle(), $response->getLimit(), $response->getCompleted()); //view用にデータを変換
        return view('todos.index', compact('viewModel'));
    }
}