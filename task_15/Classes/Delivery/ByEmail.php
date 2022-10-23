<?php

declare(strict_types=1);

namespace Classes\Delivery;

use Interfaces\Delivery;

class ByEmail implements Delivery
{
    public function getDelivery(string $formattedString): string
    {
        $message = 'Вывод формата ('.$formattedString.') по имейл';

        return $message;
    }
}