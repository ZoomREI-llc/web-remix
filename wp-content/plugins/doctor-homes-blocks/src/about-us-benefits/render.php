<?php
$title = $attributes['title'] ?? '';
$paragraph = $attributes['paragraph'] ?? '';
$benefit_items = $attributes['benefitItems'] ?? [];

?>
<section class="benefits">
    <div class="grid-container">
        <div class="benefits__text">
            <h2 class="title-2"><?php echo esc_html($title); ?></h2>
            <?php if ($paragraph): ?>
                <p class="title-4"><?php echo esc_html($paragraph); ?></p>
            <?php endif; ?>
        </div>
    </div>
    <div class="grid-container">
        <?php foreach ($benefit_items as $item) : ?>
            <div class="benefits__item <?php echo esc_attr($item['position']); ?>">
                <div class="benefits__item--content">
                    <?php echo get_responsive_image([
                        'image_name'       => esc_attr($item['asset']),
                        'alt'              => esc_attr($item['text']),
                        'additional_attrs' => [
                            'decoding'      => 'async',
                            'loading'       => 'lazy',
                        ]
                    ]); ?>
                    <p><?php echo esc_html($item['text']); ?></p>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</section>