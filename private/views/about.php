<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Over Mij | Mees Postma</title>
    <link rel="stylesheet" href="<?php echo site_url('/css/style.css') ?>">
    <script src="https://kit.fontawesome.com/a82e000026.js"></script>
</head>

<body>
    <?php if ($this->section('navigation')) : ?>
        <?php echo $this->section('navigation') ?>
    <?php else : ?>
        <?php echo $this->fetch('_navigation') ?>
    <?php endif ?>

    <header id="subHeader">
        <h1>Over mij</h1>
    </header>

    <section id="introductie">
        <div class="heroAboutMe">
            <img src="<?php echo site_url('/img/aboutIntro.png') ?>" alt="Mees Postma, Over mij introductie Illustration">
        </div>

        <div class="introductionAboutMe">
            <h3>Hallo, ik ben</h3>
            <h2>Mees Postma</h2>
            <p><strong>Ik ben een Software Developer uit Nederland</strong>. In 2019 ben ik
                begonnen met de opleiding Media developing op het Mediacollege Amsterdam.
                Hier leer ik websites maken, optimaliseren en ontwerpen. Maar ook om professioneel
                te worden op de markt.<br>
                <br>
                Buiten school ben ik ook bezig met mijn eigen bedrijf genaamd <a target="_blank" href="https://www.hubsor.nl/">Hubsor</a>
                samen met <a target="_blank" href="http://cornellvdstraaten.nl/">Cornell van der Straaten</a>. Wij hadden allebei interesse
                in het beginnen van een eigen bedrijf. Op Hubsor verkopen we online diensten zoals: Websites, SEO Optimalisatie & Online 
                marketing services. Voor meer informatie, bezoek de website van <a target="_blank" href="https://www.hubsor.nl/"></a>.<br>
                <br>
                Ik wist al een paar jaar voordat ik met mijn opleiding begon dat ik iets wou doen met websites.
                Mijn interesse lag er altijd, het begon bij simpele <strong>HTML</strong> websites, of een <strong>Wordpress</strong> template gebruiken.
                Maar na een tijdje wou ik toch meer leren over websites. Toen ben ik terecht gekomen bij het Mediacollege.<br>
                <br>
                Wil je meer weten over mij? Kijk verder op deze pagina of neem <a href="#">Contact</a> met me op.
            </p>
    </section>

    <section id="skillset">
        <h2>Mijn skills</h2>
        <p>In mijn tijd dat ik bezig ben met het maken van websites heb ik heel wat dingen geleerd. Ik leer bijvoorbeeld veel
            programmeertalen kennen. Maar ik leer ook andere vaardigheden, zie hier een overzicht van mijn skills.
        </p>
        <div class="skills">
            <?php foreach($skills as $row) : ?>
                <div class="skill">
                    <div class="icon">
                        <i class="<?php echo $row['fa-class'] ?>"></i>
                    </div>

                    <div class="skillinfo">
                        <h4 class="skill-name"><?php echo $row['skillnaam']; ?></h4>
                        <h4 class="skill-niveau"><?php echo $row['niveau']; ?></h4>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
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