<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact | Mees Postma</title>
    <link rel="stylesheet" href="<?php echo site_url('/css/style.css') ?>">
    <script src="https://kit.fontawesome.com/a82e000026.js"></script>
</head>

<body class="subPage">
    <?php if ($this->section('navigation')) : ?>
        <?php echo $this->section('navigation') ?>
    <?php else : ?>
        <?php echo $this->fetch('_navigation') ?>
    <?php endif ?>

    <header id="subHeader">
        <div class="subContent">
            <h1>Contact</h1>
        </div>
    </header>

    <section id="contactMij">
        <div class="gegevens">
            <h2>Neem contact met me op</h2>
            <p>Wil je meer weten over mij of wil je een samenwerking starten? Neem
                contact met mij op via het contact formulier of via de volgende gegevens:
            </p>

            <div class="gegevensValues">
                <div class="gegevensCo">
                    <p class="icon"><i class="fas fa-user-alt"></i></p>
                    <p class="gegevensValue">Mees Postma</p>
                </div>

                <div class="gegevensCo">
                    <p class="icon"><i class="fas fa-envelope"></i></p>
                    <a class="gegevensValue" href="mailto:mail@meespostma.nl" style="width: 150px">mail@meespostma.nl</a>
                </div>
            </div>
        </div>

        <div class="contactForm">
            <i class="fas fa-check"></i>
            <h2>Uw bericht is verzonden!</h2>
        </div>
    </section>

    <?php if ($this->section('footer')) : ?>
        <?php echo $this->section('footer') ?>
    <?php else : ?>
        <?php echo $this->fetch('_footer') ?>
    <?php endif ?>
</body>

</html>