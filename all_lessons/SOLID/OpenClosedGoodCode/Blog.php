<?php

namespace SOLID\OpenClosedGoodCode;

use SOLID\OpenClosedGoodCode\Post;

class Blog extends Post
{
    public function showContent(): void
    {
        echo "<b>{$this->getContent()}</b>";
    }
}