<?php

declare(strict_types=1);

namespace Classes\LG;

use Interfaces\TVs\LCD;

class LGLCD implements LCD
{
    public function getInfo(): string
    {
        return 'LCD TV by LG';
    }
}