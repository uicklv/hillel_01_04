<?php

class News extends Post
{
    public function showContent(): void
    {
        echo "<i>{$this->getContent()}</i>";
    }
}