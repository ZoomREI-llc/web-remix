<?php
$title = $attributes['title'] ?? '';
$reasons = $attributes['reasons'] ?? [];
?>
<section class="why-choose-us">
    <div class="why-choose-us__header">
        <h2><?php echo esc_html($title); ?></h2>
    </div>
    <div class="why-choose-us__list">
        <?php foreach ($reasons as $reason) : ?>
            <div class="why-choose-us__item">
                <div class="why-choose-us__item--content">
                    <div class="why-choose-us__item--image">
                        <img src="<?php echo esc_url(wp_get_attachment_url($reason['id'])); ?>" alt="<?php echo esc_attr($reason['title']); ?>">
                    </div>
                    <div class="why-choose-us__item--text">
                        <h3><?php echo esc_html($reason['title']); ?></h3>
                        <p><?php echo wp_kses($reason['description'], array('br' => array())); // Allow <hr> tags ?></p>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</section>