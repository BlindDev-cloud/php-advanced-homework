<?php

declare(strict_types=1);

namespace Classes\Taxis;

use Interfaces\Taxi;

class LuxuryTaxi implements Taxi
{
    private string $model = 'Hyundai accent';
    private float $cost = 150;

    public function getCost(): float
    {
        return $this->cost;
    }

    public function getModel(): string
    {
        return $this->model;
    }
}