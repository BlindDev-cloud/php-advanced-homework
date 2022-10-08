<?php

require_once __DIR__.'/Classes/Logger.php';

use Classes\Logger;

$logger = new Logger('raw', 'by_sms');
$logger->log('Emergency error! Please fix me!');
