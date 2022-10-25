<?php

declare(strict_types=1);

namespace Classes\TaxiClasses;

use Classes\Taxis\LuxuryTaxi;
use Interfaces\Taxi;

class LuxuryClass extends TaxiClass
{
    static public function getTaxi(): Taxi
    {
        return new LuxuryTaxi();
    }
}