<?php

declare(strict_types=1);

namespace Classes\Sony;

use Interfaces\TVCompany;
use Interfaces\TVs\LCD;
use Interfaces\TVs\LED;

class Sony implements TVCompany
{
    public static function getLCDTV(): LCD
    {
        return new SonyLCD();
    }

    public static function getLEDTV(): LED
    {
        return new SonyLED();
    }
}