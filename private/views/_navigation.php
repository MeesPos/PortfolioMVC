<?php $content = getContent(); ?>

<nav id="navbar">
    <div id="logo">
        <a href="<?php echo url('home') ?>">
            <img src="<?php echo site_url('/img/logo/logoZonderTekst.png') ?>" alt="Logo van Mees Postma">
        </a>
    </div>

    <div id="navbar-left">
        <ul class="navbar-ul" id="menu-menu">
            <li class="menu-items menu-item">
                <a href="<?php echo url('home') ?>" <?php if (current_route_is('home')) : ?> class="active" <?php endif ?>>Home</a>
            </li>

            <li class="menu-items menu-item">
                <a href="<?php echo url('over') ?>" <?php if (current_route_is('over')) : ?> class="active" <?php endif ?>><?php getContentCurrentLang('about_title', $content)?></a>
            </li>

            <li class="menu-items menu-item">
                <a href="<?php echo url('projecten') ?>" <?php if (current_route_is('projecten')) : ?> class="active" <?php endif ?>><?php getContentCurrentLang('projects_title', $content)?></a>
            </li>

            <!-- <li class="menu-items menu-item"> -->
                <!-- <a href="<?php echo url('tutorials') ?>" <?php if (current_route_is('tutorials')) : ?> class="active" <?php endif ?>>Tutorials</a> -->
            <!-- </li> -->

            <li class="menu-item taal-switch">
                <a class="nl" href="?lang=nl" <?php if($_SESSION['lang'] == 'nl') : ?> style="font-weight: bold;" <?php endif; ?>>NL</a> | 
                <a class="en" href="?lang=en" <?php if($_SESSION['lang'] == 'en') : ?> style="font-weight: bold;" <?php endif; ?>>EN</a>
            </li>

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