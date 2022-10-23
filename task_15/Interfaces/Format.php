<?php

declare(strict_types=1);

namespace Interfaces;

interface Format
{
    public function getFormattedString(string $string) :string;
}
