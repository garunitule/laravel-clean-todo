<?php

namespace packages\Infrastructure\Todo;

use packages\Domain\Domain\Todo\TodoRepositoryInterface;
use packages\Domain\Domain\Todo\Todo;
use Illuminate\Support\Facades\DB;

class TodoRepository implements TodoRepositoryInterface
{
    public function save(Todo $todo)
    {
        DB::table('todos')
        ->updateOrInsert([
            'title' => $todo->getTitle(),
            'limit' => $todo->getLimit(),
            'completed' => $todo->getCompleted(),
        ]);
    }
}