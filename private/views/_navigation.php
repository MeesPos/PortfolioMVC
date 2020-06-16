<section id="nav">
    <div id="navbar">
        <div class="nav">
            <label for="toggle" id="label">&#9776;</label>
            <input type="checkbox" id="toggle">
            <div class="menu sticky">
                <a class="nav-items" href="<?php echo url('home') ?>" <?php if (current_route_is('home')) : ?> id="active" <?php endif ?>>Home</a>
                <a class="nav-items">Over Mij</a>
                <a class="nav-items">Projecten</a>
                <a class="nav-items">Tutorials</a>
                <button class="contact">
                    <a class="nav-items">Contact</a>
                </button>
            </div>
        </div>
    </div>
</section>