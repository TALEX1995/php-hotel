<?php

include 'data/data.php';

$hotel_data = array_keys($hotels[0]);



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

    <!-- Table with Hotels -->

    <div class="container">


        <form action="index.php" class="my-5" method="GET">
            <!-- Parking -->
            <label for="parking">Parcheggio</label>
            <input id="parking" type="checkbox" name="parking" value="true">

            <!-- Hotel vote -->
            <select class="form-select my-3" aria-label="Default select example" name="hotel-vote">
                <option selected>Cerca l'hotel in base al voto</option>
                <option value="1">Uno</option>
                <option value="2">Due</option>
                <option value="3">Tre</option>
                <option value="4">Quattro</option>
                <option value="5">Cinque</option>
            </select>


            <button type="submit">Filtra</button>
        </form>


        <table class="table">
            <thead>
                <tr>
                    <?php foreach ($hotel_data as $data) : ?>
                        <th scope="col"><?= str_replace('_', ' ', ucfirst($data)) ?></th>
                    <?php endforeach ?>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($hotels as $hotel) : ?>
                    <tr>
                        <?php foreach ($hotel as $data => $info) : ?>

                            <?php if (($data === 'parking') && ($info === true)) : ?>
                                <td>Yes</td>

                            <?php elseif (($data === 'parking') && ($info === false)) : ?>
                                <td>No</td>

                            <?php else : ?>
                                <td><?= $info ?></td>
                            <?php endif ?>

                        <?php endforeach ?>
                    </tr>
                <? endforeach ?>
            </tbody>
        </table>

    </div>
</body>

</html>