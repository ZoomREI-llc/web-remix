<?php
$selectedMarket = isset($attributes['selectedMarket']) ? esc_html($attributes['selectedMarket']) : 'Saint Louis';
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
?>
<section class="lcp-benefits">
    <div class="grid-container">
        <div class="lcp-benefits__text">
            <h2 class="title-2">Need to Sell Your House in <?= $selectedMarket ?>? <br> We’re Here for You, No Matter the Reason or Situation.</h2>
        </div>
    </div>
    <div class="grid-container">
        <?php foreach ($items as $key => $title) : ?>
            <div class="lcp-benefits__item">
                <div class="lcp-benefits__item--content">
                    <?php
                    echo get_responsive_image([
                        'image_name'       => "lcp-benefits/" . $key,
                        'alt'              => $title,
                        'additional_attrs' => [
                            'decoding'      => 'async',
                            'loading' => 'lazy',
                        ]
                    ]);
                    ?>
                    <p><?= $title ?></p>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</section>