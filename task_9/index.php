<?php

require_once __DIR__.'/Classes/Currency.php';
require_once __DIR__.'/Classes/Money.php';

use Classes\{
    Currency, Money
};

try {

    $currency = new Currency('pab');
    echo 'Currency->equals: ';
    echo $currency->equals(new Currency('uah')) ? 'Yes' : 'No';
    echo PHP_EOL;

    $money = new Money(12.65, new Currency('PAB'));

    echo 'Money->equals: ';
    echo $money->equals(new Money(12.65, $currency)) ? 'Yes' : 'No';
    echo PHP_EOL;

    echo $money->getAmount() . ' --> ';
    $money->add(new Money(16.31, new Currency('pab')));
    echo $money->getAmount() . PHP_EOL;
    $money->add(new Money(16.31, new Currency('uah')));

}catch (InvalidArgumentException $exception){
    echo $exception->getMessage().PHP_EOL;
}
