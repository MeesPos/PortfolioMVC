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
        <!-- Github stats -->

        <!-- Agenda -->
    </div>

    <?php if ($this->section('dashboardFooter')) : ?>
        <?php echo $this->section('dashboardFooter') ?>
    <?php else : ?>
        <?php echo $this->fetch('_dashboardFooter') ?>
    <?php endif ?>
</body>
</html>