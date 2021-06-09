<?php

namespace OpenClosed\RightWay;

class Csv implements Writer
{
    public function write(string $message)
    {
        return 'Log | Writing Csv | ' . $message;
    }
}
