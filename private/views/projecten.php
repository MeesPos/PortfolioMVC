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
    <title>Projecten | Mees Postma</title>
    <meta name="og:title" property="og:title" content="Projecten | Mees Postma">
    <meta name="description" content="Mijn naam is Mees Postma, ik ben een Software Developer en studeer aan het Mediacollege.
    Ook beheer ik mijn eigen bedrijf: Hubsor. Zie hier al mijn projecten.">
    <meta name="twitter:card" content="Mijn naam is Mees Postma, ik ben een Software Developer en studeer aan het Mediacollege.
    Ook beheer ik mijn eigen bedrijf: Hubsor. Zie hier al mijn projecten.">
    <meta name="keywords" content="Mees Postma, Mees, Postma, Mediacollege, Amsterdam, Mediacollege Amsterdam, Nederland, Software developer,
    Website developer, Hubsor, Hubsor website, Hubsor eigenaar, Hubsor Mees, Websites, Website, SEO, The Netherlands, Holland, Dutch">
    <link rel="stylesheet" href="<?php echo site_url('/css/style.css') ?>">
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
            <h1>Projecten</h1>
        </div>
    </header>

    <section id="projects">
        <div class="buttons">
            <button id='all' class="activeProject">Alles</button>
            <button id='btn-websites'>Websites</button>
            <button id='btn-optimalisatie'>Optimalisatie</button>
        </div>

        <div class="projectShuffle containerProject">
            <?php foreach ($projects as $row) : ?>
                <div class="picture-item column" data-groups='["<?php echo $row['soort']; ?>"]'>
                    <div class="aspect aspect--16x9">
                        <div class="aspect__inner">
                            <a href="<?php echo url('projectenDetail') . $row['link']; ?>">
                                <div class="projectCard">
                                    <img class="projectPicture" src="<?php echo site_url('/img/postImages/headers/' . $row['headerimage']) ?>" alt="<?php echo $row['projectnaam'] ?> Image, Mees Postma">
                                    <div class="projectInfo">
                                        <h4><?php echo $row['projectnaam'] ?></h4>
                                        <p><?php echo $row['soort'] ?></p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>

            <div class="col-1@sm my-sizer-element"></div>
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

    <script src="https://kit.fontawesome.com/a82e000026.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Shuffle/5.2.3/shuffle.min.js"></script>
    <script src="<?php echo site_url('/js/shuffle.js') ?>"></script>
</body>

</html>