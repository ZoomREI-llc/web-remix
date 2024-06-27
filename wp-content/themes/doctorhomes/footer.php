<footer id="doctor-homes-footer">
    <div class="footer-content">
        <div class="footer-logo">
            <img src="<?php echo wp_get_attachment_url(23); ?>" alt="Site Logo" class="logo-img">
        </div>
        <a href="#top" class="back-to-top">
            <div class="back-to-top-icon">
                <img src="<?php echo wp_get_attachment_url(150); ?>" alt="">
            </div>
            <span>Back to top</span>
        </a>
        <div class="footer-menus">
            <div class="footer-menu">
                <span class="footer-title">Company</span>
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'footer-company-menu',
                    'container' => false,
                    'menu_class' => 'footer-menu-list',
                ));
                ?>
            </div>
            <div class="footer-menu">
                <span class="footer-title">Locations</span>
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'footer-locations-menu',
                    'container' => false,
                    'menu_class' => 'footer-menu-list',
                ));
                ?>
            </div>
            <div class="footer-menu">
                <span class="footer-title">Resources</span>
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'footer-resources-menu',
                    'container' => false,
                    'menu_class' => 'footer-menu-list',
                ));
                ?>
            </div>
            <div class="footer-menu">
                <span class="footer-title">Legal</span>
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'footer-legal-menu',
                    'container' => false,
                    'menu_class' => 'footer-menu-list',
                ));
                ?>
            </div>
            <div class="footer-contact">
                <span class="footer-title">Contact Us</span>
                <p class="contact-item"><img src="<?php echo wp_get_attachment_url(22); ?>" alt="Phone Icon" class="contact-icon"> +1 386-688-3295</p>
                <p class="contact-item"><img src="<?php echo wp_get_attachment_url(21); ?>" alt="Email Icon" class="contact-icon"> Ourstudio@hello.com</p>
            </div>
            <div class="social-icons">
                <a href="#"><img src="<?php echo wp_get_attachment_url(19); ?>" alt="Facebook Icon" class="social-icon"></a>
                <a href="#"><img src="<?php echo wp_get_attachment_url(20); ?>" alt="YouTube Icon" class="social-icon"></a>
            </div>
        </div>
    </div>
    <div class="footer-disclaimer">
        <!-- <hr /> -->
        <p>The content provided on this website is intended for informational purposes only and does not constitute an offer to buy or a solicitation to sell property. All representations regarding potential transactions are preliminary and subject to change. No content on this site should be interpreted as a binding promise or guarantee of a specific outcome. Each property purchase will be subject to individual negotiation and the execution of a definitive agreement, the terms of which may vary. We make no warranties regarding the accuracy, completeness, legality, or reliability of any information offered on this website. Sellers are advised to conduct their own due diligence and consult with professional advisors prior to entering into any transaction with us.</p>
    </div>
</footer>

<?php wp_footer(); ?>
</body>

</html>