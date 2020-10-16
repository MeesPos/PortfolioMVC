<nav id="navbar">
    <div id="logo">
        <img src="<?php echo site_url('/img/logo/logoZonderTekst.png') ?>" alt="Logo van Mees Postma">
    </div>

    <div id="navbar-left">
        <ul class="navbar-ul" id="menu-menu">
            <li class="menu-items menu-item">
                <a href="<?php echo url('home') ?>" <?php if (current_route_is('home')) : ?> class="active" <?php endif ?>>Home</a>
            </li>

            <li class="menu-items menu-item">
                <a href="<?php echo url('over') ?>" <?php if (current_route_is('over')) : ?> class="active" <?php endif ?>>Over mij</a>
            </li>

            <li class="menu-items menu-item">
                <a href="<?php echo url('projecten') ?>" <?php if (current_route_is('projecten')) : ?> class="active" <?php endif ?>>Projecten</a>
            </li>

            <!-- <li class="menu-items menu-item"> -->
                <!-- <a href="<?php echo url('tutorials') ?>" <?php if (current_route_is('tutorials')) : ?> class="active" <?php endif ?>>Tutorials</a> -->
            <!-- </li> -->

            <li class="menu-items menu-item contactNav">
                <a id="contactNav" href="<?php echo url('contact') ?>" <?php if (current_route_is('contact')) : ?> class="active" <?php endif ?>>Contact</a>
            </li>
        </ul>
    </div>

    <div class="burger">
        <div class="line1"></div>
        <div class="line2"></div>
        <div class="line3"></div>
    </div>
</nav>