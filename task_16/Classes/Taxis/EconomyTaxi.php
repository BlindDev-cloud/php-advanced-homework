<?php

declare(strict_types=1);

namespace Classes\Taxis;

use Interfaces\Taxi;

class EconomyTaxi implements Taxi
{
    private string $model = 'Daewoo nexia';
    private float $cost = 35;

    public function getModel(): string
    {
        return $this->model;
    }

    public function getCost(): float
    {
        return $this->cost;
    }
}