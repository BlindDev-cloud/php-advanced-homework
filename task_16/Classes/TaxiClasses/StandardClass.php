<?php

declare(strict_types=1);

namespace Classes\TaxiClasses;

use Classes\Taxis\StandardTaxi;
use Interfaces\Taxi;

class StandardClass extends TaxiClass
{
    public static function getTaxi(): Taxi
    {
        return new StandardTaxi();
    }
}