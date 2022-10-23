<?php

declare(strict_types=1);

namespace Classes\Delivery;

use Interfaces\Delivery;

class BySMS implements Delivery
{
    public function getDelivery(string $formattedString): string
    {
        $message = 'Вывод формата (' . $formattedString . ') в смс';

        return $message;
    }
}