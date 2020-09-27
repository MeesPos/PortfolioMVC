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
		<div class="infoMe">
			<h1>Mees Postma</h1>
			<p>Mijn naam is Mees Postma, ik studeer op het
				Mediacollege. Hier leer ik om Software developer
				te worden. Buitenschool beheer ik ook mijn eigen
				bedrijf samen met een vriend van mij. Voor meer
				informatie kijk verder op mijn website.</p>
			<a href="#">
				<button>Lees meer</button>
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
			<a href="<?php echo url('over'); ?>">
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
				<div class="blogCard">
					<img src="https://cdn.thecrazytourist.com/wp-content/uploads/2018/02/Boat-Trips.jpg" alt="<?php echo $row['titel'] ?>">
					<div class="blogInfo">
						<a href="#" class="categorie">Laptop</a>
						<h3><?php echo $row['titel'] ?></h3>
						<p><?php echo $row['samenvatting'] ?></p>
						<a href="<?php echo url('tutorialDetail') . $row['link']; ?>" class="leesMeer">Lees meer</a>
					</div>
				</div>
			<?php endforeach; ?>
		</div>

		<a href="#" class="meerProjecten blogsButton">
			<button>Zie meer</button>
		</a>
	</section>

	<section id="contact">
		<div class="contactMe">
			<h2>Meer informatie?</h2>
			<h3>Neem contact met me op!</h3>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis at enim at
				lacus viverra accumsan. Vivamus sodales porttitor lorem, non auctor
				velit cursus sed. Vivamus tristique sed quam eu laoreet.</p>
			<a href="<?php echo url('contact') ?>" class="meerProjecten contactButton">
				<button>Contact</button>
			</a>
		</div>

		<div class="heroAbout contactHero">
			<img src="<?php echo site_url('/img/contactMe.png') ?>" alt="Mees Postma, Over mij Illustration">
		</div>
	</section>

	<?php if ($this->section('footer')) : ?>
		<?php echo $this->section('footer') ?>
	<?php else : ?>
		<?php echo $this->fetch('_footer') ?>
	<?php endif ?>
</body>

</html>