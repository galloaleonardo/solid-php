<?php

namespace InterfaceSegregation\Violates;

class Penguin implements Birds
{
    public function walk()
    {
        return 'Okay, I am a penguin and I can walk!';
    }

    public function fly()
    {
        return 'Opssss, I am a penguin and I cannot fly! =(';
    }

    public function swim()
    {
        return 'Okay, I am a penguin and I can swim!';
    }
}
