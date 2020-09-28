<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Mees Postma</title>
    <link rel="stylesheet" href="<?php echo site_url('/css/style.css') ?>">
    <script src="https://kit.fontawesome.com/a82e000026.js"></script>
</head>

<body>
    <div class="login">
        <form action="<?php echo url("login") ?>" method="POST">
            <div class="username">
                <input type="username" name="username" placeholder="Gebruikersnaam"><br>
                <?php if (isset($errors['username'])) : ?>
                    <span class="errors"> <?php echo $errors['username'] ?></span>
                <?php endif; ?>
            </div>
            <div class="ww">
                <input type="password" name="wachtwoord" placeholder="Wachtwoord" id="password-field">
                <i id="pass-status" class="fa fa-eye" aria-hidden="true" onClick="viewPassword()" required></i>
                <br> <?php if (isset($errors['wachtwoord'])) : ?>
                    <span class="errors"> <?php echo $errors['wachtwoord'] ?></span>
                <?php endif; ?>
            </div>
            <div class="buttons">
                <button type="submit" class="button">INLOGGEN</button>
            </div>
        </form>
    </div>
</body>

</html>