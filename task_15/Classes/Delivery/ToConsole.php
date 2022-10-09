<?php

declare(strict_types=1);

namespace Classes\Delivery;

use Interfaces\Delivery;

class ToConsole implements Delivery
{
    public function getDelivery(string $formattedString): string
    {
        $message = 'Вывод формата (' . $formattedString . ') в консоль';

        return $message;
    }
}