<?php

namespace packages\Infrastructure\Todo;

use packages\Domain\Domain\Todo\TodoRepojitoryInterface;
use packages\Domain\Domain\Todo\Todo;

class TodoRepojitory implements TodoRepojitoryInterface
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