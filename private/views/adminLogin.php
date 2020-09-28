<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Mees Postma</title>
    <link rel="stylesheet" href="<?php echo site_url('/css/style.css') ?>">
    <script src="https://kit.fontawesome.com/a82e000026.js"></script>
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