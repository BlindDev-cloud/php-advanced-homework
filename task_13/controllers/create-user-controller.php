<?php

session_start();

require_once __DIR__.'/../functions/database.php';
require_once __DIR__.'/../functions/alerts.php';
require_once __DIR__.'/../functions/check.php';

// 1. check request method

if('POST' !== $_SERVER['REQUEST_METHOD']){
    set_alert('danger', 'Invalid request method');

    header('Location: ' . $_SERVER['HTTP_REFERER']);

    exit();
}

// 2. validate data

$name = strip_tags(preg_replace('/\s{2,}/', '', $_POST['name']));
$surname = strip_tags(preg_replace('/\s{2,}/', '', $_POST['surname']));
$age = $_POST['age'];
$email = $name = strip_tags(preg_replace('/\s/', '', $_POST['email']));

if(!isset_vars($name, $surname, $age, $email)){
    set_alert('danger', 'All data required');

    header('Location: ' . $_SERVER['HTTP_REFERER']);

    exit();
}

if(!is_numeric($age) || 0 > $age || 100 < $age){
    set_alert('danger', 'Invalid age');

    header('Location: ' . $_SERVER['HTTP_REFERER']);

    exit();
}

if(!is_email($email)){
    set_alert('danger', 'Invalid email');

    header('Location: ' . $_SERVER['HTTP_REFERER']);

    exit();
}

// 3. Check if user doesn`t already exist

$pdo = get_database_connection();

$query = 'SELECT `email` FROM `users`';

$statement = $pdo->query($query);

$emailList = $statement->fetchAll();

foreach ($emailList as $item){
    if(in_array($email, $item)){
        set_alert('warning', 'User already exists');

        header('Location: ' . $_SERVER['HTTP_REFERER']);

        exit();
    }
}

// 4. Add user to the database

$query = 'INSERT INTO `users`
            (`name`, `surname`, `age`, `email`)
                    VALUEs
                        (:name, :surname, :age, :email)';

$statement = $pdo->prepare($query);
$statement->execute(compact('name', 'surname', 'age', 'email'));

// 5. Go back to the form

set_alert('success', 'User is added');

header('Location: /public/git-repos/php-advanced-homework/task_13/create-user-form.php');
