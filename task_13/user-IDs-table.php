<?php

session_start();

require_once __DIR__.'/functions/alerts.php';
require_once __DIR__.'/functions/templates.php';

$userIds = $_SESSION['ids'];

$alerts = get_alerts();

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

    <h1 class="text-center pt-4">Users ids</h1>

</header>

<main class="mt-4">

    <div class="container">

        <div class="row justify-content-center">

            <?php foreach ($userIds as $user): ?>


                    <a href="controllers/add-user-to-buffer-controller.php?id=<?php echo $user['id']; ?>" class="btn btn-link btn-lg d-block text-light bg-dark" style="border: white 3px solid;">
                        <?php echo $user['id']; ?>
                    </a>


            <?php endforeach; ?>

        </div>

        <div class="row mt-5 justify-content-center" style="background-color: rgb(0, 25, 37);">

            <div class="col col-lg-3 my-3">
                <button type="button" class="btn btn-lg btn-secondary d-block w-100">
                    <a href="controllers/clean-user-buffer-controller.php" class="nav-link">
                        Clean buffer
                    </a>
                </button>
            </div>

            <div class="col col-lg-3 my-3">
                <button class="btn btn-lg btn-secondary d-block w-100">
                    Show info
                </button>
            </div>

            <div class="col col-lg-3 my-3">
                <button class="btn btn-lg btn-secondary d-block w-100">
                    Delete users
                </button>
            </div>

            <div class="my-3 w-100">

                <?php

                echo get_template_contents(__DIR__.'/templates/alerts.php', [
                    'alerts' => $alerts
                ]);

                ?>

            </div>

        </div>

    </div>

</main>

</body>
</html>