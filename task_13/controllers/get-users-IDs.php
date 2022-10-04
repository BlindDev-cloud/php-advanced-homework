<?php

session_start();

require_once __DIR__.'/../functions/database.php';

$pdo = get_database_connection();

$statement = $pdo->query('SELECT `id` FROM `users`');

if(!isset($_SESSION['ids']) || !empty($_SESSION['ids'])){
    $_SESSION['ids'] = [];
}

$id = [];

while ($id = $statement->fetch()){
    $_SESSION['ids'][] = $id;
}

header('Location: /public/git-repos/php-advanced-homework/task_13/user-IDs-table.php');
