<?php

class File
{
    private string $path;

    public function __construct(string $path)
    {
        $this->setPath($path);
    }

    public function write(string $message, bool $append = true): false|int
    {
        return file_put_contents($this->getPath(), $message, $append ? 8 : 0);
    }

    public function read(): false|string
    {
        return file_get_contents($this->getPath());
    }

    public function readFirstLine(): false|string
    {
        $file = fopen($this->getPath(), 'r');
        $line = fgets($file);
        fclose($file);

        return $line;
    }

    /**
     * @param string $path
     */
    public function setPath(string $path): void
    {
        $this->validatePath($path);
        $this->path = $path;
    }

    private function validatePath(string $path): void
    {
        $extension = $this->getExtension($path);
        if (!in_array($extension, FileExtension::values())) {
            throw new Exception('Invalid file extension');
        }

        if (!file_exists($path)) {
            throw new Exception('Invalid path. File not exists');
        }
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