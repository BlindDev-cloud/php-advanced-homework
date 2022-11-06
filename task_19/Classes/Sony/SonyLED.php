<?php

declare(strict_types=1);

namespace Classes\Sony;

use Interfaces\TVs\LED;

class SonyLED implements LED
{
    public function getInfo(): string
    {
        return 'LED TV by Sony';
    }
}