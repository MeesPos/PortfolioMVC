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
    <meta name="description" content="Mijn naam is Mees Postma, ik ben een Software Developer en studeer aan het Mediacollege.
    Ook beheer ik mijn eigen bedrijf: Hubsor. Als u meer over mij wilt weten, neem een kijkje op deze pagina.">
    <meta name="twitter:card" content="Mijn naam is Mees Postma, ik ben een Software Developer en studeer aan het Mediacollege.
    Ook beheer ik mijn eigen bedrijf: Hubsor. Als u meer over mij wilt weten, neem een kijkje op deze pagina.">
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
            <h1>Over mij</h1>
        </div>
    </header>

    <section id="introductie">
        <div class="heroAboutMe">
            <img src="<?php echo site_url('/img/aboutIntro.png') ?>" alt="Mees Postma, Over mij introductie Illustration">
        </div>

        <div class="introductionAboutMe">
            <h3>Hallo, ik ben</h3>
            <h2>Mees Postma</h2>
            <p><strong>Ik ben een Software Developer uit Nederland</strong>. In 2019 ben ik
                begonnen met de opleiding Media developing op het Mediacollege Amsterdam.
                Hier leer ik websites maken, optimaliseren en ontwerpen. Maar ook om professioneel
                te worden op de markt.<br>
                <br>
                Buiten school ben ik ook bezig met mijn eigen bedrijf genaamd <a target="_blank" href="https://www.hubsor.nl/">Hubsor</a>
                samen met <a target="_blank" href="http://cornellvdstraaten.nl/">Cornell van der Straaten</a>. Wij hadden allebei interesse
                in het beginnen van een eigen bedrijf. Op Hubsor verkopen we online diensten zoals: Websites, SEO Optimalisatie & Online
                marketing services. Voor meer informatie, bezoek de website van <a target="_blank" href="https://www.hubsor.nl/"></a>.<br>
                <br>
                Ik wist al een paar jaar voordat ik met mijn opleiding begon dat ik iets wou doen met websites.
                Mijn interesse lag er altijd, het begon bij simpele <strong>HTML</strong> websites, of een <strong>Wordpress</strong> template gebruiken.
                Maar na een tijdje wou ik toch meer leren over websites. Toen ben ik terecht gekomen bij het Mediacollege.<br>
                <br>
                Wil je meer weten over mij? Kijk verder op deze pagina of neem <a href="#">Contact</a> met me op.
            </p>

            <a href="<?php echo site_url('/img/cv-mees-postma.pdf') ?>" target="_blank">
                <button class="blueButton">Mijn CV</button>
            </a>
    </section>

    <section id="skillset">
        <h2>Mijn skills</h2>
        <p>In mijn tijd dat ik bezig ben met het maken van websites heb ik heel wat dingen geleerd. Ik leer bijvoorbeeld veel
            programmeertalen kennen. Maar ik leer ook andere vaardigheden, zie hier een overzicht van mijn skills.
        </p>
        <div class="skills">
            <?php foreach ($skills as $row) : ?>
                <div class="skill">
                    <div class="icon">
                        <i class="<?php echo $row['fa-class'] ?>"></i>
                    </div>

                    <div class="skillinfo">
                        <h4 class="skill-name"><?php echo $row['skillnaam']; ?></h4>
                        <h4 class="skill-niveau"><?php echo $row['niveau']; ?></h4>
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