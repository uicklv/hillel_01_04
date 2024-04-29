<?php

class News extends MainPost
{
    public function getBody(): string
    {
        return "<i>{$this->getTitle()}</i>:{$this->getContent()}";
    }
}