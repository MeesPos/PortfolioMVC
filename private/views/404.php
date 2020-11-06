<!DOCTYPE html>
<html lang="nl" class="errorPage">

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
	<title>404 | Mees Postma</title>
	<meta name="og:title" property="og:title" content="404 | Mees Postma">
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

<body class="errorPage">
	<?php if ($this->section('navigation')) : ?>
		<?php echo $this->section('navigation') ?>
	<?php else : ?>
		<?php echo $this->fetch('_navigation') ?>
    <?php endif ?>
    
    <section id="error">
        <img class="errorimage" src="<?php echo site_url('/img/404.png') ?>" alt="404">
        <h2><?php getContentCurrentLang('page_not_found', $content)?></h2>
        <a href="<?php echo url('home') ?>">
            <button class="blueButton"><?php getContentCurrentLang('back_home', $content)?></button>
        </a>
    </section>

    <?php if ($this->section('footer')) : ?>
		<?php echo $this->section('footer') ?>
	<?php else : ?>
		<?php echo $this->fetch('_footer') ?>
	<?php endif ?>
</body>
</html>