<?php
$title = $attributes['title'] ?? '';
$benefit_items = $attributes['benefitItems'] ?? [];

?>
<section class="sf-benefits">
    <div class="grid-container">
        <h2 class="title-2"><?php echo esc_html($title); ?></h2>
        <?php foreach ($benefit_items as $item) : ?>
            <div class="sf-benefits__item">
                <div class="sf-benefits__item--content">
                    <div class="sf-benefits__item--image">
                        <?php echo get_responsive_image($item['asset'], $item['text']); ?>
                    </div>
                    <div class="sf-benefits__item--text">
                        <h3 class="title-3"><?php echo esc_html($item['text']); ?></h3>
                        <p><?php echo esc_html($item['paragraph']); ?></p>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</section>