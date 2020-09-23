<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home | Mees Postma</title>
    <link rel="stylesheet" href="<?php echo site_url('/css/style.css') ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
</head>

<body>
    <?php if ($this->section('navigation')) : ?>
        <?php echo $this->section('navigation') ?>
    <?php else : ?>
        <?php echo $this->fetch('_navigation') ?>
    <?php endif ?>

    <header id="subHeader">
        <h1>Tutorials</h1>
    </header>

    <div class="codeerCato cato">
        <h2>Leer meer over <span style="font-weight: bold;">coderen</span></h2>
        <div class="owl-carousel owl-theme">
            <?php foreach ($tutorial as $row) : ?>
                <?php if ($row['categorie'] === 'Coderen') : ?>
                    <div class="blog-grid">
                        <img src="https://cdn.thecrazytourist.com/wp-content/uploads/2018/02/Boat-Trips.jpg" alt="<?php echo $row['titel'] ?> - Mees Postma">
                        <h3><?php echo $row['titel']; ?></h3>
                        <h4><?php echo $row['categorie']; ?></h4>
                        <a href="">Lees meer ></a>
                    </div>
                <?php endif; ?>
            <?php endforeach; ?>
        </div>
    </div>

    <div class="marketingCato cato">
        <h2>Leer meer over <span style="font-weight: bold;">marketing</span></h2>
        <div class="owl-carousel owl-theme">
            <?php foreach ($tutorial as $row) : ?>
                <?php if ($row['categorie'] === 'Marketing') : ?>
                    <div class="blog-grid">
                        <img src="https://cdn.thecrazytourist.com/wp-content/uploads/2018/02/Boat-Trips.jpg" alt="<?php echo $row['titel'] ?> - Mees Postma">
                        <h3><?php echo $row['titel']; ?></h3>
                        <h4><?php echo $row['categorie']; ?></h4>
                        <a href="">Lees meer ></a>
                    </div>
                <?php endif; ?>
            <?php endforeach; ?>
        </div>
    </div>

    <div class="ondernemenCato cato">
        <h2>Leer meer over <span style="font-weight: bold;">ondernemen</span></h2>
        <div class="owl-carousel owl-theme">
            <?php foreach ($tutorial as $row) : ?>
                <?php if ($row['categorie'] === 'Ondernemen') : ?>
                    <div class="blog-grid">
                        <img src="https://cdn.thecrazytourist.com/wp-content/uploads/2018/02/Boat-Trips.jpg" alt="<?php echo $row['titel'] ?> - Mees Postma">
                        <h3><?php echo $row['titel']; ?></h3>
                        <h4><?php echo $row['categorie']; ?></h4>
                        <a href="">Lees meer ></a>
                    </div>
                <?php endif; ?>
            <?php endforeach; ?>
        </div>
    </div>

    <div class="overigeCato cato">
        <h2>Leer ook meer <span style="font-weight: bold;">over dit</span></h2>
        <div class="owl-carousel owl-theme">
            <?php foreach ($tutorial as $row) : ?>
                <?php if ($row['categorie'] === 'Overig') : ?>
                    <div class="blog-grid">
                        <img src="https://cdn.thecrazytourist.com/wp-content/uploads/2018/02/Boat-Trips.jpg" alt="<?php echo $row['titel'] ?> - Mees Postma">
                        <h3><?php echo $row['titel']; ?></h3>
                        <h4><?php echo $row['categorie']; ?></h4>
                        <a href="">Lees meer ></a>
                    </div>
                <?php endif; ?>
            <?php endforeach; ?>
        </div>
    </div>

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

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.min.js"></script>
    <script src="<?php echo site_url('/js/carousel.js') ?>"></script>
</body>

</html>