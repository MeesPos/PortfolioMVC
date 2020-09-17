<!DOCTYPE html>
<html lang="en" class="projectDetails">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home | Mees Postma</title>
    <link rel="stylesheet" href="<?php echo site_url('/css/style.css') ?>">
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css">
</head>

<body>
    <header id="subHeader">
        <?php foreach ($projectDetails as $row) {
        ?><h1><?php echo $row['projectnaam']; ?></h1><?php
                                                    } ?>
    </header>

    <section id="projectInfo">
        <div class="container">
            <div id="js-gallery" class="gallery">
                <div class="gallery__hero">
                    <img src="https://cdn.thecrazytourist.com/wp-content/uploads/2018/02/Boat-Trips.jpg">
                </div>

                <div class="gallery__thumbs">
                    <a href="https://cdn.thecrazytourist.com/wp-content/uploads/2018/02/Boat-Trips.jpg" data-gallery="thumb" class="is-active">
                        <img src="https://cdn.thecrazytourist.com/wp-content/uploads/2018/02/Boat-Trips.jpg">
                    </a>
                    <a href="https://cdn.thecrazytourist.com/wp-content/uploads/2018/02/Boat-Trips.jpg" data-gallery="thumb">
                        <img src="https://cdn.thecrazytourist.com/wp-content/uploads/2018/02/Boat-Trips.jpg">
                    </a>
                    <a href="https://cdn.thecrazytourist.com/wp-content/uploads/2018/02/Boat-Trips.jpg" data-gallery="thumb">
                        <img src="https://cdn.thecrazytourist.com/wp-content/uploads/2018/02/Boat-Trips.jpg">
                    </a>
                </div>
            </div>
        </div>

        <!-- Projectinformatie -->
    </section>


    <!-- Beschrijving van Project -->
    <!-- Link naar project -->

    <!-- Specificaties -->
    <!-- Code Informatie -->

    <!-- Overige images -->

    <!-- Contact verwijzing -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-zoom/1.7.21/jquery.zoom.js"></script>
    <script src="<?php echo site_url('/js/gallery.js') ?>"></script>
</body>

</html>