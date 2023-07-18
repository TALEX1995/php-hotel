<?php

include 'data/data.php';



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Hotel</title>
</head>

<body>
    <?php foreach ($hotels as $hotel) : ?>
        <ul>
            <?php foreach ($hotel as $info => $data) : ?>
                <li><strong><?= $info ?></strong> : <?= $data ?></li>
            <?php endforeach ?>
        </ul>
    <?php endforeach ?>
</body>

</html>