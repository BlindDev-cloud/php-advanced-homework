<?php

spl_autoload_register(function ($namespace) {

    $file = str_replace(search: '\\', replace: '/', subject: $namespace);
    $path = __DIR__ . '/' . $file . '.php';

    require_once $path;
});

use Classes\Logger;
use Classes\Format\{Row, WithDate, WithDateAndDetails};
use Classes\Delivery\{ByEmail, BySMS, ToConsole};

$logger = new Logger(new Row(), new ByEmail());
$logger->log('Emergency error! Please fix me!');

$dateLogger = new Logger(new WithDate(), new BySMS());
$dateLogger->log('Test error');

$consoleLogger = new Logger(new WithDateAndDetails(), new ToConsole());
$consoleLogger->log('Some error');