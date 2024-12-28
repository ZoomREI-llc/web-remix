<section id='about' class="cw-meet-doctorhomes-wrapper">
    <div class="cw-meet-doctorhomes">
        <div class="cw-meet-doctorhomes__media">
            <?php
            echo get_responsive_image([
                'image_name'       => 'cw-meet-doctorhomes/meet-doctor-bg',
                'alt'              => 'Meet Doctor Homes Background',
                'class'           => 'cw-meet-doctorhomes__media--fon',
                'additional_attrs' => [
                    'decoding'      => 'async',
                    'loading' => 'lazy',
                ]
            ]);
            ?>
        </div>
        <div class="cw-meet-doctorhomes__container">
            <div class="cw-meet-doctorhomes__content">
                <div class="cw-meet-doctorhomes__text">
                    <span class="cw-meet-doctorhomes__hi">HI I'M DOCTOR HOMES!</span>
                    <h2 class="cw-meet-doctorhomes__title">Got A House You Need To Sell In St Louis, Missouri?</h2>
                    <h3 class="cw-meet-doctorhomes__subtitle">Let me help! We are genuine homebuyers, and we buy ANY house!</h3>
                    <div class="cw-meet-doctorhomes__description">
                        <p>It might be that you’ve inherited a house, are behind on payments, don’t want to spend money on repairs, or need to relocate in a hurry. Whatever your circumstance or whatever state your home is in – it doesn’t matter to us. <strong>We’ll buy it, and fast!</strong></p>
                        <p>All this, <strong>without the hassle.</strong> No real estate agents. No inspections. No repairs or cleaning. Plus, we always make you a fair offer and pay the closing costs ourselves.</p>
                    </div>
                    <h3 class="cw-meet-doctorhomes__cta-text">Ready to sell your house right now?</h3>
                </div>
                <div class="cw-meet-doctorhomes__footer-block">
                    <a class="cta-btn cw-meet-doctorhomes__cta" href="#cw-form">Get my offer<?php
                                                                                            echo get_responsive_image([
                                                                                                'image_name'       => 'cw-meet-doctorhomes/cta-arrow',
                                                                                                'alt'              => 'Arrow',
                                                                                                'additional_attrs' => [
                                                                                                    'decoding'      => 'async',
                                                                                                    'loading' => 'lazy',
                                                                                                ]
                                                                                            ]);
                                                                                            ?></a>
                    <div class="cw-hero__reviews">
                        <div class="cw-hero__reviews-stars-wrapper">
                            <?php for ($i = 0; $i < 5; $i++): ?>
                                <span class="cw-hero__star"><?php
                                                            echo get_responsive_image([
                                                                'image_name'       => 'cw-meet-doctorhomes/star',
                                                                'alt'              => 'Star',
                                                                'additional_attrs' => [
                                                                    'decoding'      => 'async',
                                                                    'loading' => 'lazy',
                                                                ]
                                                            ]);
                                                            ?></span>
                            <?php endfor; ?>
                        </div>
                        <div class="cw-hero__reviews-text">
                            <p>Rated <strong>4.7</strong> Based on <strong>100+</strong> reviews</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>