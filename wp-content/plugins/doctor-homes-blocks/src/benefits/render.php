<?php
$title = $attributes['title'] ?? '';
$benefit_items = $attributes['position'] ?? [];
$paragraph = $attributes['paragraph'] ?? '';
$benefit_items = $attributes['benefitItems'] ?? [];

?>
<section class="benefits">
	<div class="benefits__text">
		<h2><?php echo esc_html($title); ?></h2>
		<p><?php echo esc_html($paragraph); ?></p>
	</div>
	<div class="benefits__grid">
		<?php foreach ($benefit_items as $item) : ?>
			<div class="benefits__item <?php echo esc_attr($item['position']); ?>">
				<div class="benefits__item--content">
					<?php echo get_responsive_image(esc_attr($item['asset']), esc_attr($item['text'])); ?>
					<p><?php echo esc_html($item['text']); ?></p>
				</div>
			</div>
		<?php endforeach; ?>
	</div>
</section>
<?php

?>