<?php

interface Post
{
    public function getContent(): string;
}

class Blog implements Post
{
    public function __construct(
        private string $content
    ) {}

    /**
     * @return string
     */
    public function getContent(): string
    {
        return $this->content;
    }
}

class News implements Post
{
    public function __construct(
        private string $content
    ) {}

    /**
     * @return string
     */
    public function getContent(): string
    {
        return "<i>$this->content</i>";
    }
}

class ContentPrinter
{
    public function printContent(Post $blog)
    {
        echo $blog->getContent();
    }
}

