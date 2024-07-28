<?php
$title = $attributes['title'] ?? '';
$benefit_items = $attributes['benefitItems'] ?? [];

?>
<section class="sf-benefits">
    <div class="sf-benefits__text">
        <h2><?php echo esc_html($title); ?></h2>
    </div>
    <div class="sf-benefits__grid">
        <?php foreach ($benefit_items as $item) : ?>
            <div class="sf-benefits__item">
                <div class="sf-benefits__item--content">
                    <div class="sf-benefits__item--image">
                        <img src="<?php echo esc_url(wp_get_attachment_url($item['id'])); ?>" alt="<?php echo esc_attr($item['text']); ?>">
                    </div>
                    <div class="sf-benefits__item--text">
                        <h3><?php echo esc_html($item['text']); ?></h3>
                        <p><?php echo esc_html($item['paragraph']); ?></p>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</section>