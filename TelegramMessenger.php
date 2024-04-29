<?php

class TelegramMessenger implements MessageInterface
{

    public function send(string $message): bool
    {
        //todo send message via telegram
        return true;
    }
}