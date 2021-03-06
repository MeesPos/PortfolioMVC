<?php $content = getContent(); ?>

<footer>
    <div class="underFooter"></div>

    <div id="footerLinks">
        <div class="footer-links">
            <h3>Contact</h3>
            <a href="<?php echo url('contact') ?>">Contact</a>
        </div>

        <div class="footer-links">
            <h3><?php getContentCurrentLang('information', $content)?></h3>
            <a href="<?php echo url('over') ?>"><?php getContentCurrentLang('about_title', $content)?></a><br>
            <a href="<?php echo url('projecten') ?>"><?php getContentCurrentLang('projects_title', $content)?></a><br>
            <!-- <a href="<?php echo url('tutorials') ?>">Tutorials</a> -->
        </div>

        <div class="footer-links">
            <h3>Social Media</h3>
            <a href="https://www.linkedin.com/in/mees-postma-a911b1196/" target="_blank">LinkedIn</a><br>
        </div>
    </div>

    <p class="copyright">Copyright © <?php echo date("Y") ?> Mees Postma</p>
</footer>

<script src="<?php echo site_url('/js/nav.js') ?>"></script>