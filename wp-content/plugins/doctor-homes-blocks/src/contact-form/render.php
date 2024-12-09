<section class="dh-contact-form" style="--tick-url: url('<?php echo get_image_url('contact-form/tick'); ?>');">
    <div class="grid-container">
        <div class="contact-form__headings">
            <div class="contact-form__reviews">
                <div class="contact-form__reviews-stars-wrapper">
                    <span class="contact-form__star"><?php echo get_responsive_image('contact-form/star', 'star'); ?></span>
                    <span class="contact-form__star"><?php echo get_responsive_image('contact-form/star', 'star'); ?></span>
                    <span class="contact-form__star"><?php echo get_responsive_image('contact-form/star', 'star'); ?></span>
                    <span class="contact-form__star"><?php echo get_responsive_image('contact-form/star', 'star'); ?></span>
                    <span class="contact-form__star"><?php echo get_responsive_image('contact-form/star', 'star'); ?></span>
                </div>
                <div class="contact-form__reviews-text">
                    <p>Rated <strong>4.7/5</strong> | Based on <strong>100+</strong> reviews</p>
                </div>
            </div>
            <h1 class="title-1">Contact Us</h1>
            <h2 class="title-2">Any question or remarks? Just write us a message!</h2>
        </div>

        <div class="contact-form__content">
            <div class="contact-form__details">
                <div class="contact-form__details-text">
                    <h3 class="title-3">Reach Out To Us</h3>
                    <p>Get a cash offer for your house. No cleaning, no repairs, no fees. Fast, easy, and hassle-free!</p>
                </div>
                <div class="contact-form__details-items">
                    <div class="contact-form__contact-detail">
                        <?php echo get_responsive_image('contact-form/phone', 'Phone Icon'); ?>
                        <a href="tel:(234) DR-HOMES">
                            <span>(234) DR-HOMES</span>
                        </a>
                    </div>
                    <div class="contact-form__contact-detail">
                        <?php echo get_responsive_image('contact-form/envelope', 'Envelope Icon'); ?>
                        <a href="mailto:contact@doctorhomes.com">
                            <span>contact@doctorhomes.com</span>
                        </a>
                    </div>
                    <div class="contact-form__contact-detail">
                        <?php echo get_responsive_image('contact-form/location', 'Location Icon'); ?>
                        <span>1990 N California Blvd, Ste. 46,<br>
                            Walnut Creek, CA 94596</span>
                    </div>
                </div>
            </div>
            <div class="contact-form__wrapper hide-on-success">
                <?= $content ?>
            </div>
            <div class="contact-form__success-wrapper show-on-success">
                <div class="contact-form__success">
                    <h3>Thank you for submitting your inquiry.</h3>
                    <p>We will get in touch with you as soon as we can.</p>
                </div>
                <?php echo get_responsive_image('contact-form/letter', 'Send Letter', 'contact-form__airplane'); ?>
            </div>
        </div>
    </div>
</section>