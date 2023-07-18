<?php

include 'data/data.php';
include 'data/my_logic.php';

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
        <!-- Form -->
        <?php include 'partials/form.html'; ?>

        <!-- Table -->
        <?php include 'partials/table_hotels.php'; ?>
    </div>
</body>

</html>