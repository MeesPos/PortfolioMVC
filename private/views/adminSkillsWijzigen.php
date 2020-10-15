<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin | Mees Postma</title>
    <link rel="stylesheet" href="<?php echo site_url('/css/admin.css') ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
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
            <?php foreach($theSkill as $row) : ?>
                <form action="<?php echo url('wijzigSkill') . $row['id'] ?>" method="POST">
                    <div class="nameAndIcon">
                        <input type="text" value="<?php echo $row['fa-class'] ?>" placeholder="Icon code (Font Awesome)..." name="icon" id="icon">
                        <input type="text" value="<?php echo $row['skillnaam'] ?>" placeholder="Skillnaam..." name="skill" id="skill">
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
                        <input class="postSubmit" style="width: 85.5%;" type="submit" value="Wijzigen">
                    </div>
                </form>
            <?php endforeach; ?>
        </section>

        <section id="allPosts">
            <h1>Alle Skills</h1>
            <?php foreach ($skills as $row) : ?>
                <div class="posts skill-<?php echo $row['id'] ?>">
                    <h4><?php echo $row['id'] ?>. <i class="<?php echo $row['fa-class'] ?>"></i> <?php echo $row['skillnaam'] ?></h4>
                    <div class="postsAction">
                        <a class="bewerkPost" href="<?php echo url('wijzigProject') . $row['id'] ?>"><i class="fas fa-pencil-alt"></i></a>
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