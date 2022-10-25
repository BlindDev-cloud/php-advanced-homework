<?php

declare(strict_types=1);

namespace Classes\TaxiClasses;

use Interfaces\Taxi;

abstract class TaxiClass
{
    abstract static public function getTaxi(): Taxi;
}