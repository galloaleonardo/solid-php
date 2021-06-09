<?php

namespace OpenClosed\RightWay;

class Txt implements Writer
{
    public function write(string $message)
    {
        return 'Log | Writing Text | ' . $message;
    }
}
