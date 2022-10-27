<?php

declare(strict_types=1);

namespace Classes\LG;

use Interfaces\TVs\LED;

class LGLED implements LED
{
    public function getInfo(): string
    {
        return 'LED TV by LG';
    }
}