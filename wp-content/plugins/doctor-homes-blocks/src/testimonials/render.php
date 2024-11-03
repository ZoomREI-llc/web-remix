<?php

$star_icon_id = 408;
$star_icon_url = wp_get_attachment_url($star_icon_id);

$arrow_icon_id = 457;
$arrow_icon_url = wp_get_attachment_url($arrow_icon_id);

$testimonials = [
    [
        'name' => 'Nataly Lebedev',
        'image' => wp_get_attachment_url(456),
        'text' => '"In a day and age where professionals in the service industry never seem to answer their phones or return calls, Doctor Homes promptly responded to my initial call, and was always available during the entire selling process."',
        'rating' => 5
    ],
    [
        'name' => 'Shaked Elnatan',
        'image' => wp_get_attachment_url(458),
        'text' => '"Great experience selling my house as is to Doctor Homes. They were incredibly professional and bought our home quickly for a price we were satisfied with."',
        'rating' => 5
    ],
    [
        'name' => 'Darren Pilch',
        'image' => wp_get_attachment_url(453),
        'text' => '"I am quite happy with the easy, fast, stress- free process of dealing with Doctor Homes.  I needed to rehab this property that sat vacant too long. He made a reasonable offer and the sale went quickly with prompt payment."',
        'rating' => 5
    ],
    [
        'name' => 'Liv Skyler ',
        'image' => wp_get_attachment_url(455),
        'text' => '“We are very grateful for Doctor Homes. They were always professional and reliable, they answered my first call right away and kept me updated throughout the whole selling process.” ',
        'rating' => 5
    ],
    [
        'name' => 'Leigh Williams',
        'image' => wp_get_attachment_url(454),
        'text' => '"The customer service experience with Doctor Homes was outstanding. From beginning to end, the process of selling my home was exemplary."',
        'rating' => 5
    ]
];
?>

<section class="testimonial-carousel-wrapper">
    <div class="testimonial-carousel-text">
        <h2>What People Are Saying</h2>
        <p>Fast sales, helpful & professional, zero hassle.
            96% of sellers love our service – here’s what our clients have to say.</p>
        
        <div class="carousel-navigation">
            <button class="carousel-prev" disabled><img src="<?php echo esc_url($arrow_icon_url); ?>" alt="previous"></button>
            <button class="carousel-next"><img src="<?php echo esc_url($arrow_icon_url); ?>" alt="next"></button>
        </div>
    </div>
    <div class="testimonial-carousel">
        <div class="carousel-container">
            <?php foreach ($testimonials as $index => $testimonial) : ?>
                <div class="testimonial">
                    <div class="testimonial-image-wrapper">
                        <div class="testimonial-image-border">
                            <img src="<?php echo esc_url($testimonial['image']); ?>" alt="<?php echo esc_attr($testimonial['name']); ?>" class="testimonial__image">
                        </div>
                    </div>
                    <div class="carousel-item__content">
                        <span class="testimonial-name"><?php echo esc_html($testimonial['name']); ?></span>
                        <div class="testimonial-rating">
                            <?php for ($i = 0; $i < $testimonial['rating']; $i++) : ?>
                                <img src="<?php echo esc_url($star_icon_url); ?>" alt="star" class="testimonial__star">
                            <?php endfor; ?>
                        </div>
                        <p class="testimonial__text"><?php echo esc_html($testimonial['text']); ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        <div class="carousel-dots">
            <?php foreach ($testimonials as $index => $testimonial) : ?>
                <span class="dot" data-index="<?php echo $index; ?>"></span>
            <?php endforeach; ?>
        </div>
        <div class="carousel-navigation">
            <button class="carousel-prev" disabled><img src="<?php echo esc_url($arrow_icon_url); ?>" alt="previous"></button>
            <button class="carousel-next"><img src="<?php echo esc_url($arrow_icon_url); ?>" alt="next"></button>
        </div>
    </div>
</section>