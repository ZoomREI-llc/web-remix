<?php
$dh_logo_id = 423;
$dh_logo_url = wp_get_attachment_url($dh_logo_id);

$checkmark_icon_id = 410;
$checkmark_icon_url = wp_get_attachment_url($checkmark_icon_id);

$crossmark_icon_id = 409;
$crossmark_icon_url = wp_get_attachment_url($crossmark_icon_id);
?>

<section class="comparison">
    <div class="comparison__text">
        <h2>Why Us vs. Traditional Agent</h2>
        <p>Doctor Homes is transforming the process of selling homes fast. Our team of market experts assists homeowners daily in selling their houses quickly, even in poor condition, for the highest possible off-market price. Learn why selling your house as is with Doctor Homes is the smartest choice in the market.</p>
    </div>
    <div class="comparison-table">
        <div class="comparison-row header">
            <div class="comparison-column"></div>
            <div class="comparison-column doctor-homes">
                <img id="comparison-logo" src="<?php echo esc_url($dh_logo_url); ?>" alt="Doctor Homes">
            </div>
            <div class="comparison-column">Selling with a Real Estate Agent</div>
        </div>
        <div class="comparison-row comparison-row--uneven">
            <div class="comparison-column comparison-column--first"><span>Commissions / Fees</span></div>
            <div class="comparison-column doctor-homes">
                <div class="column__content">
                    <img src="<?php echo esc_url($checkmark_icon_url); ?>" />
                    <span>None</span>
                </div>
            </div>
            <div class="comparison-column">
                <div class="column__content">
                    <img src="<?php echo esc_url($crossmark_icon_url); ?>" />
                    <span>The seller (you) pays 6% on average</span>
                </div>
            </div>
        </div>
        <div class="comparison-row comparison-row--even">
            <div class="comparison-column comparison-column--first"><span>Inspections / Financing</span></div>
            <div class="comparison-column doctor-homes">
                <div class="column__content">
                    <img src="<?php echo esc_url($checkmark_icon_url); ?>" />
                    <span>None</span>
                </div>
            </div>
            <div class="comparison-column">
                <div class="column__content">
                    <img src="<?php echo esc_url($crossmark_icon_url); ?>" />
                    <span>Yes. Around 15% of sales fall through</span>
                </div>
            </div>
        </div>
        <div class="comparison-row comparison-row--uneven">
            <div class="comparison-column comparison-column--first"><span>Repairs</span></div>
            <div class="comparison-column doctor-homes">
                <div class="column__content">
                    <img src="<?php echo esc_url($checkmark_icon_url); ?>" />
                    <span>No - We make a cash offer</span>
                </div>
            </div>
            <div class="comparison-column">
                <div class="column__content">
                    <img src="<?php echo esc_url($crossmark_icon_url); ?>" />
                    <span>Negotiated after inspection</span>
                </div>
            </div>
        </div>
        <div class="comparison-row comparison-row--even">
            <div class="comparison-column comparison-column--first"><span>Average Days Until Sold</span></div>
            <div class="comparison-column doctor-homes">
                <div class="column__content">
                    <img src="<?php echo esc_url($checkmark_icon_url); ?>" />
                    <span>Immediate cash offer</span>
                </div>
            </div>
            <div class="comparison-column">
                <div class="column__content">
                    <img src="<?php echo esc_url($crossmark_icon_url); ?>" />
                    <span>91 days on average</span>
                </div>
            </div>
        </div>
        <div class="comparison-row comparison-row--uneven">
            <div class="comparison-column comparison-column--first"><span>Closing Date</span></div>
            <div class="comparison-column doctor-homes">
                <div class="column__content">
                    <img src="<?php echo esc_url($checkmark_icon_url); ?>" />
                    <span>Whenever you choose</span>
                </div>
            </div>
            <div class="comparison-column">
                <div class="column__content">
                    <img src="<?php echo esc_url($crossmark_icon_url); ?>" />
                    <span>On average, 30-60 days after offer</span>
                </div>
            </div>
        </div>
        <div class="comparison-row comparison-row--even">
            <div class="comparison-column comparison-column--first"><span>Appraisal Required</span></div>
            <div class="comparison-column doctor-homes">
                <div class="column__content">
                    <img src="<?php echo esc_url($checkmark_icon_url); ?>" />
                    <span>None - We pay for them</span>
                </div>
            </div>
            <div class="comparison-column">
                <div class="column__content">
                    <img src="<?php echo esc_url($crossmark_icon_url); ?>" />
                    <span>Yes. Most sales are subject to an appraisal</span>
                </div>
            </div>
        </div>
    </div>
</section>