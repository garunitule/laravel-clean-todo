<?php

namespace packages\Domain\Application\Todo\TodoCreateInteractor;

class TodoCreateInteractor implements TodoCreateUseCaseInterface
{
    private $todoRepository;

    public function __construct(TodoRepojitoryInterface $todoRepository)
    {
        $this->todoRepository = $todoRepository;
    }

    public function handle(TodoCreateRequest $request)
    {
        $createdTodo = new Todo($request->getTitle(), $request->getLink(), $request->getCompleted());
        $this->todoRepository->save($createdTodo);
    }
}