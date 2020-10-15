<!DOCTYPE html>
<html lang="en" class="projectDetails">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php foreach ($projectDetails as $row) { ?>
        <title><?php echo $row['projectnaam'] ?> | Mees Postma</title>
        <link rel="stylesheet" href="<?php echo site_url('/css/style.css') ?>">
        <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css">
</head>

<body class="projectDetail subPage">
    <?php if ($this->section('navigation')) : ?>
        <?php echo $this->section('navigation') ?>
    <?php else : ?>
        <?php echo $this->fetch('_navigation') ?>
    <?php endif ?>

    <header id="subHeader">
        <div class="subContent">
            <h1><?php echo $row['projectnaam']; ?></h1><?php } ?>
        </div>
    </header>

    <section id="projectInfo">
        <div class="container">
            <div id="js-gallery" class="gallery">
                <div class="gallery__hero">
                    <?php $imageCount = 0;
                    foreach ($images as $row) { ?>
                        <img src="<?php echo site_url('/img/projectImages/' . $row['image_naam']) ?>">
                    <?php $imageCount += 1;

                        if ($imageCount >= 1) {
                            break;
                        }
                    } ?>
                </div>

                <div class="gallery__thumbs">
                    <?php $classCount = 0;
                    foreach($images as $row) :
                        if($classCount === 0) { ?>
                        <a href="<?php echo site_url('/img/projectImages/' . $row['image_naam']) ?>" data-gallery="thumb" class="is-active">
                            <img src="<?php echo site_url('/img/projectImages/' . $row['image_naam']) ?>">
                        </a>

                        <?php $classCount += 1; ?>
                        
                        <?php } else { ?>
                            <a href="<?php echo site_url('/img/projectImages/' . $row['image_naam']) ?>" data-gallery="thumb">
                                <img src="<?php echo site_url('/img/projectImages/' . $row['image_naam']) ?>">
                            </a>
                        <?php }
                    endforeach; ?>
                </div>
            </div>
        </div>

        <div class="projectInfoText">
            <?php foreach ($projectDetails as $row) : ?>
                <h2 class="overProject">Over dit <span style="font-weight: bold;">Project</span></h2>
                <h3 class="soortProject">
                    <p><?php echo $row['soort'] ?></p>
                </h3>
                <p class="projectSamenvatting"><?php echo limit_text($row['content'], 30); ?></p>
                <div class="specificatiesProj">
                    <div class="gemaaktMet">
                        <h3>Gemaakt met: </h3>
                        <div class="madeItem">
                            <?php foreach ($madeWith as $made) : ?>
                                <?php $methods[] = $made['naam'];
                                $result = implode(', ', $methods); ?>
                            <?php endforeach;

                            echo $result; ?>
                        </div>
                    </div>

                    <div class="taal">
                        <h3>Taal: </h3>
                        <p><?php echo $row['taal']; ?></p>
                    </div>
                </div>

                <div class="gemaaktButtons">
                    <?php if ($row['github'] === NULL) { ?>
                        <a href="<?php echo $row['liveversie'] ?>" target="_blank">
                            <button>Live versie</button>
                        </a>
                    <?php } else { ?>
                        <a href="<?php echo $row['liveversie'] ?>" target="_blank">
                            <button>Live versie</button>
                        </a>

                        <a href="<?php echo $row['github'] ?>" target="_blank">
                            <button><i class="fab fa-github"></i> Github</button>
                        </a>
                    <?php } ?>
                </div>
            <?php endforeach; ?>
        </div>
    </section>

    <section id="meerinfo">
        <div class="infoContent">
            <h2>Meer over <span style="font-weight: bold;">dit Project</span></h2>
            <p><?php echo $row['content']; ?></p>
        </div>
    </section>

    <?php if ($this->section('contactSection')) : ?>
        <?php echo $this->section('contactSection') ?>
    <?php else : ?>
        <?php echo $this->fetch('_contactSection') ?>
    <?php endif ?>

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
    </body>

</html>