<?php

class ViberMessenger implements MessageInterface
{

    public function send(string $message): bool
    {
        //todo send message via viber
        return true;
    }
}