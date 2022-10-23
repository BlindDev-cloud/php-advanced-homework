<?php

declare(strict_types=1);

namespace Interfaces;

interface Delivery
{
    public function getDelivery(string $formattedString): string;
}
