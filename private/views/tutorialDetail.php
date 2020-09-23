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
        <?php foreach ($tutorial as $row) : ?>
            <h1><?php echo $row['titel']; ?></h1>
        <?php endforeach; ?>
    </header>

    <section id="blogContent">
        <div class="blogTekst">
            <?php foreach ($tutorial as $row) : ?>
                <p><?php echo $row['content']; ?></p>
            <?php endforeach; ?>
        </div>

        <aside id="tutorialAside">
            <div class="aboutmeAside">
                <img src="<?php echo site_url('/img/MeesFoto.jpeg') ?>" alt="Mees Postma">
                <h2>Hallo, ik ben Mees Postma</h2>
                <p>Ik ben een Software Developer uit Nederland. In 2019 ben ik begonnen
                    met de opleiding Media developing op het Mediacollege Amsterdam. Hier
                    leer ik websites maken, optimaliseren en ontwerpen. Maar ook om
                    professioneel te worden op de markt.
                </p>

                <a href="#">Meer over mij ></a>
            </div>

            <div class="overBericht">
                <h2>Over dit bericht</h2>
                <p><span style="font-weight: bold;">Geplaatst op:</span> <?php echo $row['Datum'] ?></p>
                <p><span style="font-weight: bold;">Categorieën:</span> <?php echo $row['categorie']; ?>,</p>
            </div>
        </aside>
    </section>

    <?php if ($this->section('footer')) : ?>
        <?php echo $this->section('footer') ?>
    <?php else : ?>
        <?php echo $this->fetch('_footer') ?>
    <?php endif ?>
</body>

</html>