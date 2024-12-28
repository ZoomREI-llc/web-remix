<?php
$title = $attributes['title'] ?? '';
$reasons = $attributes['reasons'] ?? [];
?>

<section class="why-choose-us">
    <div class="grid-container">
        <div class="why-choose-us__header title-2">
            <h2><?php echo esc_html($title); ?></h2>
        </div>
        <?php foreach ($reasons as $reason) : ?>
            <div class="why-choose-us__item">
                <div class="why-choose-us__item--image">
                    <?php
                    echo get_responsive_image([
                        'image_name'       => esc_attr($reason['asset']),
                        'alt'              => esc_attr($reason['title']),
                        'additional_attrs' => [
                            'decoding'      => 'async',
                            'loading' => 'lazy',
                        ]
                    ]);
                    ?>
                </div>
                <div class="why-choose-us__item--text">
                    <h3 class="sub-title"><?php echo esc_html($reason['title']); ?></h3>
                    <p class="title-4"><?php echo esc_html($reason['description']); ?></p>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</section>