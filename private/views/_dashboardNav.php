<input type="checkbox" id="check">
<header class="dashHeader">
    <label for="check">
        <i class="fas fa-bars" id="sidebar_btn"></i>
    </label>
    <div class="left_area">
        <h3>Mees <span>Postma</span></h3>
    </div>
</header>

<div class="mobile_nav">
    <div class="nav_bar">
        <img src="<?php echo site_url('/img/MeesFoto.jpeg') ?>" class="mobile_profile_image" alt="">
        <i class="fa fa-bars nav_btn"></i>
    </div>
    <div class="mobile_nav_items">
        <a href="<?php echo url('admin'); ?>"><i class="fas fa-desktop"></i><span>Home</span></a>
        <a href="<?php echo url('allProjects'); ?>"><i class="fas fa-project-diagram"></i><span>Projecten</span></a>
        <a href="<?php echo url('projectMaken'); ?>"><i class="fas fa-plus-circle"></i><span>Project Toevoegen</span></a>
        <a href="<?php echo url('allPosts'); ?>"><i class="fas fa-th"></i><span>Tutorials</span></a>
        <a href="<?php echo url('adminPostMaken'); ?>"><i class="fas fa-plus-circle"></i><span>Tutorial Toevoegen</span></a>
        <a href="<?php echo url('skills'); ?>"><i class="fas fa-graduation-cap"></i><span>Skills</span></a>
        <a href="<?php echo url('adminTaken'); ?>"><i class="fas fa-tasks"></i><span>Takenlijst</span></a>
    </div>
</div>

<div class="sidebar">
    <div class="profile_info">
        <img src="<?php echo site_url('/img/MeesFoto.jpeg') ?>" class="profile_image" alt="">
        <h4>Mees Postma</h4>
    </div>
    <a href="<?php echo url('admin'); ?>"><i class="fas fa-desktop"></i><span>Home</span></a>
    <a href="<?php echo url('allProjects'); ?>"><i class="fas fa-project-diagram"></i><span>Projecten</span></a>
    <a href="<?php echo url('projectMaken'); ?>"><i class="fas fa-plus-circle"></i><span>Project Toevoegen</span></a>
    <a href="<?php echo url('allPosts'); ?>"><i class="fas fa-th"></i><span>Tutorials</span></a>
    <a href="<?php echo url('adminPostMaken'); ?>"><i class="fas fa-plus-circle"></i><span>Tutorial Toevoegen</span></a>
    <a href="<?php echo url('skills'); ?>"><i class="fas fa-graduation-cap"></i><span>Skills</span></a>
    <a href="<?php echo url('adminTaken'); ?>"><i class="fas fa-tasks"></i><span>Takenlijst</span></a>
</div>