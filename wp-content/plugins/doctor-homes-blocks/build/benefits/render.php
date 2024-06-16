<?php
$benefit_items = array(
	array('id' => 52, 'text' => 'Fixer Upper'),
	array('id' => 54, 'text' => 'Job Relocation'),
	array('id' => 50, 'text' => 'Downsizing or Upsizing'),
	array('id' => 53, 'text' => 'Inherited Property'),
	array('id' => 57, 'text' => 'Vacant Property'),
	array('id' => 55, 'text' => 'Tenant Trouble'),
	array('id' => 58, 'text' => 'Water & Fire Damage'),
	array('id' => 51, 'text' => 'Financial Issues'),
	array('id' => 56, 'text' => 'Unexpected Life Events'),
	array('id' => 49, 'text' => 'Divorce'),
);

?>

<div class="doctor-homes-benefits">
	<h2>When to Reach Out to Doctor Homes</h2>
	<p>No matter what property-related life challenge you're facing, we can help you sell your house as-is for cash fast! We buy any house in any condition, and let you close on your timeline.</p>
	<div class="benefits-grid">
		<?php foreach ($benefit_items as $item) : ?>
			<div class="benefit-item">
				<img src="<?php echo esc_url(wp_get_attachment_url($item['id'])); ?>" alt="<?php echo esc_attr($item['text']); ?>">
				<p><?php echo esc_html($item['text']); ?></p>
			</div>
		<?php endforeach; ?>
	</div>
	<button>Get My Offer →</button>
</div>