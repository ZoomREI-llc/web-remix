<section class="lc-fresh-start">
    <div class="lc-fresh-start__container">
        <div class="lc-hero__reviews">
            <div class="lc-hero__reviews-stars-wrapper">
                <?php for ($i = 0; $i < 5; $i++): ?>
                    <span class="lc-hero__star"><?php
                                                echo get_responsive_image([
                                                    'image_name'       => 'lc-cta/star',
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
        <div class="lc-fresh-start__intro">
            <h2>Do You Need A Fresh Start?</h2>
            <p class="lc-fresh-start__intro-p">Our discreet, efficient sales are ideal for people going through changes in their lives.</p>
        </div>
        <div class="lc-fresh-start__reasons">
            <div class="reason">
                <div class="reason__icon">
                    <?php
                    echo get_responsive_image([
                        'image_name'       => 'lc-fresh-start/balance',
                        'alt'              => 'Divorce',
                        'additional_attrs' => [
                            'decoding'      => 'async',
                            'loading' => 'lazy',
                        ]
                    ]);
                    ?>
                </div>
                <div class="reason__content">
                    <h3>Divorce</h3>
                    <p>If you share a home with a former spouse and are looking to move on, we’ll help you with a rapid, stress-free sale.</p>
                </div>
            </div>
            <div class="reason">
                <div class="reason__icon">
                    <?php
                    echo get_responsive_image([
                        'image_name'       => 'lc-fresh-start/medical',
                        'alt'              => 'Medical Expenses',
                        'additional_attrs' => [
                            'decoding'      => 'async',
                            'loading' => 'lazy',
                        ]
                    ]);
                    ?>
                </div>
                <div class="reason__content">
                    <h3>Medical Expenses</h3>
                    <p>An accident or ongoing health issue can mean you need to downsize or need fast access to cash, we’re ready to make you an offer right now.</p>
                </div>
            </div>
            <div class="reason">
                <div class="reason__icon">
                    <?php
                    echo get_responsive_image([
                        'image_name'       => 'lc-fresh-start/old',
                        'alt'              => 'Senior',
                        'additional_attrs' => [
                            'decoding'      => 'async',
                            'loading' => 'lazy',
                        ]
                    ]);
                    ?>
                </div>
                <div class="reason__content">
                    <h3>Moving To Senior Living</h3>
                    <p>If you or a loved one are moving into senior care, we’ll help remove the complexity and strain of drawn-out sales.</p>
                </div>
            </div>
            <div class="reason">
                <div class="reason__icon">
                    <?php
                    echo get_responsive_image([
                        'image_name'       => 'lc-fresh-start/army',
                        'alt'              => 'Military Deployment',
                        'additional_attrs' => [
                            'decoding'      => 'async',
                            'loading' => 'lazy',
                        ]
                    ]);
                    ?>
                </div>
                <div class="reason__content">
                    <h3>Military Deployment</h3>
                    <p>Whether you need to relocate for work or are expecting an overseas deployment, we can work to your timeline, with a fast, hassle-free sale.</p>
                </div>
            </div>
        </div>
        <div class="lc-fresh-start__testimonial">
            <?php
            echo get_responsive_image([
                'image_name'       => 'lc-fresh-start/leigh-williams',
                'alt'              => 'Leigh Williams',
                'class'           => 'lc-fresh-start__testimonee',
                'default_size'     => 300,
                'sizes'            => '80px',
                'additional_attrs' => [
                    'decoding'      => 'async',
                    'loading' => 'lazy',
                ]
            ]);
            ?>
            <div class="lc-fresh-start__testimonial--content">
                <div class="lc-hero__reviews-stars-wrapper">
                    <?php for ($i = 0; $i < 5; $i++): ?>
                        <span class="lc-hero__star"><?php
                                                    echo get_responsive_image([
                                                        'image_name'       => 'lc-cta/star',
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
                        Leigh Williams <?php
                                        echo get_responsive_image([
                                            'image_name'       => 'lc-fresh-start/check-circle',
                                            'alt'              => 'Verified',
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