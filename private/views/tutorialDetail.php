<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    <?php foreach ($tutorial as $row) : ?>
        <title><?php echo $row['titel_' . currentLanguage()] ?> | Mees Postma</title>
        <meta name="og:title" property="og:title" content="<?php echo $row['titel'] ?> | Mees Postma">
        <meta name="description" content="<?php echo limit_text($row['content'], 30) ?> | Mees Postma">
        <meta name="twitter:card" content="<?php echo limit_text($row['content'], 30) ?> | Mees Postma">
        <meta name="keywords" content="Mees Postma, Mees, Postma, Mediacollege, Amsterdam, Mediacollege Amsterdam, Nederland, Software developer,
        Website developer, Hubsor, Hubsor website, Hubsor eigenaar, Hubsor Mees, Websites, Website, SEO, The Netherlands, Holland, Dutch">
    <?php endforeach; ?>
    <link rel="stylesheet" href="<?php echo site_url('/css/style.css') ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
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

<body class="tutorialsBody subPage">
    <?php if ($this->section('navigation')) : ?>
        <?php echo $this->section('navigation') ?>
    <?php else : ?>
        <?php echo $this->fetch('_navigation') ?>
    <?php endif ?>

    <header id="subHeader">
        <div class="subContent">
            <?php foreach ($tutorial as $row) : ?>
            <?php endforeach; ?>
        </div>
    </header>

    <section id="blogContent">
        <div class="blogTekst">
            <?php foreach ($tutorial as $row) : ?>
                <h1><?php echo $row['titel_' . currentLanguage()]; ?></h1>
                <p><?php echo $row['content_' . currentLanguage()]; ?></p>
            <?php endforeach; ?>
        </div>

        <aside id="tutorialAside">
            <div class="aboutmeAside">
                <img src="<?php echo site_url('/img/MeesFoto.jpeg') ?>" alt="Mees Postma">
                <h2><?php getContentCurrentLang('about_hello', $content)?> Mees Postma</h2>
                <p><?php getContentCurrentLang('aboutme_tutorial', $content)?>
                </p>

                <a href="<?php echo url('over') ?>"><?php getContentCurrentLang('more_me' , $content); ?> ></a>
            </div>

            <div class="overBericht">
                <h2><?php getContentCurrentLang('about_post', $content); ?></h2>
                <p><span style="font-weight: bold;"><?php getContentCurrentLang('posted', $content)?>:</span> <?php echo $row['datum'] ?></p>
                <p><span style="font-weight: bold;"><?php getContentCurrentLang('categories', $content)?>: </span>
                    <?php $catos = array();
                    foreach ($catogorie as $row) {
                        $catos[] = $row['cat_name'];
                        $result = implode(', ', $catos);
                    }
                    echo $result; ?>
                </p>
            </div>
        </aside>
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
</body>

</html>