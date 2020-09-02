<?php

namespace packages\Domain\Domain\Todo;

interface TodoRepositoryInterface
{
    public function save(Todo $todo);
}