<?php

include 'data/data.php';

$hotel_info = array_keys($hotels[0]);

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
    <!-- <?php foreach ($hotels as $hotel) : ?>
        <ul>
            <?php foreach ($hotel as $info => $data) : ?>
                <li><strong><?= $info ?></strong> : <?= $data ?></li>
            <?php endforeach ?>
        </ul>
    <?php endforeach ?> -->

    <!-- Table with Hotels -->
    <table class="table">
        <thead>
            <tr>
                <?php foreach ($hotel_info as $info) : ?>
                    <th scope="col"><?= str_replace('_', ' ', ucfirst($info)) ?></th>
                <?php endforeach ?>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
            </tr>
        </tbody>
    </table>
</body>

</html>