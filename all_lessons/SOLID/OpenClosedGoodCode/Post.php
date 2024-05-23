<?php


namespace SOLID\OpenClosedGoodCode;
abstract class Post
{
    public function __construct(
        private string $content
    )
    {
    }

    public function getContent(): string
    {
        return $this->content;
    }

    abstract public function showContent(): void;
}