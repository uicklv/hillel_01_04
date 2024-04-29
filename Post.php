<?php

class Post extends MainPost
{
    public function getBody(): string
    {
        return "<h3>{$this->getTitle()}</h3><p>{$this->getContent()}</p>";
    }
}