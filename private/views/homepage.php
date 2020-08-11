<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="<?php echo site_url('/css/style.css') ?>">
	<script src="https://kit.fontawesome.com/a82e000026.js" crossorigin="anonymous"></script>
</head>

<body>
	<?php if ($this->section('navigation')) : ?>
		<?php echo $this->section('navigation') ?>
	<?php else : ?>
		<?php echo $this->fetch('_navigation') ?>
	<?php endif ?>

	<header id="homeHeader">
		<svg xmlns="http://www.w3.org/2000/svg" class="headerSVG" viewBox="0 0 997.42 947.862">
			<g id="Laag_2" data-name="Laag 2" transform="translate(0)">
				<g id="Laag_1" data-name="Laag 1">
					<path id="Path_2" data-name="Path 2" d="M124.88,0C112.61.41,75.55,87.37,69.31,99.79-75.38,387.44.56,836.74,353,925.5c162.13,40.83,351.23,22.1,508.91-26.73,12.9-4,135.51-39,135.51-51.79V.2Z" fill="#00117f" />
				</g>
			</g>
		</svg>
		<div id="homeInfo">
			<div class="introductionHeader">
				<h1>Hallo, ik ben Mees Postma</h1>
				<h2><span>Web</span> & <span>Software</span> developer</h2>
				<p>Mijn naam is Mees Postma, ik studeer op het Mediacollege.
				Hier leer ik om Software developer te worden. Buiten school beheer
				ik ook mijn eigen bedrijf samen met een vriend van mij. Voor meer
				informatie kijk bij mijn Ervaringen!</p>
				<a href="#" class="ruimtebutton">
					<button class="leesHeader">Lees meer</button>
				</a>

				<a href="#">
					<button class="contactHeader">Contact</button>
				</a>
			</div>

			<div class="heroHeader">
				<img src="<?php echo site_url('/img/headerMan.png') ?>" alt="Mees Postma, Header Illustration">
			</div>
		</div>
	</header>

	<?php if ($this->section('footer')) : ?>
		<?php echo $this->section('footer') ?>
	<?php else : ?>
		<?php echo $this->fetch('_footer') ?>
	<?php endif ?>
</body>

</html>