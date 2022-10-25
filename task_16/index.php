<?php

spl_autoload_register(function ($namespace) {

    $file = str_replace(search: '\\', replace: '/', subject: $namespace);
    $path = __DIR__ . '/' . $file . '.php';

    require_once $path;
});

use Classes\TaxiClasses\{
    TaxiClass,
    LuxuryClass,
    StandardClass,
    EconomyClass
};

function orderTaxi(TaxiClass $taxi): void
{
    echo 'Taxi model: ' . $taxi::getTaxi()->getModel() . PHP_EOL;
    echo 'Cost: ' . $taxi::getTaxi()->getCost() . PHP_EOL;
}

echo 'Order standard class taxi:' . PHP_EOL;
orderTaxi(new StandardClass());
echo PHP_EOL;

echo 'Order luxury class taxi:' . PHP_EOL;
orderTaxi(new LuxuryClass());
echo PHP_EOL;

echo 'Order economy class taxi:' . PHP_EOL;
orderTaxi(new EconomyClass());

