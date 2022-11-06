<?php

declare(strict_types=1);

namespace Interfaces;

use Interfaces\TVs\LCD;
use Interfaces\TVs\LED;

interface TVCompany
{
    public static function getLEDTV(): LED;

    public static function getLCDTV(): LCD;
}