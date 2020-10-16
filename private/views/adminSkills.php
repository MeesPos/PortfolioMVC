<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin | Mees Postma</title>
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
    <link rel="stylesheet" href="<?php echo site_url('/css/admin.css') ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
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

<body>
    <?php if ($this->section('dashboardNav')) : ?>
        <?php echo $this->section('dashboardNav') ?>
    <?php else : ?>
        <?php echo $this->fetch('_dashboardNav') ?>
    <?php endif ?>

    <div class="content">
        <section id="addSkill">
            <h2>Voeg een Skill toe</h2>
            <form action="<?php echo url('insertSkill') ?>" method="POST">
                <div class="nameAndIcon">
                    <input type="text" placeholder="Icon code (Font Awesome)..." name="icon" id="icon">
                    <input type="text" placeholder="Skillnaam..." name="skill" id="skill">
                </div>

                <div class="skillNiveau">
                    <select name="skillNiveau" id="skillNiveau">
                        <option value="Basis">Basis</option>
                        <option value="Gemiddeld">Gemiddeld</option>
                        <option value="Geavanceerd">Geavanceerd</option>
                        <option value="Expert">Expert</option>
                    </select>
                </div>

                <div class="submit">
                    <input class="postSubmit" style="width: 85.5%;" type="submit" value="Voeg toe">
                </div>
            </form>
        </section>

        <section id="allPosts">
            <h1>Alle Skills</h1>
            <?php foreach ($skills as $row) : ?>
                <div class="posts skill-<?php echo $row['id'] ?>">
                    <h4><?php echo $row['id'] ?>. <i class="<?php echo $row['fa-class'] ?>"></i> <?php echo $row['skillnaam'] ?></h4>
                    <div class="postsAction">
                        <a class="bewerkPost" href="<?php echo url('updateSkill') . $row['id'] ?>"><i class="fas fa-pencil-alt"></i></a>
                        <a class="deletePost" href="<?php echo url('deleteSkill') . $row['id'] ?>"><i class="fas fa-trash"></i></a>
                    </div>
                </div>
            <?php endforeach; ?>
        </section>
    </div>

    <?php if ($this->section('dashboardFooter')) : ?>
        <?php echo $this->section('dashboardFooter') ?>
    <?php else : ?>
        <?php echo $this->fetch('_dashboardFooter') ?>
    <?php endif ?>
</body>

</html>