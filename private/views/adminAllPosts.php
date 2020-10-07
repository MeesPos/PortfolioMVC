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
        <section id="allPosts">
            <h1>Alle Tutorials</h1>
            <?php foreach ($posts as $row) : ?>
                <div class="posts post-<?php echo $row['id'] ?>">
                    <h4><?php echo $row['id'] ?>. <?php echo $row['titel'] ?></h4>
                    <div class="postsAction">
                        <a class="liveversie" href="<?php echo url('tutorialDetail') . $row['link']; ?>">Live versie</a>
                        <a class="bewerkPost" href="<?php echo url('wijzigPost') . $row['id'] ?>"><i class="fas fa-pencil-alt"></i></a>
                        <a class="deletePost" href="<?php echo url('deletePost') . $row['id'] ?>"><i class="fas fa-trash"></i></a>
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