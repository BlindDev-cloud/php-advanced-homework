<?php

declare(strict_types=1);

namespace Classes;

use Interfaces\{Format, Delivery};

class Logger
{
    private Format $format;
    private Delivery $delivery;

    public function __construct(Format $format, Delivery $delivery)
    {
        $this->format = $format;
        $this->delivery = $delivery;
    }

    public function log(string $string): void
    {
        $this->deliver($this->format($string));
    }

    private function format(string $string): string
    {
        return $this->format->getFormattedString($string);
    }

    private function deliver(string $formattedString): void
    {
        echo $this->delivery->getDelivery($formattedString) . PHP_EOL;
    }
}
