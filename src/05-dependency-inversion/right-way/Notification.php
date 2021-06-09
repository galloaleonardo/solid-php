<?php

namespace DependencyInversion\RightWay;

class Notification
{
    private $message;

    public function __construct(Message $message)
    {
        $this->message = $message;
    }

    public function send($message)
    {
        return $this->message->send($message);
    }
}
