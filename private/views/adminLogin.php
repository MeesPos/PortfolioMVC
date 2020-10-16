<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Mees Postma</title>
    <link rel="shortcut icon" href="<?php echo site_url('/img/logo/favicon/favicon.ico') ?>" type="image/x-icon" />
  	<link rel="apple-touch-icon" href="<?php echo site_url('/img/logo/favicon/apple-touch-icon.png') ?>" />
  	<link rel="apple-touch-icon" sizes="57x57" href="<?php echo site_url('/img/logo/favicon/apple-touch-icon-57x57.png') ?>" />
  	<link rel="apple-touch-icon" sizes="72x72" href="<?php echo site_url('/img/logo/favicon/apple-touch-icon-72x72.png') ?>" />
  	<link rel="apple-touch-icon" sizes="76x76" href="<?php echo site_url('/img/logo/favicon/apple-touch-icon-76x76.png') ?>" />
  	<link rel="apple-touch-icon" sizes="114x114" href="<?php echo site_url('/img/logo/favicon/apple-touch-icon-114x114.png') ?>" />
  	<link rel="apple-touch-icon" sizes="120x120" href="<?php echo site_url('/img/logo/favicon/apple-touch-icon-120x120.png') ?>" />
  	<link rel="apple-touch-icon" sizes="144x144" href="<?php echo site_url('/img/logo/favicon/apple-touch-icon-144x144.png') ?>" />
  	<link rel="apple-touch-icon" sizes="152x152" href="<?php echo site_url('/img/logo/favicon/apple-touch-icon-152x152.png') ?>" />
  	<link rel="apple-touch-icon" sizes="180x180" href="<?php echo site_url('/img/logo/favicon/apple-touch-icon-180x180.png') ?>" />
    <link rel="stylesheet" href="<?php echo site_url('/css/style.css') ?>">
    <script src="https://kit.fontawesome.com/a82e000026.js"></script>
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-152808621-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-152808621-1');
    </script>
</head>

<body class="loginBody">
    <div class="login">
        <h2><i class="fas fa-sign-in-alt"></i></h2>
        <h1>Inloggen</h1>
        <form action="<?php echo url("adminLogin") ?>" method="POST">
            <div class="username inputLogin">
                <input class="loginInputSpec" type="text" name="username" placeholder="Gebruikersnaam"><br>
                <?php if (isset($errors['username'])) : ?>
                    <span class="errors"> <?php echo $errors['username'] ?></span>
                <?php endif; ?>
            </div>
            <div class="ww inputLogin">
                <input type="password" class="loginInputSpec" name="wachtwoord" placeholder="Wachtwoord" id="password-field">
                <br> <?php if (isset($errors['wachtwoord'])) : ?>
                    <span class="errors"> <?php echo $errors['wachtwoord'] ?></span>
                <?php endif; ?>
            </div>
            <div class="loginButton">
                <button type="submit">INLOGGEN</button>
            </div>
        </form>
    </div>
</body>

</html>