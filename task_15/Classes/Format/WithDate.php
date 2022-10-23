<?php

declare(strict_types=1);

namespace Classes\Format;

use Interfaces\Format;

class WithDate implements Format
{
    public function getFormattedString(string $string): string
    {
        return date('Y-m-d H:i:s ') . $string;
    }
}