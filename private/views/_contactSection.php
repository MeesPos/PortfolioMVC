<?php $content = getContent(); ?>

<section id="contact">
    <div class="contactMe">
        <h2><?php getContentCurrentLang('more_info_title', $content)?></h2>
        <h3><?php getContentCurrentLang('contact_title', $content)?></h3>
        <p><?php getContentCurrentLang('contact_desc', $content)?></p>
        <a href="<?php echo url('contact') ?>">
            <button class="blueButton">Contact</button>
        </a>
    </div>

    <div class="heroAbout contactHero">
        <img src="<?php echo site_url('/img/contactMe.png') ?>" alt="Mees Postma, Over mij Illustration">
    </div>
</section>