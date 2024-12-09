<?php
    $selectedMarket = isset($attributes['selectedMarket']) ? esc_html($attributes['selectedMarket']) : 'Saint Louis';
?>
<section class="lcp-comparison">
    <div class="grid-container">
        <div class="lcp-comparison__text">
            <h2 class="title-2">Why You Should Sell Your House in <?=$selectedMarket?> with Us <br> <mark>vs.</mark> <br> Sell with Agents</h2>
            <p class="title-4">Doctor Homes is transforming the process of selling homes fast. Our team of market experts assists homeowners in selling their houses quickly, even in poor condition, for the highest possible off-market price.<br>Learn why selling your house as is with Doctor Homes is the smartest choice in the market.</p>
        </div>
        <div class="lcp-comparison-table">
            <div class="lcp-comparison-row row-header">
                <div class="lcp-comparison-column"></div>
                <div class="lcp-comparison-column doctor-homes">
                    <?php echo get_responsive_image('lcp-comparison/dh-logo', 'Doctor Homes'); ?>
                </div>
                <div class="lcp-comparison-column">
                    <span>Selling with a Real Estate Agent</span>
                </div>
            </div>
            <div class="lcp-comparison-row lcp-comparison-row--uneven">
                <div class="lcp-comparison-column lcp-comparison-column--first"><span>Commissions / Fees</span></div>
                <div class="lcp-comparison-column doctor-homes">
                    <div class="column__content">
                        <?php echo get_responsive_image('lcp-comparison/checkmark', 'Checkmark'); ?>
                        <span>None</span>
                    </div>
                </div>
                <div class="lcp-comparison-column">
                    <div class="column__content">
                        <?php echo get_responsive_image('lcp-comparison/crossmark', 'Crossmark'); ?>
                        <span>The seller (you) pays 6% on average</span>
                    </div>
                </div>
            </div>
            <div class="lcp-comparison-row lcp-comparison-row--even">
                <div class="lcp-comparison-column lcp-comparison-column--first"><span>Inspections / Financing</span></div>
                <div class="lcp-comparison-column doctor-homes">
                    <div class="column__content">
                        <?php echo get_responsive_image('lcp-comparison/checkmark', 'Checkmark'); ?>
                        <span>None</span>
                    </div>
                </div>
                <div class="lcp-comparison-column">
                    <div class="column__content">
                        <?php echo get_responsive_image('lcp-comparison/crossmark', 'Crossmark'); ?>
                        <span>Yes. Around 15% of sales fall through</span>
                    </div>
                </div>
            </div>
            <div class="lcp-comparison-row lcp-comparison-row--uneven">
                <div class="lcp-comparison-column lcp-comparison-column--first"><span>Repairs</span></div>
                <div class="lcp-comparison-column doctor-homes">
                    <div class="column__content">
                        <?php echo get_responsive_image('lcp-comparison/checkmark', 'Checkmark'); ?>
                        <span>No - We make a cash offer</span>
                    </div>
                </div>
                <div class="lcp-comparison-column">
                    <div class="column__content">
                        <?php echo get_responsive_image('lcp-comparison/crossmark', 'Crossmark'); ?>
                        <span>Negotiated after inspection</span>
                    </div>
                </div>
            </div>
            <div class="lcp-comparison-row lcp-comparison-row--even">
                <div class="lcp-comparison-column lcp-comparison-column--first"><span>Average Days Until Sold</span></div>
                <div class="lcp-comparison-column doctor-homes">
                    <div class="column__content">
                        <?php echo get_responsive_image('lcp-comparison/checkmark', 'Checkmark'); ?>
                        <span>Immediate cash offer</span>
                    </div>
                </div>
                <div class="lcp-comparison-column">
                    <div class="column__content">
                        <?php echo get_responsive_image('lcp-comparison/crossmark', 'Crossmark'); ?>
                        <span>91 days on average</span>
                    </div>
                </div>
            </div>
            <div class="lcp-comparison-row lcp-comparison-row--uneven">
                <div class="lcp-comparison-column lcp-comparison-column--first"><span>Closing Date</span></div>
                <div class="lcp-comparison-column doctor-homes">
                    <div class="column__content">
                        <?php echo get_responsive_image('lcp-comparison/checkmark', 'Checkmark'); ?>
                        <span>Whenever you choose</span>
                    </div>
                </div>
                <div class="lcp-comparison-column">
                    <div class="column__content">
                        <?php echo get_responsive_image('lcp-comparison/crossmark', 'Crossmark'); ?>
                        <span>On average, 30-60 days after offer</span>
                    </div>
                </div>
            </div>
            <div class="lcp-comparison-row lcp-comparison-row--even">
                <div class="lcp-comparison-column lcp-comparison-column--first"><span>Appraisal Required</span></div>
                <div class="lcp-comparison-column doctor-homes">
                    <div class="column__content">
                        <?php echo get_responsive_image('lcp-comparison/checkmark', 'Checkmark'); ?>
                        <span>None - We pay for them</span>
                    </div>
                </div>
                <div class="lcp-comparison-column">
                    <div class="column__content">
                        <?php echo get_responsive_image('lcp-comparison/crossmark', 'Crossmark'); ?>
                        <span>Yes. Most sales are subject to an appraisal</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>