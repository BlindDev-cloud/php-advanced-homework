<?php

declare(strict_types=1);

namespace Classes\Taxis;

use Interfaces\Taxi;

class StandardTaxi implements Taxi
{
    private string $model = 'Renault logan';
    private float $cost = 90;

    public function getCost(): float
    {
        return $this->cost;
    }

    public function getModel(): string
    {
        return $this->model;
    }
}