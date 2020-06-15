<section id="nav">
    <div id="navbar">
        <div class="nav">
            <label for="toggle" id="label">&#9776;</label>
            <input type="checkbox" id="toggle">
            <div class="menu sticky">
                <a class="nav-items" href="<?php echo url('home') ?>" <?php if (current_route_is('home')) : ?> id="active" <?php endif ?>>Home</a>
            </div>
        </div>
    </div>
</section>