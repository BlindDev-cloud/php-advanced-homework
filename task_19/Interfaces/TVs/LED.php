<?php

declare(strict_types=1);

namespace Interfaces\TVs;

interface LED
{
    public function getInfo(): string;
}