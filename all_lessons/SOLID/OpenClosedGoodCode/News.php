<?php

namespace SOLID\OpenClosedGoodCode;

use SOLID\OpenClosedGoodCode\Post;

class News extends Post
{
    public function showContent(): void
    {
        echo "<i>{$this->getContent()}</i>";
    }
}