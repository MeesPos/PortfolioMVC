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

		<section id="header">
			<div class="name">
				<h2>SOFTWARE</h2>
				<h1>MEES POSTMA</h1>
				<h2>DEVELOPER</h2>
			</div>

			<div class="rocket">
				<img src="<?php echo site_url('/img/rocket.png')?>" alt="Rocket Full" class="rocket-full">
				<img src="<?php echo site_url('/img/rocket.png')?>" alt="Rocket Full" class="rocket-opp">
			</div>
		</section>
	</header>
</body>

</html>