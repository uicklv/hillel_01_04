<?php

class Post
{
    public function __construct(
        private string $type,
        private string $content,
    ){}

    /**
     * @return string
     */
    public function getContent(): string
    {
        return $this->content;
    }
    public function getType(): string
    {
        return $this->type;
    }
}