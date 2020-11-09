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
    <title>Tutorials | Mees Postma</title>
    <meta name="og:title" property="og:title" content="Tutorials | Mees Postma">
    <meta name="description" content="<?php getContentCurrentLang('about_header', $content)?>">
    <meta name="twitter:card" content="<?php getContentCurrentLang('about_header', $content)?>">
    <meta name="keywords" content="Mees Postma, Mees, Postma, Mediacollege, Amsterdam, Mediacollege Amsterdam, Nederland, Software developer,
    Website developer, Hubsor, Hubsor website, Hubsor eigenaar, Hubsor Mees, Websites, Website, SEO, The Netherlands, Holland, Dutch">
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

<body class="subPage">
    <?php if ($this->section('navigation')) : ?>
        <?php echo $this->section('navigation') ?>
    <?php else : ?>
        <?php echo $this->fetch('_navigation') ?>
    <?php endif ?>

    <header id="subHeader">
        <div class="subContent">
            <h1>Tutorials</h1>
        </div>
    </header>

    <div class="codeerCato cato">
        <h2>Leer meer over <span style="font-weight: bold;">coderen</span></h2>
        <div class="owl-carousel owl-theme">
            <?php foreach ($tutorial as $row) : ?>
                <?php if ($row['cat_name'] === 'Coderen') : ?>
                    <div class="blog-grid">
                        <img src="<?php echo site_url('/img/postImages/headers/' . $row['headerimage']) ?>" alt="<?php echo $row['titel'] ?> - Mees Postma">
                        <h3><?php echo $row['titel']; ?></h3>
                        <h4><?php echo $row['cat_name']; ?></h4>
                        <a href="<?php echo url('tutorialDetail') . $row['link']; ?>">Lees meer ></a>
                    </div>
                <?php endif; ?>
            <?php endforeach; ?>
        </div>
    </div>

    <div class="marketingCato cato">
        <h2>Leer meer over <span style="font-weight: bold;">marketing</span></h2>
        <div class="owl-carousel owl-theme">
            <?php foreach ($tutorial as $row) : ?>
                <?php if ($row['cat_name'] === 'Marketing') : ?>
                    <div class="blog-grid">
                        <img src="https://cdn.thecrazytourist.com/wp-content/uploads/2018/02/Boat-Trips.jpg" alt="<?php echo $row['titel'] ?> - Mees Postma">
                        <h3><?php echo $row['titel']; ?></h3>
                        <h4><?php echo $row['cat_name']; ?></h4>
                        <a href="<?php echo url('tutorialDetail') . $row['link']; ?>">Lees meer ></a>
                    </div>
                <?php endif; ?>
            <?php endforeach; ?>
        </div>
    </div>

    <div class="ondernemenCato cato">
        <h2>Leer meer over <span style="font-weight: bold;">ondernemen</span></h2>
        <div class="owl-carousel owl-theme">
            <?php foreach ($tutorial as $row) : ?>
                <?php if ($row['cat_name'] === 'Ondernemen') : ?>
                    <div class="blog-grid">
                        <img src="https://cdn.thecrazytourist.com/wp-content/uploads/2018/02/Boat-Trips.jpg" alt="<?php echo $row['titel'] ?> - Mees Postma">
                        <h3><?php echo $row['titel']; ?></h3>
                        <h4><?php echo $row['cat_name']; ?></h4>
                        <a href="<?php echo url('tutorialDetail') . $row['link']; ?>">Lees meer ></a>
                    </div>
                <?php endif; ?>
            <?php endforeach; ?>
        </div>
    </div>

    <div class="overigeCato cato">
        <h2>Leer ook meer <span style="font-weight: bold;">over dit</span></h2>
        <div class="owl-carousel owl-theme">
            <?php foreach ($tutorial as $row) : ?>
                <?php if ($row['cat_name'] === 'Overig') : ?>
                    <div class="blog-grid">
                        <img src="<?php echo site_url('/img/postImages/headers/' . $row['headerimage']) ?>" alt="<?php echo $row['titel'] ?> - Mees Postma">
                        <h3><?php echo $row['titel']; ?></h3>
                        <h4><?php echo $row['cat_name']; ?></h4>
                        <a href="<?php echo url('tutorialDetail') . $row['link']; ?>">Lees meer ></a>
                    </div>
                <?php endif; ?>
            <?php endforeach; ?>
        </div>
    </div>

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

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.min.js"></script>
    <script src="<?php echo site_url('/js/carousel.js') ?>"></script>
</body>

</html>