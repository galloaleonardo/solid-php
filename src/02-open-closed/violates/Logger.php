<?php

namespace OpenClosed\Violates;

class Logger
{
    // added at firt
    public function writeText($message)
    {
        return 'Log | Writing Text | ' . $message;
    }

    // added after
    public function writeCsv($message)
    {
        return 'Log | Writing CSV | ' . $message;
    }
}
