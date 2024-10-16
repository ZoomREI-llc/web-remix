<?php
    $selectedMarket = isset($attributes['selectedMarket']) ? esc_html($attributes['selectedMarket']) : 'Saint Louis';
?>
<section class="lcp-benefits">
	<div class="lcp-benefits__text">
		<h2>Need to Sell Your House in <?= $selectedMarket ?>? <br> We’re Here for You, No Matter the Reason or Situation.</h2>
	</div>
    <div class="lcp-benefits__grid">
        <div class="lcp-benefits__item">
            <div class="lcp-benefits__item--content">
                <img decoding="async" src="<?= plugins_url('src/lcp-benefits/assets/fixer-upper.svg', dirname(__FILE__, 2)) ?>" alt="Fixer Upper">
                <p>Fixer Upper</p>
            </div>
        </div>
        <div class="lcp-benefits__item">
            <div class="lcp-benefits__item--content">
                <img decoding="async" src="<?= plugins_url('src/lcp-benefits/assets/job-relocation.svg', dirname(__FILE__, 2)) ?>" alt="Job Relocation">
                <p>Job Relocation</p>
            </div>
        </div>
        <div class="lcp-benefits__item">
            <div class="lcp-benefits__item--content">
                <img decoding="async" src="<?= plugins_url('src/lcp-benefits/assets/downsizing-upsizing.svg', dirname(__FILE__, 2)) ?>" alt="Downsizing or Upsizing">
                <p>Downsizing or Upsizing</p>
            </div>
        </div>
        <div class="lcp-benefits__item">
            <div class="lcp-benefits__item--content">
                <img decoding="async" src="<?= plugins_url('src/lcp-benefits/assets/inherited-property.svg', dirname(__FILE__, 2)) ?>" alt="Inherited Property">
                <p>Inherited Property</p>
            </div>
        </div>
        <div class="lcp-benefits__item">
            <div class="lcp-benefits__item--content">
                <img decoding="async" src="<?= plugins_url('src/lcp-benefits/assets/vacant-property.svg', dirname(__FILE__, 2)) ?>" alt="Vacant Property">
                <p>Vacant Property</p>
            </div>
        </div>
        <div class="lcp-benefits__item">
            <div class="lcp-benefits__item--content">
                <img decoding="async" src="<?= plugins_url('src/lcp-benefits/assets/tenant-trouble.svg', dirname(__FILE__, 2)) ?>" alt="Tenant Trouble">
                <p>Tenant Trouble</p>
            </div>
        </div>
        <div class="lcp-benefits__item">
            <div class="lcp-benefits__item--content">
                <img decoding="async" src="<?= plugins_url('src/lcp-benefits/assets/water-fire-damage.svg', dirname(__FILE__, 2)) ?>" alt="Water &amp; Fire Damage">
                <p>Water &amp; Fire Damage</p>
            </div>
        </div>
        <div class="lcp-benefits__item">
            <div class="lcp-benefits__item--content">
                <img decoding="async" src="<?= plugins_url('src/lcp-benefits/assets/financial-issues.svg', dirname(__FILE__, 2)) ?>" alt="Financial Issues">
                <p>Financial Issues</p>
            </div>
        </div>
        <div class="lcp-benefits__item">
            <div class="lcp-benefits__item--content">
                <img decoding="async" src="<?= plugins_url('src/lcp-benefits/assets/unexpected-life-events.svg', dirname(__FILE__, 2)) ?>" alt="Unexpected Life Events">
                <p>Unexpected Life Events</p>
            </div>
        </div>
        <div class="lcp-benefits__item">
            <div class="lcp-benefits__item--content">
                <img decoding="async" src="<?= plugins_url('src/lcp-benefits/assets/divorce.svg', dirname(__FILE__, 2)) ?>" alt="Divorce">
                <p>Divorce</p>
            </div>
        </div>
    </div>
</section>