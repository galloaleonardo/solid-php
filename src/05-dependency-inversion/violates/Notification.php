<?php

namespace DependencyInversion\Violates;

class Notification
{
    private $message;

    public function __construct()
    {
        $this->message = new Email();
    }

    public function send($message)
    {
        return $this->message->send($message);
    }
}
