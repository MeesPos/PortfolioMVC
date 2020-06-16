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
				<button class="moreinfo">Meer Info!</button>
			</div>


			<div class="animation">
				<img class="webani" src="<?php echo site_url('/img/heroheader.png') ?>" alt="Web developer">
			</div>
		</div>
	</section>

</body>

</html>