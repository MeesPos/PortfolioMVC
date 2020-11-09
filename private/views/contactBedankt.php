<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact | Mees Postma</title>
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
    <meta name="og:title" property="og:title" content="Contact | Mees Postma">
    <meta name="description" content="<?php getContentCurrentLang('about_header', $content)?>">
    <meta name="twitter:card" content="<?php getContentCurrentLang('about_header', $content)?>">
    <meta name="keywords" content="Mees Postma, Mees, Postma, Mediacollege, Amsterdam, Mediacollege Amsterdam, Nederland, Software developer,
    Website developer, Hubsor, Hubsor website, Hubsor eigenaar, Hubsor Mees, Websites, Website, SEO, The Netherlands, Holland, Dutch">
    <link rel="stylesheet" href="<?php echo site_url('/css/style.css') ?>">
    <script src="https://kit.fontawesome.com/a82e000026.js"></script>
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

<body class="subPage">
    <?php if ($this->section('navigation')) : ?>
        <?php echo $this->section('navigation') ?>
    <?php else : ?>
        <?php echo $this->fetch('_navigation') ?>
    <?php endif ?>

    <header id="subHeader">
        <div class="subContent">
            <h1>Contact</h1>
        </div>
    </header>

    <section id="contactMij">
        <div class="gegevens">
            <h2><?php getContentCurrentLang('contact_title', $content) ?></h2>
            <p><?php getContentCurrentLang('contactpage_desc', $content) ?></p>

            <div class="gegevensValues">
                <div class="gegevensCo">
                    <p class="icon"><i class="fas fa-user-alt"></i></p>
                    <p class="gegevensValue">Mees Postma</p>
                </div>

                <div class="gegevensCo">
                    <p class="icon"><i class="fas fa-envelope"></i></p>
                    <a class="gegevensValue" href="mailto:mail@meespostma.nl" style="width: 150px">mail@meespostma.nl</a>
                </div>
            </div>
        </div>

        <div class="contactForm">
            <i class="fas fa-check"></i>
            <h2><?php getContentCurrentLang('message_sent', $content) ?></h2>
        </div>
    </section>

    <?php if ($this->section('footer')) : ?>
        <?php echo $this->section('footer') ?>
    <?php else : ?>
        <?php echo $this->fetch('_footer') ?>
    <?php endif ?>
</body>

</html>