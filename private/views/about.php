<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Over Mij | Mees Postma</title>
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
    <meta name="og:title" property="og:title" content="Over Mij | Mees Postma">
    <link rel="stylesheet" href="<?php echo site_url('/css/style.css') ?>">
    <meta name="description" content="<?php getContentCurrentLang('about_header', $content)?>">
	<meta name="twitter:card" content="<?php getContentCurrentLang('about_header', $content)?>">
    <meta name="keywords" content="Mees Postma, Mees, Postma, Mediacollege, Amsterdam, Mediacollege Amsterdam, Nederland, Software developer,
    Website developer, Hubsor, Hubsor website, Hubsor eigenaar, Hubsor Mees, Websites, Website, SEO, The Netherlands, Holland, Dutch">
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
            <h1><?php getContentCurrentLang('about_title', $content)?></h1>
        </div>
    </header>

    <section id="introductie">
        <div class="heroAboutMe">
            <img src="<?php echo site_url('/img/aboutIntro.png') ?>" alt="Mees Postma, Over mij introductie Illustration">
        </div>

        <div class="introductionAboutMe">
            <h3><?php getContentCurrentLang('about_hello', $content)?></h3>
            <h2>Mees Postma</h2>
            <p><?php getContentCurrentLang('about_me', $content)?></p>

            <a href="<?php echo site_url('/img/cv-mees-postma.pdf') ?>" target="_blank">
                <button class="blueButton"><?php getContentCurrentLang('my_resume', $content)?></button>
            </a>
    </section>

    <section id="skillset">
        <h2><?php getContentCurrentLang('skills_title', $content)?></h2>
        <p><?php getContentCurrentLang('skills_desc', $content)?></p>
        <div class="skills">
            <?php foreach ($skills as $row) : ?>
                <div class="skill">
                    <div class="icon">
                        <i class="<?php echo $row['fa-class'] ?>"></i>
                    </div>

                    <div class="skillinfo">
                        <h4 style="width: 160%;" class="skill-name"><?php echo $row['skillnaam_' . currentLanguage()]; ?></h4>
                        <h4 class="skill-niveau"><?php echo $row['niveau_' . currentLanguage()]; ?></h4>
                    </div>
                </div>
            <?php endforeach; ?>
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
</body>

</html>