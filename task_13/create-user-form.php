<?php

session_start();

require_once __DIR__.'/functions/alerts.php';
require_once __DIR__.'/functions/templates.php';


$alerts = get_alerts();

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add new user form</title>
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body class="bg-dark text-light">

<main class="py-5">

    <div class="container">

        <div class="row justify-content-center">

            <div class="col col-lg-4 mt-5" style="background-color: rgb(0, 25, 37);">

                <form action="controllers/create-user-controller.php" method="post">

                    <h1 class="text-center my-2">Add new user</h1>

                    <div class="my-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" name="name" id="name" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label for="surname" class="form-label">Surname</label>
                        <input type="text" name="surname" id="surname" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label for="age" class="form-label">Age</label>
                        <input type="number" name="age" id="age" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" name="email" id="email" class="form-control" required>
                    </div>

                    <div class="my-3">

                        <?php

                            echo get_template_contents(__DIR__.'/templates/alerts.php', [
                                    'alerts' => $alerts
                            ]);

                        ?>

                        <button type="submit" class="btn btn-lg btn-success d-block w-100">
                            Submit
                        </button>

                    </div>


                </form>

            </div>

        </div>

    </div>

</main>

</body>
</html>