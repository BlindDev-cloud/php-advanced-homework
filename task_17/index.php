<?php

interface FlyingBird
{
    public function fly();
}

interface EatingBird
{
    public function eat();
}

class Swallow implements FlyingBird, EatingBird
{
    public function eat() { ... }
    public function fly() { ... }
}

class Ostrich implements EatingBird
{
    public function eat() { ... }
}