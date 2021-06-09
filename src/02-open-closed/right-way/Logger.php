<?php

namespace OpenClosed\RightWay;

class Logger
{
    private $writer;

    public function __construct(Writer $writer)
    {
        $this->writer = $writer;
    }

    public function write($message)
    {
        return $this->writer->write($message);
    }
}
