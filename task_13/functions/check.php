<?php

declare(strict_types=1);

function isset_vars(mixed ...$vars): bool
{
    foreach ($vars as $var) {
        if (!isset($var)) {
            return false;
        }
    }

    return true;
}

function is_email(string $email): bool
{
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        return false;
    }

    return true;
}

function user_exists(int $id, PDO $pdo) : bool
{
    $query = 'SELECT `id` FROM `users`';

    $statement = $pdo->query($query);

    while($user = $statement->fetch()){
        if($id === $user['id']){
          return true;
        }
    }

    return false;
}