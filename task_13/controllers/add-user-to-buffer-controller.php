<?php

session_start();

require_once __DIR__ . '/../functions/database.php';
require_once __DIR__ . '/../functions/alerts.php';
require_once __DIR__.'/../functions/check.php';

// 1. Check id in GET request

$id = $_GET['id'] ?? null;

if(!isset($id)){
    set_alert('danger', 'Id is required');

    header('Location: '.$_SERVER['HTTP_REFERER']);

    exit();
}

// 2. Validate id

if(!is_numeric($id)){
    set_alert('danger', 'Invalid id');

    header('Location: '.$_SERVER['HTTP_REFERER']);

    exit();
}

// 3. Check id in database

$pdo = get_database_connection();

if(!user_exists($id, $pdo)){
    set_alert('danger', 'User doesn`t exist');

    header('Location: '.$_SERVER['HTTP_REFERER']);

    exit();
}

// 4. Add id to buffer session

if(!isset($_SESSION['buffer'])){
    $_SESSION['buffer'] = [];
}

if(in_array($id, $_SESSION['buffer'])) {
   set_alert('warning', 'User already added');

   header('Location: '.$_SERVER['HTTP_REFERER']);

   exit();
}

$_SESSION['buffer'][] = $id;

// 5. redirect back to table page

set_alert('success', 'User successfully added');

header('Location: '.$_SERVER['HTTP_REFERER']);
