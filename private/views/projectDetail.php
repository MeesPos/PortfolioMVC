<!DOCTYPE html>
<html lang="en" class="projectDetails">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php foreach ($projectDetails as $row) { ?>
        <title><?php echo $row['projectnaam'] ?> | Mees Postma</title>
        <meta name="og:title" property="og:title" content="<?php echo $row['projectnaam'] ?> | Mees Postma">
        <meta name="description" content="<?php echo limit_text($text=str_ireplace('<p>','',$row['content']), 30) ?> | Mees Postma">
        <meta name="twitter:card" content="<?php echo limit_text($text=str_ireplace('<p>','',$row['content']), 30) ?> | Mees Postma">
        <meta name="keywords" content="Mees Postma, Mees, Postma, Mediacollege, Amsterdam, Mediacollege Amsterdam, Nederland, Software developer,
        Website developer, Hubsor, Hubsor website, Hubsor eigenaar, Hubsor Mees, Websites, Website, SEO, The Netherlands, Holland, Dutch">
    <?php } ?>
    <link rel="shortcut icon" href="<?php echo site_url('/img/logo/favicon/favicon.ico') ?>" type="image/x-icon" />
    <link rel="apple-touch-icon" href="<?php echo site_url('/img/logo/favicon/apple-touch-icon.png') ?>" />
    <link rel="apple-touch-icon" sizes="57x57" href="<?php echo site_url('/img/logo/favicon/apple-touch-icon-57x57.png') ?>" />
    <link rel="apple-touch-icon" sizes="72x72" href="<?php echo site_url('/img/logo/favicon/apple-touch-icon-72x72.png') ?>" />
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo site_url('/img/logo/favicon/apple-touch-icon-76x76.png') ?>" />
    <link rel="apple-touch-icon" sizes="114x114" href="<?php echo site_url('/img/logo/favicon/apple-touch-icon-114x114.png') ?>" />
    <link rel="apple-touch-icon" sizes="120x120" href="<?php echo site_url('/img/logo/favicon/apple-touch-icon-120x120.png') ?>" />
    <link rel="apple-touch-icon" sizes="144x144" href="<?php echo site_url('/img/logo/favicon/apple-touch-icon-144x144.png') ?>" />
    <link rel="apple-touch-icon" sizes="152x152" href="<?php echo site_url('/img/logo/favicon/apple-touch-icon-152x152.png') ?>" />
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo site_url('/img/logo/favicon/apple-touch-icon-180x180.png') ?>" />
    <link rel="stylesheet" href="<?php echo site_url('/css/style.css') ?>">
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css">
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-152808621-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-152808621-1');
    </script>
</head>

<body class="projectDetail subPage">
    <?php if ($this->section('navigation')) : ?>
        <?php echo $this->section('navigation') ?>
    <?php else : ?>
        <?php echo $this->fetch('_navigation') ?>
    <?php endif ?>

    <?php foreach ($projectDetails as $row) { ?>
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
                        foreach ($images as $row) :
                            if ($classCount === 0) { ?>
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
                    <h2 class="overProject"><?php getContentCurrentLang('aboutproject_title', $content)?></h2>
                    <h3 class="soortProject">
                        <p><?php echo $row['soort'] ?></p>
                    </h3>
                    <div class="projectSamenvatting">
                        <?php echo limit_text($row['content_' . $_SESSION['lang']], 30); ?>
                    </div>
                    <div class="specificatiesProj">
                        <div class="gemaaktMet">
                            <h3><?php getContentCurrentLang('made_with', $content)?>: </h3>
                            <div class="madeItem">
                                <?php foreach ($madeWith as $made) : ?>
                                    <?php $methods[] = $made['naam'];
                                    $result = implode(', ', $methods); ?>
                                <?php endforeach;

                                echo $result; ?>
                            </div>
                        </div>

                        <div class="taal">
                            <h3><?php getContentCurrentLang('language', $content)?>: </h3>
                            <p><?php echo $row['taal']; ?></p>
                        </div>
                    </div>

                    <div class="gemaaktButtons">
                        <?php if ($row['github'] === NULL) { ?>
                            <a href="<?php echo $row['liveversie'] ?>" target="_blank">
                                <button><?php getContentCurrentLang('live_version', $content)?></button>
                            </a>
                        <?php } else { ?>
                            <a href="<?php echo $row['liveversie'] ?>" target="_blank">
                                <button><?php getContentCurrentLang('live_version', $content)?></button>
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
                <h2><?php getContentCurrentLang('more_about_project', $content)?></span></h2>
                <p><?php echo $row['content_' . $_SESSION['lang']]; ?></p>
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