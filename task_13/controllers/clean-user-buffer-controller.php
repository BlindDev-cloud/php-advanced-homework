<?php

session_start();

require_once __DIR__.'/../functions/alerts.php';

if(empty($_SESSION['buffer'])){
    set_alert('warning', 'Buffer is clean');

    header('Location: '.$_SERVER['HTTP_REFERER']);

    exit();
}

$_SESSION['buffer'] = [];

set_alert('success', 'Buffer is clean');

header('Location: '.$_SERVER['HTTP_REFERER']);