<?php

namespace App\Http\Models\Todo\Create;

class TodoCreateViewModel
{
    private $title;
    private $limit;
    private $completed;

    public function __construct(string $title, \DateTime $limit, bool $completed)
    {
        $this->title = $title;
        $this->limit = $limit;
        $this->completed = $completed;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function getLimit()
    {
        return $this->limit;
    }

    public function getCompleted()
    {
        return $this->completed;
    }
}