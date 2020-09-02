<?php

namespace packages\InMemoryInfrastructure\Todo;

use packages\Domain\Domain\Todo\TodoRepositoryInterface;
use packages\Domain\Domain\Todo\Todo;

class InMemoryTodoRepository implements TodoRepositoryInterface
{
    private $db = [];

    /**
     * @param Todo $Todo
     * @return mixed
     */
    public function save(Todo $Todo)
    {
        $this->db[$Todo->getId()->getValue()] = $Todo;
        var_dump($this->db);
    }

    /**
     * @param int $id
     * @return Todo
     */
    public function find(int $id)
    {
        $found = $this->db[$id->getValue()];
        return $this->clone($found);
    }

    /**
     * @param Todo $Todo
     * @return Todo
     */
    private function clone(Todo $Todo){
        $cloned = new Todo($Todo->getId(), $Todo->getName());
        return $cloned;
    }

    /**
     * @param int $page
     * @param int $size
     * @return Todo[]
     */
    public function findByPage(int $page, int $size)
    {
        $start = ($page - 1) * $size;
        return array_slice($this->db, $start, $size);
    }
}