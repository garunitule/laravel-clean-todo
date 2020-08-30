<?php

namespace packages\Domain\Domain\Todo;

class Todo {
    /**
     * @var int
     */
    private $id;
    /**
     * @var string
     */
    private $title;
    /**
     * @var DateTime
     */
    private $limit;
    /**
     * @var bool
     */
    private $completed;

    public function __construct(int $id, string $title, DateTime $limit, bool $completed)
    {
        $this->id = $id;
        $this->title = $title;
        $this->limit = $limit;
        $this->completed = $completed;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @return DateTime
     */
    public function getLimit(): DateTime
    {
        return $this->limit;
    }

    /**
     * @return bool
     */
    public function getCompleted(): bool
    {
        return $this->completed;
    }
}