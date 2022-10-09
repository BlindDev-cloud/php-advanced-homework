<?php

declare(strict_types=1);

namespace Classes\Format;

use Interfaces\Format;

class Row implements Format
{
    public function getFormattedString(string $string): string
    {
        return $string;
    }
}