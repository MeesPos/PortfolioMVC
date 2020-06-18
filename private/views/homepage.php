<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="<?php echo site_url('/css/style.css') ?>">

</head>

<body>
	<header>
		<nav>
			<?php if ($this->section('navigation')) : ?>
				<?php echo $this->section('navigation') ?>
			<?php else : ?>
				<?php echo $this->fetch('_navigation') ?>
			<?php endif ?>
		</nav>
	</header>



	<section id="header">
		<div class="intro-right-gradient"></div>
		<div class="information">
			<div class="nameme">
				<h1 class="name">MEES POSTMA</h1>
				<h2 class="swdev">SOFTWARE DEVELOPER</h2>
				<div class="border-bot"></div>
				<p class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
					<br>Quibusdam ipsa mollitia totam, dicta accusantium<br> sit doloremque ipsam exercitationem
					blanditiis!</p>
				<button class="moreinfo">Meer Info</button>
			</div>


			<div class="animation">
				<img class="webani" src="<?php echo site_url('/img/heroheader.png') ?>" alt="Web developer Mees Postma">
			</div>
		</div>
	</section>

	<section id="aboutme">
		<div class="about-left-gradient"></div>
		<div class="aboutme">
			<div class="abouthero">
				<img class="aboutani" src="<?php echo site_url('/img/aboutme.png') ?>" alt="About me Mees Postma">
			</div>

			<div class="aboutinfo">
				<h2>ABOUT ME</h2>
				<div class="border-bot"></div>
				<p class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
					<br>Quibusdam ipsa mollitia totam, dicta accusantium<br> sit doloremque ipsam exercitationem
					blanditiis!<br>
					Lorem ipsum dolor sit amet, consectetur adipisicing.
					<br>Quibusdam ipsa mollitia totam, dicta accusantium<br> sit doloremque ipsam exercitationem
					blanditiis!</p>
				</p>
				<button class="moreinfo">Lees Meer</button>
			</div>
		</div>
	</section>

	<section id="mywork">
		<div class="worktitel">
			<h2>MY WORK</h2>
			<div class="workborder"></div>
		</div>

		<div id="projects">
			<div id="wrapper">
				<article class="card" role="article">
					<a href="https://catchatravel.com/" target="_blank">
						<div class="card-text">
							<div class="card-meta">COMPANY</div>
							<h2 class="card-title">Hubsor - Software & Media Company</h2>
						</div>
						<img class="card-image" src="<?php echo site_url('/img/laptop.jpg') ?>" alt="A picture of a Portfolio" />
					</a>
				</article>

				<article class="card" role="article">
					<a href="https://www.hubsor.nl/">
						<div class="card-text">
							<div class="card-meta">COMPANY</div>
							<h2 class="card-title">Hubsor - Software & Media Company</h2>
						</div>
						<img class="card-image" src="<?php echo site_url('/img/laptop.jpg') ?>" alt="A picture of a Portfolio" />
					</a>
				</article>

				<article class="card" role="article">
					<a href="#">
						<div class="card-text">
							<div class="card-meta">COMPANY</div>
							<h2 class="card-title">Hubsor - Software & Media Company</h2>
						</div>
						<img class="card-image" src="<?php echo site_url('/img/laptop.jpg') ?>" alt="A picture of a Portfolio" />
					</a>
				</article>
			</div>
		</div>

		<button class="moreinfo">Lees Meer</button>
	</section>

	<section id="waaromik">
		<div class="waarom-right-gradient"></div>
		<div class="whyme">
			<div class="whyinfo">
				<h2>WHY ME?</h2>
				<div class="whyme-bot"></div>

				<div class="standpunten">
					<div class="punt1">
						<b>Ervaring</b><br>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
							Quibusdam ipsa mollitia totam, dicta accusantium sit doloremque ipsam exercitationem
							blanditiis!<br></p>
					</div>
					<div class="punt2">
						<b>Passie</b>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
							Quibusdam ipsa mollitia totam, dicta accusantium sit doloremque ipsam exercitationem
							blanditiis!<br></p>
					</div>

					<div class="punt3">
						<b>Gemotiveerd</b><br>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
							Quibusdam ipsa mollitia totam, dicta accusantium sit doloremque ipsam exercitationem
							blanditiis!<br></p>
					</div>

					<div class="punt4">
						<b>Communicatie</b>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
							Quibusdam ipsa mollitia totam, dicta accusantium sit doloremque ipsam exercitationem
							blanditiis!</p>
					</div>
				</div>
			</div>

			<div class="whymehero">
				<img class="whyani" src="<?php echo site_url('/img/whyme.png') ?>" alt="Why me Mees Postma">
			</div>
		</div>
	</section>

	<section id="blog">
				
	</section>

</body>

</html>