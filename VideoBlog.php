<?php

class VideoBlog extends MainPost
{
    public function getBody(): string
    {
        return "<h3>VideoBlog:{$this->getTitle()}</h3><p>{$this->getContent()}</p>";
    }
}