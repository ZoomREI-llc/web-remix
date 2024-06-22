<?php

$testimonials = [
    [
        'name' => 'Nataly Lebedev',
        'image' => wp_get_attachment_url(76), // Replace with the correct image path
        'text' => '"In a day and age where professionals in the service industry never seem to answer their phones or return calls, Doctor Homes promptly responded to my initial call, and was always available during the entire selling process."',
        'rating' => 5
    ],
    [
        'name' => 'Leigh Williams',
        'image' => wp_get_attachment_url(77), // Replace with the correct image path
        'text' => '"Customer service experience with Doctor Homes was outstanding. From beginning to end, the process of selling my home was exemplary."',
        'rating' => 5
    ],
    [
        'name' => 'Darren Pilch',
        'image' => wp_get_attachment_url(78), // Replace with the correct image path
        'text' => '"I am quite happy with the easy, fast, stress- free process of dealing with Doctor Homes. 
I needed to rehab this property that sat vacant too long.
He made a reasonable offer and the sale went quickly with prompt payment."',
        'rating' => 5
    ],
];


?>
<div class="carousel-container">
    <div class="testimonial-carousel">
        <?php foreach ($testimonials as $index => $testimonial) : ?>
            <div class="testimonial">
                <img src="<?php echo esc_url($testimonial['image']); ?>" alt="<?php echo esc_attr($testimonial['name']); ?>">
                <p><?php echo esc_html($testimonial['text']); ?></p>
                <p class="testimonial-name"><?php echo esc_html($testimonial['name']); ?></p>
                <p class="testimonial-rating"><?php echo str_repeat('★', $testimonial['rating']); ?></p>
            </div>
        <?php endforeach; ?>
    </div>
    <div class="carousel-navigation">
        <?php foreach ($testimonials as $index => $testimonial) : ?>
            <span class="carousel-dot" data-index="<?php echo $index; ?>"></span>
        <?php endforeach; ?>
    </div>
    <button class="carousel-prev" disabled>←</button>
    <button class="carousel-next">→</button>
</div>