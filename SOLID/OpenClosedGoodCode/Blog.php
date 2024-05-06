<?php

class Blog extends Post
{
    public function showContent(): void
    {
        echo "<b>{$this->getContent()}</b>";
    }
}