<?php

spl_autoload_register(function ($namespace) {

    $file = str_replace(search: '\\', replace: '/', subject: $namespace);
    $path = __DIR__ . '/' . $file . '.php';

    require_once $path;
});

use Classes\LG\LG;
use Classes\Sony\Sony;
use Interfaces\TVCompany;

function listTVs(TVCompany $company): void
{
    $TVs = [];

    $TVs[] = $company::getLCDTV();
    $TVs[] = $company::getLEDTV();

    foreach ($TVs as $TV) {
        echo $TV->getInfo() . PHP_EOL;
    }
}

listTVs(new Sony);
echo PHP_EOL;
listTVs(new LG);

