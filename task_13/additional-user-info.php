<?php

session_start();

require_once __DIR__ . '/functions/templates.php';

$users = $_SESSION['users'];

$_SESSION['users'] = [];

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Users ids</title>
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body class="bg-dark text-light">

<header>

    <h1 class="text-center pt-4">Users info</h1>

</header>

<main class="mt-4">

    <div class="container">

        <table class="table">

            <thead>

            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Surname</th>
                <th scope="col">Age</th>
                <th scope="col">Email</th>
            </tr>

            </thead>

            <tbody>

            <?php if(!empty($users)): ?>

            <?php foreach ($users as $user): ?>

                <?php

                echo get_template_contents(__DIR__ . '/templates/user.php', [
                        'id' => $user['id'],
                        'name' => $user['name'],
                        'surname' => $user['surname'],
                        'age' => $user['age'],
                        'email' => $user['email']
                    ]
                );

                ?>

            <?php endforeach;; ?>

            <?php endif; ?>

            </tbody>

        </table>

        <div class="row mt-5 justify-content-center" style="background-color: rgb(0, 25, 37);">

            <div class="col col-lg-3 my-3">
                <button type="button" class="btn btn-lg btn-secondary d-block w-100">
                    <a href="user-IDs-table.php" class="nav-link">
                        Go back
                    </a>
                </button>
            </div>

        </div>

    </div>

</main>

</body>
</html>