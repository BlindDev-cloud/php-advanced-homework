<?php

declare(strict_types=1);

namespace Classes;

use InvalidArgumentException;

class Money
{
    private int|float $amount;
    private Currency $currency;

    public function __construct(
        float|int $amount,
        Currency $currency
    )
    {
        $this->setAmount($amount);
        $this->setCurrency($currency);
    }

    public function setAmount(float|int $amount): void
    {
        if(!preg_match('/^-?\d+(\.\d{1,2})?$/', (string)$amount)){
            throw new InvalidArgumentException(message: 'Amount can only have 2 digits after the decimal point');
        }

        $this->amount = $amount;
    }

    public function getAmount(): float|int
    {
        return $this->amount;
    }

    public function setCurrency(Currency $currency): void
    {
        $this->currency = $currency;
    }

    public function getCurrency(): Currency
    {
        return $this->currency;
    }

    public function equals(Money $money) :bool
    {
        return $this->getAmount() === $money->getAmount() && $this->getCurrency()->equals($money->getCurrency());
    }

    public function add(Money $money):void
    {
        if(!$this->getCurrency()->equals($money->getCurrency())){
            throw new InvalidArgumentException(message: 'Money have different currencies');
        }

        $amount = $this->getAmount() + $money->getAmount();

        $this->setAmount($amount);
    }
}