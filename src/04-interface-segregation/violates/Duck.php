<?php

namespace InterfaceSegregation\Violates;

class Duck implements Birds
{
    public function walk()
    {
        return 'Okay, I am a duck and I can walk!';
    }

    public function fly()
    {
        return 'Okay, I am a duck and I can fly!';
    }

    public function swim()
    {
        return 'Okay, I am a duck and I can swim!';
    }
}
