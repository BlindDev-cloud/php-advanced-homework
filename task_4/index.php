<?php

require_once __DIR__.'/classes/Color.php';

try {
    $color = new Color(7, 15, 1);

    $color->setBlue(431);
}
catch (Exception $exception){
    echo $exception->getMessage().PHP_EOL;
}
