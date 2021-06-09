<?php

namespace DependencyInversion\Violates;

class Email
{
    public function send($message)
    {
        return $message;
    }
}
