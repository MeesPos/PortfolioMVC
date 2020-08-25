<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Home | Mees Postma</title>
	<link rel="stylesheet" href="<?php echo site_url('/css/style.css') ?>">
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

	<section id="about">
		<div class="heroAbout">
			<img src="<?php echo site_url('/img/aboutMan.png') ?>" alt="Mees Postma, Over mij Illustration">
		</div>

		<div class="aboutMe">
			<h2>Over mij</h2>
			<h3>Mees Postma - Software developer</h3>
			<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.
				Voluptatem dolor quam ipsum quia dolores. Nihil quasi error
				quidem natus, praesentium asperiores cumque. Cumque necessitatibus
				rem provident repellendus eius, repudiandae consequuntur. Lorem ipsum
				dolor sit amet consectetur adipisicing elit. Ipsam cupiditate
				consequatur at, officiis libero, explicabo architecto ipsum, modi
				dolores natus exercitationem non tempore earum blanditiis nam
				dignissimos officia placeat laborum?</p>
			<a href="#">
				<button>Lees Meer</button>
			</a>
		</div>
	</section>

	<section id="projecten">
		<h2>Mijn Projecten</h2>
		<p>Zie een kort overzicht van mijn werk</p>
		<div class="projects">
			<?php foreach ($project as $row) : ?>
				<div class="cardProject" onclick="this.classList.toggle('expanded')">
					<img src="https://cdn.thecrazytourist.com/wp-content/uploads/2018/02/Boat-Trips.jpg" class="label" alt="Project (Nummer) van Mees Postma">
					<div class="text">
						<div class="text-content">
							<h1 class="title"><?php echo $row['projectnaam'] ?></h1>
							<div class="body-text"><?php echo $row['samenvatting'] ?></div>
							<a href="#" class="leesMeerProject">Lees meer ></a>
						</div>
					</div>
					<svg class="chevron" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 35" width="80">
						<path d="M5 30L50 5l45 25" fill="none" stroke="#fff" stroke-width="10" /></svg>
				</div>
			<?php endforeach ?>
		</div>

		<a href="#" class="meerProjecten">
			<button>Zie meer</button>
		</a>
	</section>

	<section id="blogs">
		<h2>Tutorials</h2>
		<div class="tutorials">
			<?php foreach ($tutorial as $row) : ?>
				<?php echo $row['titel']; ?>
				<?php echo $row['samenvatting']; ?><br>
			<?php endforeach; ?>
		</div>
	</section>

	<?php if ($this->section('footer')) : ?>
		<?php echo $this->section('footer') ?>
	<?php else : ?>
		<?php echo $this->fetch('_footer') ?>
	<?php endif ?>
</body>

</html>