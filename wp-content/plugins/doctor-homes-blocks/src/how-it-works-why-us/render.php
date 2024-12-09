<?php
$title = $attributes['title'] ?? '';
$reasons = $attributes['reasons'] ?? [];
?>
<section class="hit-why-choose-us">
    <div class="grid-container">
        <div class="hit-why-choose-us__header title-2">
            <h2><?php echo esc_html($title); ?></h2>
        </div>
        <?php foreach ($reasons as $reason) : ?>
            <div class="hit-why-choose-us__item">
                <div class="hit-why-choose-us__item--image">
                    <?php echo get_responsive_image($reason['asset'], $reason['title'],); ?>
                </div>
                <div class="hit-why-choose-us__item--text">
                    <h3 class="sub-title"><?php echo esc_html($reason['title']); ?></h3>
                    <p class="title-4"><?php echo esc_html($reason['description']); ?></p>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</section>