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
	<title>Home | Mees Postma</title>
	<meta name="og:title" property="og:title" content="Home | Mees Postma">
	<meta name="description" content="<?php getContentCurrentLang('about_header', $content)?>">
	<meta name="twitter:card" content="<?php getContentCurrentLang('about_header', $content)?>">
	<meta name="keywords" content="Mees Postma, Mees, Postma, Mediacollege, Amsterdam, Mediacollege Amsterdam, Nederland, Software developer,
    Website developer, Hubsor, Hubsor website, Hubsor eigenaar, Hubsor Mees, Websites, Website, SEO, The Netherlands, Holland, Dutch">
	<meta name="google-site-verification" content="KyyrwHl-VMXP8gcxRgX-wfrQCp1CZUQ-uzCXDjcJ5Vw" />
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

<body>
	<?php if ($this->section('navigation')) : ?>
		<?php echo $this->section('navigation') ?>
	<?php else : ?>
		<?php echo $this->fetch('_navigation') ?>
	<?php endif ?>

	<header id="homeHeader">
		<div class="infoMe">
			<h1>Mees Postma</h1>
			<p><?php getContentCurrentLang('about_header', $content)?></p>
			<a href="<?php echo url('contact') ?>">
				<button class="blueButton">Contact</button>
			</a>
		</div>

		<div class="shapeRight">
			<img src="<?php echo site_url('/img/headerMan.png') ?>" alt="Mees Postma, Header Illustration">
		</div>
	</header>

	<section id="about">
		<div class="heroAbout">
			<img src="<?php echo site_url('/img/aboutMan.png') ?>" alt="Mees Postma, Over mij Illustration">
		</div>

		<div class="aboutMe">
			<h2><?php getContentCurrentLang('about_title', $content)?></h2>
			<h3>Mees Postma - Software developer</h3>
			<p><?php getContentCurrentLang('about_section', $content)?></p>
			<a href="<?php echo url('over'); ?>">
				<button class="blueButton"><?php getContentCurrentLang('read_more', $content)?></button>
			</a>
		</div>
	</section>

	<section id="projecten">
		<h2><?php getContentCurrentLang('projects_title', $content)?></h2>
		<p><?php getContentCurrentLang('projects_desc', $content)?></p>
		<div class="projects">
			<?php foreach ($project as $row) : ?>
				<div class="cardProject" onclick="this.classList.toggle('expanded')">
					<img src="<?php echo site_url('/img/postImages/headers/' . $row['headerimage']) ?>" class="label" alt="Project (Nummer) van Mees Postma">
					<div class="text">
						<div class="text-content">
							<h1 class="title"><?php echo $row['projectnaam'] ?></h1>
							<div class="body-text"><?php echo limit_text($row['content'], 15); ?></div>
							<a href="<?php echo url('projectenDetail') . $row['link'] ?>" class="leesMeerProject"><?php getContentCurrentLang('read_more', $content)?> ></a>
						</div>
					</div>
					<svg class="chevron" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 35" width="80">
						<path d="M5 30L50 5l45 25" fill="none" stroke="#fff" stroke-width="10" /></svg>
				</div>
			<?php endforeach ?>
		</div>

		<a href="<?php echo url('projecten') ?>" class="meerProjecten">
			<button class="blueButton"><?php getContentCurrentLang('see_more', $content)?></button>
		</a>
	</section>

	<section id="blogs">
		<h2>Tutorials</h2>
		<div class="tutorials">
			<?php foreach ($tutorial as $row) : ?>
				<div class="blogCard">
					<img src="<?php echo site_url('/img/postImages/headers/' . $row['headerimage']) ?>" alt="<?php echo $row['titel'] ?>">
					<div class="blogInfo">
						<h3><?php echo $row['titel'] ?></h3>
						<p><?php echo limit_text($row['content'], 23) ?></p>
						<a href="<?php echo url('tutorialDetail') . $row['link']; ?>" class="leesMeer">Lees meer</a>
					</div>
				</div>
			<?php endforeach; ?>
		</div>

		<!-- <a href="<?php echo url('tutorials') ?>" class="blogsButton"> -->
			<!-- <button class="blueButton">Zie meer</button> -->
		<!-- </a> -->
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