<?php

namespace packages\UseCase\Todo\Create;

class TodoCreateResponse {
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

    public function __construct(string $title, \DateTime $limit, bool $completed)
    {
        $this->title = $title;
        $this->limit = $limit;
        $this->completed = $completed;
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @return \DateTime
     */
    public function getLimit(): \DateTime
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