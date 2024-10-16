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

<section class="lcp-testimonials-wrapper">
    <div class="lcp-testimonials__text">
        <h2>See What Our Customers Are Saying</h2>
        <p></p>
    </div>
    <div class="lcp-testimonials__container">
        <div class="lcp-testimonials-carousel">
            <?php foreach ($testimonials as $index => $testimonial) : ?>
                <div class="lcp-testimonials__item">
                    <div class="sf-testimonial-image-wrapper">
                        <div class="sf-testimonial-image-border">
                            <img src="<?php echo esc_url($testimonial['image']); ?>" alt="<?php echo esc_attr($testimonial['name']); ?>" class="lcp-testimonials__item__image">
                        </div>
                    </div>
                    <span class="lcp-testimonials__item-name"><?php echo esc_html($testimonial['name']); ?></span>
                    <div class="lcp-testimonials__item-rating">
                        <?php for ($i = 0; $i < $testimonial['rating']; $i++) : ?>
                            <img src="<?php echo esc_url($star_icon_url); ?>" alt="star" class="lcp-testimonials__item__star">
                        <?php endfor; ?>
                    </div>
                    <p class="lcp-testimonials__item__text"><?php echo esc_html($testimonial['text']); ?></p>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
    <div class="lcp-testimonials__navigation">
        <div class="lcp-testimonials__navigation--dots">
            <?php foreach ($testimonials as $index => $testimonial) : ?>
                <span class="lcp-testimonials__dot" data-index="<?php echo $index; ?>"></span>
            <?php endforeach; ?>
        </div>
        <div class="lcp-testimonials__navigation--arrows">
            <button class="lcp-testimonials__prev" disabled><img src="<?php echo esc_url($arrow_icon_url); ?>" alt="previous"></button>
            <button class="lcp-testimonials__next"><img src="<?php echo esc_url($arrow_icon_url); ?>" alt="next"></button>
        </div>
    </div>
</section>