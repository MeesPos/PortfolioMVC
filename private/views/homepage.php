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
					Quibusdam ipsa mollitia totam, dicta accusantium sit doloremque ipsam exercitationem
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
					Quibusdam ipsa mollitia totam, dicta accusantium sit doloremque ipsam exercitationem blanditiis!
					Lorem ipsum dolor sit amet, consectetur adipisicing.
					Quibusdam ipsa mollitia totam, dicta accusantium sit doloremque ipsam exercitationem
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

		<button class="moreinfo myworkbut">Zie al mijn werk</button>
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

	<section id="blogsection">
		<div class="blogs">
			<h2>TUTORIALS</h2>
			<div class="blogs-bot"></div>
			<div id="blog">
				<div class="blog1">
					<img src="<?php echo site_url('/img/laptop.jpg') ?>" class="blog-pic">
					<h3 class="topic">Laptop</h3>
					<h2>Hoe start ik zo'n laptop op</h2>
					<p>Het is natuurlijk erg lastig om een laptop op te starten, hiermee ga ik je helpen!</p>
					<button class="moreinfo blogbutton">Lees Meer</button>
				</div>

				<div class="blog1">
					<img src="<?php echo site_url('/img/laptop.jpg') ?>" class="blog-pic">
					<h3 class="topic">Laptop</h3>
					<h2>Hoe start ik zo'n laptop op</h2>
					<p>Het is natuurlijk erg lastig om een laptop op te starten, hiermee ga ik je helpen!</p>
					<button class="moreinfo blogbutton">Lees Meer</button>
				</div>

				<div class="blog1">
					<img src="<?php echo site_url('/img/laptop.jpg') ?>" class="blog-pic">
					<h3 class="topic">Laptop</h3>
					<h2>Hoe start ik zo'n laptop op</h2>
					<p>Het is natuurlijk erg lastig om een laptop op te starten, hiermee ga ik je helpen!</p>
					<button class="moreinfo blogbutton">Lees Meer</button>
				</div>
			</div>
		</div>
	</section>

	<section id="contact">
		<div class="contact-right-gradient"></div>
		<div class="mobile-contact-gradient"></div>
		<div class="contact-section">
			<div class="contactinfo">
				<h2 class="koffie">BAKJE KOFFIE DOEN?</h2>
				<h2 class="contact-maken">CONTACT OPNEMEN</h2>
				<div class="border-bot"></div>
				<p class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
					Quibusdam ipsa mollitia totam, dicta accusantium sit doloremque ipsam exercitationem
					blanditiis!</p>
				<button class="moreinfo">Contact</button>
			</div>

			<div class="contactanimation">
				<img class="contactani" src="<?php echo site_url('/img/contact.png') ?>" alt="">
			</div>
		</div>
	</section>

	<footer>
		<img src="<?php echo site_url('/img/sit-footer.png') ?>" class="sitfooter" alt="">
		<section id="footer-info">
			<div class="socials">
				<div class="socialtitel">
					<h2>MY SOCIALS</h2>
					<div class="footer-bot"></div>
				</div>

				<div class="socialbuttons">
					<a href="https://www.linkedin.com/in/mees-postma-a911b1196/" target="_blank"><i class="fab fa-linkedin social"></i></a>
					<a href="https://www.facebook.com/meespostma2002" target="_blank"><i class="fab fa-facebook-f social"></i></a>
					<a href="https://www.instagram.com/meespostma_/" target="_blank"><i class="fab fa-instagram social"></i></a>
				</div>
			</div>

			<div class="footer-menu">
				<div class="socialtitel">
					<h2>SITE MENU</h2>
					<div class="footer-bot"></div>
				</div>
				<a class="footer-items" href="<?php echo url('home') ?>">Home</a><br>
				<a class="footer-items">Over Mij</a><br>
				<a class="footer-items">Projecten</a><br>
				<a class="footer-items">Tutorials</a><br>
				<a class="footer-items">Contact</a>
			</div>

			<div class="aboutme-footer">
				<div class="socialtitel">
					<h2>ABOUT ME</h2>
					<div class="footer-bot"></div>
				</div>

				<div class="aboutme-info">
					<p>Lorem ipsum dolor sit amet consectetur<br> adipisicing elit.
						Dolore modi beatae inventore. <br>Eaque libero atque suscipit,
						itaque totam numquam <br>quae! Voluptatesadipisci laboriosam
						ex maiores,<br> quibusdam magnam asperiores ea ad?</p>
				</div>
			</div>
		</section>

		<p class="copyright">&copy; by Mees Postma</a></p>
	</footer>

</body>

</html>