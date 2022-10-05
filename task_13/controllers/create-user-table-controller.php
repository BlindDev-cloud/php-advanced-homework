<?php

require_once __DIR__ . '/../functions/database.php';

$pdo = get_database_connection();

if (user_table_exists($pdo)) {
    header('Location: ' . $_SERVER['HTTP_REFERER']);

    exit();
}

$pdo->query('CREATE TABLE users(
    id BIGINT UNSIGNED PRIMARY KEY NOT NULL AUTO_INCREMENT,
    name VARCHAR(150) NOT NULL,
    surname VARCHAR(150) NOT NULL,
    age TINYINT NOT NULL,
    email VARCHAR(100) UNIQUE NOT NULL
)');

header('Location: ' . $_SERVER['HTTP_REFERER']);
