<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home | Mees Postma</title>
    <link rel="stylesheet" href="<?php echo site_url('/css/style.css') ?>">
</head>

<body>
    <header id="subHeader">
        <?php foreach($projectDetails as $row) {
            ?><h1><?php echo $row['projectnaam'];?></h1><?php
        } ?>
    </header>

    <!-- Image van Project -->

    <!-- Beschrijving van Project -->
    <!-- Link naar project -->

    <!-- Specificaties -->
    <!-- Code Informatie -->

    <!-- Overige images -->

    <!-- Contact verwijzing -->
</body>

</html>