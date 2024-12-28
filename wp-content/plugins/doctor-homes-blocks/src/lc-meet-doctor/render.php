<section class="lc-meet-doctor">
    <div class="lc-meet-doctor__container">
        <div class="lc-meet-doctor__content">
            <div class="lc-meet-doctor__text">
                <span class="lc-meet-doctor__hi">Hi, I'm Doctor Homes</span>
                <h2 class="lc-meet-doctor__title">Have your circumstances changed and you need to sell your home quickly?</h2>
                <h3 class="lc-meet-doctor__subtitle">Let me help! We are genuine homebuyers, and we buy ANY house!</h3>
                <div class="lc-meet-doctor__description">
                    <p>Sometimes the unexpected happens and our plans need to change. Maybe you’re working through a divorce, need to relocate for work, or are just looking for a fresh start.</p>
                    <p>Whatever your circumstances and whatever state your home is in – it doesn’t matter to us. <strong>We’ll buy it, quickly and discreetly.</strong></p>
                    <p>All this, <strong>without the hassle.</strong> No real estate agents. No repairs or cleaning. Plus, we always make you a fair offer.</p>
                </div>
                <h3 class="lc-meet-doctor__cta-text">Ready to sell your house right now?</h3>
            </div>
            <a class="cta-btn lc-meet-doctor__cta" href="#lc-form">GET MY CASH OFFER NOW <?php
                                                                                            echo get_responsive_image([
                                                                                                'image_name'       => 'lc-meet-doctor/cta-arrow',
                                                                                                'alt'              => 'Arrow',
                                                                                                'additional_attrs' => [
                                                                                                    'decoding'      => 'async',
                                                                                                    'loading' => 'lazy',
                                                                                                ]
                                                                                            ]);
                                                                                            ?></a>
            <div class="lc-hero__reviews">
                <div class="lc-hero__reviews-stars-wrapper">
                    <?php for ($i = 0; $i < 5; $i++) : ?>
                        <span class="lc-hero__star"><?php
                                                    echo get_responsive_image([
                                                        'image_name'       => 'lc-meet-doctor/star',
                                                        'alt'              => 'Star',
                                                        'additional_attrs' => [
                                                            'decoding'      => 'async',
                                                            'loading' => 'lazy',
                                                        ]
                                                    ]);
                                                    ?></span>
                    <?php endfor; ?>
                </div>
                <div class="lc-hero__reviews-text">
                    <p>Rated <strong>4.7/5</strong> | Based on <strong>100+</strong> reviews</p>
                </div>
            </div>
        </div>
        <div class="lc-meet-doctor__img">
            <?php
            echo get_responsive_image([
                'image_name'       => 'lc-meet-doctor/seniors',
                'alt'              => 'Seniors',
                'additional_attrs' => [
                    'decoding'      => 'async',
                    'loading' => 'lazy',
                ]
            ]);
            ?>
        </div>
    </div>


    <div class="lc-featured-in">
        <div class="lc-featured-in__container">
            <span class="lc-featured-in__text">AS SEEN ON:</span>
            <div class="lc-featured-in__logos-wrapper">
                <div class="lc-featured-in__logos">
                    <div class="lc-featured-in__logo"><?php
                                                        echo get_responsive_image([
                                                            'image_name'       => 'lc-meet-doctor/cbs',
                                                            'alt'              => 'CBS',
                                                            'additional_attrs' => [
                                                                'decoding'      => 'async',
                                                                'loading' => 'lazy',
                                                            ]
                                                        ]);
                                                        ?></div>
                    <div class="lc-featured-in__logo"><?php
                                                        echo get_responsive_image([
                                                            'image_name'       => 'lc-meet-doctor/nbc',
                                                            'alt'              => 'NBC',
                                                            'additional_attrs' => [
                                                                'decoding'      => 'async',
                                                                'loading' => 'lazy',
                                                            ]
                                                        ]);
                                                        ?></div>
                    <div class="lc-featured-in__logo"><?php
                                                        echo get_responsive_image([
                                                            'image_name'       => 'lc-meet-doctor/forbes',
                                                            'alt'              => 'Forbes',
                                                            'additional_attrs' => [
                                                                'decoding'      => 'async',
                                                                'loading' => 'lazy',
                                                            ]
                                                        ]);
                                                        ?></div>
                    <div class="lc-featured-in__logo"><?php
                                                        echo get_responsive_image([
                                                            'image_name'       => 'lc-meet-doctor/fox',
                                                            'alt'              => 'FOX',
                                                            'additional_attrs' => [
                                                                'decoding'      => 'async',
                                                                'loading' => 'lazy',
                                                            ]
                                                        ]);
                                                        ?></div>
                </div>
            </div>
        </div>
    </div>
</section>