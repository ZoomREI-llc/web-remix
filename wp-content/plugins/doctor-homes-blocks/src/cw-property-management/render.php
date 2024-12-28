<section class="cw-property-management">
    <div class="cw-property-management__inner">
        <div class="cw-property-management__title">
            <h2>Exhausted Or Stressed Out By Property Management? We Can Help!</h2>
        </div>
        <div class="cw-property-management__image">
            <?php
            echo get_responsive_image([
                'image_name'       => 'cw-property-management/lc-cta-img',
                'alt'              => 'Hassle-Free Solution',
                'additional_attrs' => [
                    'decoding'      => 'async',
                    'loading' => 'lazy',
                ]
            ]);
            ?>
        </div>
        <div class="cw-property-management__content">
            <h3 class="cw-property-management__content--subtitle">Most landlords struggle with one or more of the following:</h3>
            <ul>
                <li><?php
                    echo get_responsive_image([
                        'image_name'       => 'cw-property-management/icon-circle',
                        'alt'              => 'Checkmark',
                        'additional_attrs' => [
                            'decoding'      => 'async',
                            'loading' => 'lazy',
                        ]
                    ]);
                    ?>Late rent payments</li>
                <li><?php
                    echo get_responsive_image([
                        'image_name'       => 'cw-property-management/icon-circle',
                        'alt'              => 'Checkmark',
                        'additional_attrs' => [
                            'decoding'      => 'async',
                            'loading' => 'lazy',
                        ]
                    ]);
                    ?>Emergency repairs</li>
                <li><?php
                    echo get_responsive_image([
                        'image_name'       => 'cw-property-management/icon-circle',
                        'alt'              => 'Checkmark',
                        'additional_attrs' => [
                            'decoding'      => 'async',
                            'loading' => 'lazy',
                        ]
                    ]);
                    ?>Stress from managing multiple properties</li>
                <li><?php
                    echo get_responsive_image([
                        'image_name'       => 'cw-property-management/icon-circle',
                        'alt'              => 'Checkmark',
                        'additional_attrs' => [
                            'decoding'      => 'async',
                            'loading' => 'lazy',
                        ]
                    ]);
                    ?>Rising insurance costs</li>
                <li><?php
                    echo get_responsive_image([
                        'image_name'       => 'cw-property-management/icon-circle',
                        'alt'              => 'Checkmark',
                        'additional_attrs' => [
                            'decoding'      => 'async',
                            'loading' => 'lazy',
                        ]
                    ]);
                    ?>Taxes, utilities, and insurance payments</li>
                <li><?php
                    echo get_responsive_image([
                        'image_name'       => 'cw-property-management/icon-circle',
                        'alt'              => 'Checkmark',
                        'additional_attrs' => [
                            'decoding'      => 'async',
                            'loading' => 'lazy',
                        ]
                    ]);
                    ?>Finding the time to manage everything above!</li>
            </ul>
            <p class="cw-property-management__content--description">If you no longer want to deal with property management but are worried about the time, effort, and cost of a quick sale. We’ve got you.</p>
        </div>
        <div class="cw-fresh-start__testimonial">
            <?php
            echo get_responsive_image([
                'image_name'       => 'cw-property-management/testimonee',
                'alt'              => 'Leigh Williams',
                'class'           => 'cw-fresh-start__testimonee',
                'default_size'     => 300,
                'sizes_attr'       => '80px',
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
                                                        'image_name'       => 'cw-property-management/star',
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
                                            'image_name'       => 'cw-property-management/verified-check-circle',
                                            'alt'              => 'Verified',
                                            'additional_attrs' => [
                                                'decoding'      => 'async',
                                                'loading' => 'lazy',
                                            ]
                                        ]);
                                        ?> <span class="verified">Verified customer</span>
                    </cite>
                </blockquote>
            </div>
        </div>
    </div>
</section>