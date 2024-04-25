<?php

class File
{
    private string $path;

    public function __construct(string $path)
    {
        $this->setPath($path);
    }

    /**
     * @param string $path
     */
    public function setPath(string $path): void
    {
        $extension = $this->getExtension($path);
        if (!in_array($extension, FileExtension::values())) {
            throw new Exception('Invalid file extension');
        }
        $this->path = $path;
    }

    public function changeExtension(FileExtension $newExtension)
    {

    }

    /**
     * @return string
     */
    public function getPath(): string
    {
        return $this->path;
    }

    private function getExtension(string $path): string
    {
        return pathinfo($path, PATHINFO_EXTENSION);
    }
}