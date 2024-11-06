<?php
    $selectedMarket = isset($attributes['selectedMarket']) ? esc_html($attributes['selectedMarket']) : 'Saint Louis';
?>
<section class="lcp-benefits">
    <div class="lcp-benefits__text">
        <h2>Need to Sell Your House in <?= $selectedMarket ?>? <br> We’re Here for You, No Matter the Reason or Situation.</h2>
    </div>
    <div class="lcp-benefits__grid">
        <?php
            $items = [
                'fixer-upper' => 'Fixer Upper',
                'job-relocation' => 'Job Relocation',
                'downsizing-upsizing' => 'Downsizing or Upsizing',
                'inherited-property' => 'Inherited Property',
                'vacant-property' => 'Vacant Property',
                'tenant-trouble' => 'Tenant Trouble',
                'water-fire-damage' => 'Water & Fire Damage',
                'financial-issues' => 'Financial Issues',
                'unexpected-life-events' => 'Unexpected Life Events',
                'divorce' => 'Divorce'
            ];
            foreach ($items as $key => $title) : ?>
                <div class="lcp-benefits__item">
                    <div class="lcp-benefits__item--content">
                        <?php echo get_responsive_image("lcp-benefits/".$key, $title); ?>
                        <p><?= $title ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
    </div>
</section>