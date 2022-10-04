<?php

session_start();

require_once __DIR__ . '/../functions/database.php';
require_once __DIR__ . '/../functions/alerts.php';

// 1. check buffer

if(empty($_SESSION['buffer'])){
    set_alert('warning', 'Buffer is clean');

    header('Location: '.$_SERVER['HTTP_REFERER']);

    exit();
}

// 2. get user data

if(!isset($_SESSION['users'])) {
    $_SESSION['users'] = [];
}

$pdo = get_database_connection();

$query = 'SELECT * FROM `users`
            WHERE `id`=:id';

$ids = $_SESSION['buffer'];

foreach ($ids as $id){
    $statement = $pdo->prepare($query);

    $statement->execute(compact('id'));

    $_SESSION['users'][] = $statement->fetch();
}

// 3. redirect back to table page

header('Location: /public/git-repos/php-advanced-homework/task_13/additional-user-info.php');
