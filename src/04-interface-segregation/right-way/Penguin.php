<?php

namespace InterfaceSegregation\RightWay;

class Penguin implements WalkingBirds, SwimmingBirds
{
    public function walk()
    {
        return 'Okay, I am a penguin and I can walk!';
    }

    public function swim()
    {
        return 'Okay, I am a penguin and I can swim!';
    }
}
