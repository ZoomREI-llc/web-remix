<?php
$title = $attributes['title'] ?? '';
$benefit_items = $attributes['position'] ?? [];
$paragraph = $attributes['paragraph'] ?? '';
$benefit_items = $attributes['benefitItems'] ?? [];

?>
<section class="benefits">
	<h2><?php echo esc_html($title); ?></h2>
	<p><?php echo esc_html($paragraph); ?></p>
	<div class="benefits__grid">
		<?php foreach ($benefit_items as $item) : ?>
			<div class="benefits__item <?php echo esc_attr($item['position']); ?>">
				<div class="benefits__item--content">
					<?php if ($item['id']) : ?>
						<img src="<?php echo esc_url(wp_get_attachment_url($item['id'])); ?>" alt="<?php echo esc_attr($item['text']); ?>">
					<?php endif; ?>
					<p><?php echo esc_html($item['text']); ?></p>
				</div>
			</div>
		<?php endforeach; ?>
	</div>
</section>
<?php

?>