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
        <a href="<?php echo url('adminPost'); ?>"><i class="fas fa-desktop"></i><span>Dashboard</span></a>
        <a href="#"><i class="fas fa-cogs"></i><span>Components</span></a>
        <a href="#"><i class="fas fa-table"></i><span>Tables</span></a>
        <a href="#"><i class="fas fa-th"></i><span>Forms</span></a>
        <a href="#"><i class="fas fa-info-circle"></i><span>About</span></a>
        <a href="#"><i class="fas fa-sliders-h"></i><span>Settings</span></a>
    </div>
</div>

<div class="sidebar">
    <div class="profile_info">
        <img src="<?php echo site_url('/img/MeesFoto.jpeg') ?>" class="profile_image" alt="">
        <h4>Mees Postma</h4>
    </div>
    <a href="<?php echo url('admin'); ?>"><i class="fas fa-desktop"></i><span>Dashboard</span></a>
    <a href="<?php echo url('adminPost'); ?>"><i class="fas fa-cogs"></i><span>Components</span></a>
    <a href="#"><i class="fas fa-table"></i><span>Tables</span></a>
    <a href="#"><i class="fas fa-th"></i><span>Forms</span></a>
    <a href="#"><i class="fas fa-info-circle"></i><span>About</span></a>
    <a href="#"><i class="fas fa-sliders-h"></i><span>Settings</span></a>
</div>