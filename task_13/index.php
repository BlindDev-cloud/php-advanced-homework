<?php

require_once __DIR__.'/functions/database.php';

$pdo = get_database_connection();

$table = $pdo->query('SELECT * FROM INFORMATION_SCHEMA.TABLES WHERE table_schema=\'db\' AND table_name=\'users\'')->fetch();

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Main Page</title>
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body class="bg-dark text-light">

<header>

    <h1 class="text-center pt-4">User control</h1>

</header>

<main class="pb-5">

    <div class="container">

        <div class="row justify-content-center">

            <div class="col col-lg-4 mt-5" style="background-color: rgb(0, 25, 37);">

                    <?php if(!$table): ?>

                    <div class="my-3">

                        <a href="controllers/create-users-table-controller.php" class="btn btn-lg btn-primary d-block w-100">
                            Create table
                        </a>

                    </div>

                    <?php else: ?>

                        <p class="h4 text-success text-center">
                            Table users created
                        </p>

                        <div class="my-4">

                            <a href="create-user-form.php" class="btn btn-lg btn-secondary d-block w-100">
                                Add user
                            </a>

                        </div>

                        <div class="my-4">

                            <a href="controllers/get-users-IDs.php" class="btn btn-lg btn-secondary d-block w-100">
                                Go to users table
                            </a>

                        </div>

                    <?php endif; ?>

            </div>

        </div>

    </div>

</main>

<footer></footer>

</body>
</html>