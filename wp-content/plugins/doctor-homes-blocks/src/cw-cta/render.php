<section class="cw-cta">
    <div class="cw-cta__inner">
        <div class="cw-cta__image">
            <?php
            echo get_responsive_image([
                'image_name'       => 'cw-cta/lc-cta-img',
                'alt'              => 'Hassle-Free Solution',
                'additional_attrs' => [
                    'decoding'      => 'async',
                    'loading' => 'lazy',
                ]
            ]);
            ?>
        </div>
        <div class="cw-cta__content">
            <div class="cw-hero__reviews">
                <div class="cw-hero__reviews-stars-wrapper">
                    <?php for ($i = 0; $i < 5; $i++): ?>
                        <span class="cw-hero__star"><?php
                                                    echo get_responsive_image([
                                                        'image_name'       => 'cw-cta/star',
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

                    <p>Rated <strong>4.7/5</strong> | Based on <strong>100+</strong> reviews</p>
                </div>
            </div>
            <h3>Ready To Sell Your Property?</h3>
            <h2>Get A Cash Offer In Under 7 Minutes</h2>
            <p class="cw-cta__content--description">Fill out our form and we’ll get back to you in a few minutes.</p>
            <ul>
                <li><?php
                    echo get_responsive_image([
                        'image_name'       => 'cw-cta/check-circle',
                        'alt'              => 'Checkmark',
                        'additional_attrs' => [
                            'decoding'      => 'async',
                            'loading' => 'lazy',
                        ]
                    ]);
                    ?>Get an instant&nbsp;<strong>competitive, cash offer</strong></li>
                <li><?php
                    echo get_responsive_image([
                        'image_name'       => 'cw-cta/check-circle',
                        'alt'              => 'Checkmark',
                        'additional_attrs' => [
                            'decoding'      => 'async',
                            'loading' => 'lazy',
                        ]
                    ]);
                    ?>We’ll buy your house in&nbsp;<strong>any condition</strong></li>
                <li><?php
                    echo get_responsive_image([
                        'image_name'       => 'cw-cta/check-circle',
                        'alt'              => 'Checkmark',
                        'additional_attrs' => [
                            'decoding'      => 'async',
                            'loading' => 'lazy',
                        ]
                    ]);
                    ?><strong>No agent fees,</strong>&nbsp;commissions, or hidden costs</li>
            </ul>
            <a class="cw-cta__cta--button" href="#cw-form">GET MY CASH OFFER NOW <?php
                                                                                    echo get_responsive_image([
                                                                                        'image_name'       => 'cw-cta/cta-arrow',
                                                                                        'alt'              => 'Arrow',
                                                                                        'additional_attrs' => [
                                                                                            'decoding'      => 'async',
                                                                                            'loading' => 'lazy',
                                                                                        ]
                                                                                    ]);
                                                                                    ?></a>
        </div>
        <div class="cw-fresh-start__testimonial">
            <?php
            echo get_responsive_image([
                'image_name'       => 'cw-fresh-start/testimonee',
                'alt'              => 'Leigh Williams',
                'class'            => 'cw-fresh-start__testimonee',
                'default_size'     => 300,
                'sizes_attr'      => '80px',
                'additional_attrs' => [
                    'decoding'      => 'async',
                    'loading' => 'lazy',
                ]
            ]);
            ?>
            <div class="cw-fresh-start__testimonial--content">
                <div class="cw-hero__reviews-stars-wrapper">
                    <?php for ($i = 0; $i < 5; $i++): ?>
                        <span class="cw-hero__star"><?php
                                                    echo get_responsive_image([
                                                        'image_name'       => 'cw-cta/star',
                                                        'alt'              => 'Star',
                                                        'additional_attrs' => [
                                                            'decoding'      => 'async',
                                                            'loading' => 'lazy',
                                                        ]
                                                    ]);
                                                    ?></span>
                    <?php endfor; ?>
                </div>
                <blockquote>
                    <p>"The <strong>customer service experience with Doctor Homes was outstanding.</strong> From beginning to end, the process of selling my home was exemplary."</p>
                    <cite>
                        Leigh Williams<?php
                                        echo get_responsive_image([
                                            'image_name'       => 'cw-cta/verified-check-circle',
                                            'alt'              => 'Checkmark',
                                            'additional_attrs' => [
                                                'decoding'      => 'async',
                                                'loading' => 'lazy',
                                            ]
                                        ]);
                                        ?> <span class="verified">Verified customer</span></cite>
                </blockquote>
            </div>
        </div>
    </div>
</section>