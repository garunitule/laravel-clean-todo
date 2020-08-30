<?php

namespace packages\Domain\Domain\Todo;

interface TodoRepojitoryInterface
{
    public function save(Todo $todo);
}