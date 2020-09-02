<?php

namespace packages\Domain\Application\Todo;

use packages\UseCase\Todo\Create\TodoCreateUseCaseInterface;
use packages\UseCase\Todo\Create\TodoCreateRequest;
use packages\UseCase\Todo\Create\TodoCreateResponse;
use packages\Domain\Domain\Todo\TodoRepositoryInterface;
use packages\Domain\Domain\Todo\Todo;

class TodoCreateInteractor implements TodoCreateUseCaseInterface
{
    private $todoRepository;

    public function __construct(TodoRepositoryInterface $todoRepository)
    {
        $this->todoRepository = $todoRepository;
    }

    public function handle(TodoCreateRequest $request)
    {
        $createdTodo = new Todo($request->getTitle(), $request->getLimit(), $request->getCompleted());
        $this->todoRepository->save($createdTodo);

        return new TodoCreateResponse($request->getTitle(), $request->getLimit(), $request->getCompleted());
    }
}