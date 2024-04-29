<?php

abstract class MainPost
{
    private string $title;

    private string $content;

    public function __construct(string $title, string $content)
    {
        $this->setTitle($title);
        $this->setContent($content);
    }

//    public function __construct(
//        private string $title,
//        private string $content)
//    {
//    }


    /**
     * @param string $content
     */
    public function setContent(string $content): void
    {
        $this->validate($content);
        $this->content = $content;
    }

    /**
     * @param string $title
     */
    public function setTitle(string $title): void
    {
        $this->validate($title);
        $this->title = $title;
    }
    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @return string
     */
    public function getContent(): string
    {
        return $this->content;
    }

    private function validate(string $string)
    {
        if (strlen($string) < 5) {
            throw new Exception('Invalid string');
        }
    }

    public abstract function getBody(): string;
}