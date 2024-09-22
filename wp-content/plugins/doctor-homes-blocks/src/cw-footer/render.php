<?php

$logoUrl = esc_url(plugins_url('src/cw-footer/assets/footer-logo.svg', dirname(__FILE__, 2)));

?>

<footer class="cw-footer">
    <div class="cw-footer__content">
        <div class="cw-footer__logo">
            <img src="<?php echo $logoUrl; ?>" alt="Logo" />
        </div>
        <div class="cw-footer__text">
            <p>We are a real estate solutions and investment firm that helps homeowners get rid of burdensome houses, fast. We can buy your house immediately with a fair cash offer and zero hassle</p>
            <p>© 2024 Doctor Homes LLC - Powered by Carrot</p>
        </div>
    </div>
</footer>