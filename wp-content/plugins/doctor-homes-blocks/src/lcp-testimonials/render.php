<?php
$testimonials = [
    [
        'name' => 'Nataly Lebedev',
        'asset' => 'lcp-testimonials/nataly-lebedev',
        'text' => '"In a day and age where professionals in the service industry never seem to answer their phones or return calls, Doctor Homes promptly responded to my initial call, and was always available during the entire selling process."',
        'rating' => 5
    ],
    [
        'name' => 'Shaked Elnatan',
        'asset' => 'lcp-testimonials/shaked-elnatan',
        'text' => '"Great experience selling my house as is to Doctor Homes. They were incredibly professional and bought our home quickly for a price we were satisfied with."',
        'rating' => 5
    ],
    [
        'name' => 'Darren Pilch',
        'asset' => 'lcp-testimonials/darren-pilch',
        'text' => '"I am quite happy with the easy, fast, stress- free process of dealing with Doctor Homes.  I needed to rehab this property that sat vacant too long. He made a reasonable offer and the sale went quickly with prompt payment."',
        'rating' => 5
    ],
    [
        'name' => 'Liv Skyler ',
        'asset' => 'lcp-testimonials/liv-skyler',
        'text' => '“We are very grateful for Doctor Homes. They were always professional and reliable, they answered my first call right away and kept me updated throughout the whole selling process.” ',
        'rating' => 5
    ],
    [
        'name' => 'Leigh Williams',
        'asset' => 'lcp-testimonials/leigh-williams',
        'text' => '"The customer service experience with Doctor Homes was outstanding. From beginning to end, the process of selling my home was exemplary."',
        'rating' => 5
    ]
];
?>

<section class="testimonial-carousel-wrapper">
    <div class="grid-container">
        <div class="testimonial-carousel-text">
            <h2 class="title-2">What People Are Saying</h2>
            <p class="title-4"></p>

            <div class="swiper-navigation">
                <button type="button" class="swiper-navigation__btn js-swiper-prev">
                    <?php
                    echo get_responsive_image([
                        'image_name'       => 'lcp-testimonials/navigation-arrow',
                        'alt'              => 'Previous',
                        'additional_attrs' => [
                            'decoding'      => 'async',
                            'loading' => 'lazy',
                        ]
                    ]);
                    ?>
                </button>
                <button type="button" class="swiper-navigation__btn js-swiper-next">
                    <?php
                    echo get_responsive_image([
                        'image_name'       => 'lcp-testimonials/navigation-arrow',
                        'alt'              => 'Next',
                        'additional_attrs' => [
                            'decoding'      => 'async',
                            'loading' => 'lazy',
                        ]
                    ]);
                    ?>
                </button>
            </div>
        </div>


        <div class="testimonial-carousel">
            <div class="swiper">
                <div class="swiper-wrapper">
                    <?php foreach ($testimonials as $index => $testimonial) : ?>
                        <div class="swiper-slide testimonial__testimonial testimonial">
                            <div class="testimonial-image-wrapper">
                                <div class="testimonial-image-border">
                                    <?php
                                    echo get_responsive_image([
                                        'image_name'       => esc_attr($testimonial['asset']),
                                        'alt'              => esc_attr($testimonial['name']),
                                        'class'            => 'testimonial__image',
                                        'default_size'     => 300,
                                        'sizes_attr'       => '(max-width: 768px) 150px, 185px',
                                        'additional_attrs' => [
                                            'decoding'      => 'async',
                                            'loading' => 'lazy',
                                        ]
                                    ]);
                                    ?>
                                </div>
                            </div>
                            <div class="carousel-item__content">
                                <span class="testimonial-name"><?php echo esc_html($testimonial['name']); ?></span>
                                <div class="testimonial-rating">
                                    <?php for ($i = 0; $i < $testimonial['rating']; $i++) : ?>
                                        <?php
                                        echo get_responsive_image([
                                            'image_name'       => 'lcp-testimonials/star',
                                            'alt'              => 'Star',
                                            'additional_attrs' => [
                                                'decoding'      => 'async',
                                                'loading' => 'lazy',
                                            ]
                                        ]);
                                        ?>
                                    <?php endfor; ?>
                                </div>
                                <p class="testimonial__text"><?php echo esc_html($testimonial['text']); ?></p>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
                <div class="swiper-pagination"></div>
                <div class="swiper-navigation">
                    <button type="button" class="swiper-navigation__btn js-swiper-prev">
                        <?php
                        echo get_responsive_image([
                            'image_name'       => 'lcp-testimonials/navigation-arrow',
                            'alt'              => 'Next',
                            'additional_attrs' => [
                                'decoding'      => 'async',
                                'loading' => 'lazy',
                            ]
                        ]);
                        ?>

                    </button>
                    <button type="button" class="swiper-navigation__btn js-swiper-next">
                        <?php
                        echo get_responsive_image([
                            'image_name'       => 'lcp-testimonials/navigation-arrow',
                            'alt'              => 'Next',
                            'additional_attrs' => [
                                'decoding'      => 'async',
                                'loading' => 'lazy',
                            ]
                        ]);
                        ?>
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>