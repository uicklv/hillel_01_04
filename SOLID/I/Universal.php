<?php

//interface Universal
//{
//    public function send(string $message): bool;
//
//    public function save(array $data): void;
//}

interface SenderInterface
{
    public function send(string $message): bool;
}

interface SaverInterface
{
    public function save(array $data): void;
}

class Sender implements SenderInterface
{

    public function send(string $message): bool
    {
       //created method send
    }
}