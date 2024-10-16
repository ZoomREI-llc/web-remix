<?php
    $dh_logo_url = plugins_url('src/lcp-comparison/assets/logo.svg', dirname(__FILE__, 2));
    $text_vector_url = plugins_url('src/lcp-comparison/assets/vs-vector.svg', dirname(__FILE__, 2));
    $checkmark_icon_url = plugins_url('src/lcp-comparison/assets/check-mark.svg', dirname(__FILE__, 2));
    $crossmark_icon_url = plugins_url('src/lcp-comparison/assets/x-mark.svg', dirname(__FILE__, 2));
    
    $selectedMarket = isset($attributes['selectedMarket']) ? esc_html($attributes['selectedMarket']) : 'Saint Louis';
?>

<section class="lcp-comparison" style="--text-vector: url('<?php echo esc_url($text_vector_url); ?>');">
    <div class="lcp-comparison__text">
        <h2>Why You Should Sell Your House in <?=$selectedMarket?> with Us <br><span class="comp-vs">vs.</span><br> Sell with Agents</h2>
        <p>Doctor Homes is transforming the process of selling homes fast. Our team of market experts assists homeowners in selling their houses quickly, even in poor condition, for the highest possible off-market price.<br>Learn why selling your house as is with Doctor Homes is the smartest choice in the market.</p>
    </div>
    <div class="lcp-comparison-table">
        <div class="lcp-comparison-row header">
            <div class="lcp-comparison-column"></div>
            <div class="lcp-comparison-column doctor-homes">
                <img id="lcp-comparison-logo" src="<?php echo esc_url($dh_logo_url); ?>" alt="Doctor Homes">
            </div>
            <div class="lcp-comparison-column">Selling with a Real Estate Agent</div>
        </div>
        <div class="lcp-comparison-row lcp-comparison-row--uneven">
            <div class="lcp-comparison-column lcp-comparison-column--first"><span>Commissions / Fees</span></div>
            <div class="lcp-comparison-column doctor-homes">
                <div class="column__content">
                    <img src="<?php echo esc_url($checkmark_icon_url); ?>" />
                    <span>None</span>
                </div>
            </div>
            <div class="lcp-comparison-column">
                <div class="column__content">
                    <img src="<?php echo esc_url($crossmark_icon_url); ?>" />
                    <span>The seller (you) pays 6% on average</span>
                </div>
            </div>
        </div>
        <div class="lcp-comparison-row lcp-comparison-row--even">
            <div class="lcp-comparison-column lcp-comparison-column--first"><span>Inspections / Financing</span></div>
            <div class="lcp-comparison-column doctor-homes">
                <div class="column__content">
                    <img src="<?php echo esc_url($checkmark_icon_url); ?>" />
                    <span>None</span>
                </div>
            </div>
            <div class="lcp-comparison-column">
                <div class="column__content">
                    <img src="<?php echo esc_url($crossmark_icon_url); ?>" />
                    <span>Yes. Around 15% of sales fall through</span>
                </div>
            </div>
        </div>
        <div class="lcp-comparison-row lcp-comparison-row--uneven">
            <div class="lcp-comparison-column lcp-comparison-column--first"><span>Repairs</span></div>
            <div class="lcp-comparison-column doctor-homes">
                <div class="column__content">
                    <img src="<?php echo esc_url($checkmark_icon_url); ?>" />
                    <span>No - We make a cash offer</span>
                </div>
            </div>
            <div class="lcp-comparison-column">
                <div class="column__content">
                    <img src="<?php echo esc_url($crossmark_icon_url); ?>" />
                    <span>Negotiated after inspection</span>
                </div>
            </div>
        </div>
        <div class="lcp-comparison-row lcp-comparison-row--even">
            <div class="lcp-comparison-column lcp-comparison-column--first"><span>Average Days Until Sold</span></div>
            <div class="lcp-comparison-column doctor-homes">
                <div class="column__content">
                    <img src="<?php echo esc_url($checkmark_icon_url); ?>" />
                    <span>Immediate cash offer</span>
                </div>
            </div>
            <div class="lcp-comparison-column">
                <div class="column__content">
                    <img src="<?php echo esc_url($crossmark_icon_url); ?>" />
                    <span>91 days on average</span>
                </div>
            </div>
        </div>
        <div class="lcp-comparison-row lcp-comparison-row--uneven">
            <div class="lcp-comparison-column lcp-comparison-column--first"><span>Closing Date</span></div>
            <div class="lcp-comparison-column doctor-homes">
                <div class="column__content">
                    <img src="<?php echo esc_url($checkmark_icon_url); ?>" />
                    <span>Whenever you choose</span>
                </div>
            </div>
            <div class="lcp-comparison-column">
                <div class="column__content">
                    <img src="<?php echo esc_url($crossmark_icon_url); ?>" />
                    <span>On average, 30-60 days after offer</span>
                </div>
            </div>
        </div>
        <div class="lcp-comparison-row lcp-comparison-row--even">
            <div class="lcp-comparison-column lcp-comparison-column--first"><span>Appraisal Required</span></div>
            <div class="lcp-comparison-column doctor-homes">
                <div class="column__content">
                    <img src="<?php echo esc_url($checkmark_icon_url); ?>" />
                    <span>None - We pay for them</span>
                </div>
            </div>
            <div class="lcp-comparison-column">
                <div class="column__content">
                    <img src="<?php echo esc_url($crossmark_icon_url); ?>" />
                    <span>Yes. Most sales are subject to an appraisal</span>
                </div>
            </div>
        </div>
    </div>
</section>