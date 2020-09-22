<!DOCTYPE html>
<html lang="en" class="projectDetails">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home | Mees Postma</title>
    <link rel="stylesheet" href="<?php echo site_url('/css/style.css') ?>">
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css">
</head>

<body class="projectDetail">
    <?php if ($this->section('navigation')) : ?>
        <?php echo $this->section('navigation') ?>
    <?php else : ?>
        <?php echo $this->fetch('_navigation') ?>
    <?php endif ?>

    <header id="subHeader">
        <?php foreach ($projectDetails as $row) { ?>
            <h1><?php echo $row['projectnaam']; ?></h1><?php
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
                    <a href="https://cdn.thecrazytourist.com/wp-content/uploads/2018/02/Boat-Trips.jpg" data-gallery="thumb">
                        <img src="https://cdn.thecrazytourist.com/wp-content/uploads/2018/02/Boat-Trips.jpg">
                    </a>
                </div>
            </div>
        </div>

        <div class="projectInfoText">
            <?php foreach ($projectDetails as $row) : ?>
                <h2 class="overProject">Over dit <span style="font-weight: bold;">Project</span></h2>
                <h3 class="soortProject">
                    <p><?php echo $row['categorie'] ?></p>
                </h3>
                <p class="projectSamenvatting"><?php echo $row['samenvatting'] ?></p>
                <div class="specificatiesProj">
                    <div class="gemaaktMet">
                        <h3>Gemaakt met: </h3>
                        <?php foreach ($madeWith as $made) : ?>
                            <div class="madeItem">
                                <p><?php echo $made['naam']; ?>,</p>
                            </div>
                        <?php endforeach; ?>
                    </div>

                    <div class="taal">
                        <h3>Taal: </h3>
                        <p><?php echo $row['taal']; ?></p>
                    </div>
                </div>
            <?php endforeach; ?>

            <div class="gemaaktButtons">
                <a href="#">
                    <button>Live versie</button>
                </a>

                <a href="#">
                    <button><i class="fab fa-github"></i> Github</button>
                </a>
            </div>
        </div>
    </section>

    <section id="meerinfo">
        <div class="infoContent">
            <h2>Meer over <span style="font-weight: bold;">dit Project</span></h2>
            <p><?php echo $row['content']; ?></p>
        </div>
    </section>
    <?php if ($this->section('footer')) : ?>
        <?php echo $this->section('footer') ?>
    <?php else : ?>
        <?php echo $this->fetch('_footer') ?>
    <?php endif ?>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-zoom/1.7.21/jquery.zoom.js"></script>
    <script src="https://kit.fontawesome.com/a82e000026.js"></script>
    <script src="<?php echo site_url('/js/gallery.js') ?>"></script>
</body=>

</html>