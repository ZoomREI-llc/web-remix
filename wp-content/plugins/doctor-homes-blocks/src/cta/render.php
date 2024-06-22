<?php
$dh_image_id = 83;
$dh_image_url = wp_get_attachment_url($dh_image_id);

$testi_image_id = 100;
$testi_image_url = wp_get_attachment_url($testi_image_id);

$star_icon_id = 124;
$star_icon_url = wp_get_attachment_url($star_icon_id);
?>

<section class="sell-house">
    <div class="container">
        <div class="image">
            <img src="<?php echo esc_url($dh_image_url); ?>" alt="Man in Suit">
        </div>
        <div class="content">
            <h2>Sell Your House As Is Fast</h2>
            <h3>We Make It Incredibly Easy To Sell Your House For Cash</h3>
            <p>Whatever your circumstances, no matter the condition of your house, we're happy to buy. Contact us today, get an instant cash offer for your house, and let's get that house sold!</p>
            <a href="#" class="cta-button">Get My Offer</a>
            <div class="testimonial">
                <img src="<?php echo esc_url($testi_image_url); ?>" alt="Testimonial Image">
                <div class="testimonial-text">
                    <p>“We are very grateful for Doctor Homes. They were always professional and reliable, they answered my first call right away and kept me updated throughout the whole selling process.”</p>
                    <p class="testimonial-name">Liv Skyler <span class="stars"><img src="<?php echo esc_url($star_icon_url); ?>" alt="Star"><img src="<?php echo esc_url($star_icon_url); ?>" alt="Star"><img src="<?php echo esc_url($star_icon_url); ?>" alt="Star"><img src="<?php echo esc_url($star_icon_url); ?>" alt="Star"><img src="<?php echo esc_url($star_icon_url); ?>" alt="Star"></span></p>
                </div>
            </div>
        </div>
    </div>
</section>