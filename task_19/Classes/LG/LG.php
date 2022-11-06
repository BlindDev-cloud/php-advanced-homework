<?php

declare(strict_types=1);

namespace Classes\LG;

use Interfaces\TVCompany;
use Interfaces\TVs\LCD;
use Interfaces\TVs\LED;

class LG implements TVCompany
{
    public static function getLCDTV(): LCD
    {
        return new LGLCD();
    }

    public static function getLEDTV(): LED
    {
        return new LGLED();
    }
}