<?php

class Dynamic
{
    private array $data = [];

    public function __set(string $name, $value): void
    {
       $this->data[$name] = $value;
    }

    public function __get(string $name)
    {
        if (isset($this->data[$name])) {
            return $this->data[$name];
        }

        return null;
    }

    public function __isset(string $name): bool
    {
        return isset($this->data[$name]);
    }

    public function __unset(string $name): void
    {
        unset($this->data[$name]);
    }

    public function __call(string $name, array $arguments)
    {
        echo $name .PHP_EOL;
        print_r($arguments);
    }

    public function __toString(): string
    {
        $string = '';
        foreach ($this->data as $key => $value) {
            $string .= "$key => $value \n";
        }
        return $string;
    }

    public function __invoke()
    {
        echo 'invokeMethod';
    }
}