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