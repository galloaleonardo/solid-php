<?php

namespace DependencyInversion\RightWay;

class Email implements Message
{
    public function send($message)
    {
        return $message;
    }
}
