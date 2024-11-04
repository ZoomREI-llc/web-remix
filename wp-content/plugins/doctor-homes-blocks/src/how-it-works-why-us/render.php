<?php
$title = $attributes['title'] ?? '';
$reasons = $attributes['reasons'] ?? [];
?>
<section class="why-choose-us">
    <div class="why-choose-us__list">
        <div class="why-choose-us__header">
            <h2><?php echo esc_html($title); ?></h2>
        </div>
        <?php foreach ($reasons as $reason) : ?>
            <div class="why-choose-us__item">
                <div class="why-choose-us__item--content">
                    <div class="why-choose-us__item--image">
                        <?php echo get_responsive_image($reason['asset'], $reason['title']); ?>
                    </div>
                    <div class="why-choose-us__item--text">
                        <h3><?php echo esc_html($reason['title']); ?></h3>
                        <p><?php echo wp_kses($reason['description'], array('br' => array())); // Allow <hr> tags 
                            ?></p>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</section>