<?php

declare(strict_types=1);

function get_database_connection(): PDO
{
    static $pdo = null;

    if (null === $pdo) {
        $dsn = 'mysql:host=mysql;port=3306;dbname=db;charset=utf8mb4';

        $pdo = new PDO(dsn: $dsn, username: 'root', password: 'secret', options: [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES => false
        ]);
    }

    return $pdo;
}