<?php

declare(strict_types=1);

namespace Classes\TaxiClasses;

use Classes\Taxis\EconomyTaxi;
use Interfaces\Taxi;

class EconomyClass extends TaxiClass
{
    public static function getTaxi(): Taxi
    {
        return new EconomyTaxi();
    }
}