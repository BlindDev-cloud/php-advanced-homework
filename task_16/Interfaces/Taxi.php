<?php

declare(strict_types=1);

namespace Interfaces;

interface Taxi
{
    public function getModel(): string;

    public function getCost(): float;
}