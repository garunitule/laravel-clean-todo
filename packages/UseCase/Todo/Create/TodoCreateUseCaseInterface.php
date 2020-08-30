<?php

namespace packages\UseCase\Todo\Create;

interface TodoCreateUseCaseInterface
{
    /**
     * @param TodoCreateRequest $request
     * @return TodoCreateResponse
     */
    public function handle(TodoCreateRequest $request);
}