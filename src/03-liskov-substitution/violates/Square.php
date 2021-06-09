<?php

namespace LiskovSubstitution\Violates;

class Square extends Rectangle
{
    public function setHeight($height)
    {
        $this->height = $height;
        $this->width = $height;
    }

    public function setWidth($width)
    {
        $this->height = $width;
        $this->width = $width;
    }
}
