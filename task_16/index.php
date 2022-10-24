<?php

spl_autoload_register(function ($namespace) {

    $file = str_replace(search: '\\', replace: '/', subject: $namespace);
    $path = __DIR__ . '/' . $file . '.php';

    require_once $path;
});

