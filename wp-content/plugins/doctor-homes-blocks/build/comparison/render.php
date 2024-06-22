<?php
$dh_logo_id = 23;
$dh_logo_url = wp_get_attachment_url($dh_logo_id);

$checkmark_icon_id = 81;
$checkmark_icon_url = wp_get_attachment_url($checkmark_icon_id);

$crossmark_icon_id = 86;
$crossmark_icon_url = wp_get_attachment_url($crossmark_icon_id);
?>

<section class="comparison">
    <h2>Why Us vs. Traditional Agent</h2>
    <p>Doctor Homes is transforming the process of selling homes fast. Our team of market experts assists homeowners daily in selling their houses quickly, even in poor condition, for the highest possible off-market price. Learn why selling your house as is with Doctor Homes is the smartest choice in the market.</p>
    <div class="comparison-table">
        <div class="comparison-row header">
            <div class="comparison-column"></div>
            <div class="comparison-column doctor-homes">
                <img src="<?php echo esc_url($dh_logo_url); ?>" alt="Doctor Homes">
            </div>
            <div class="comparison-column">Selling with a Real Estate Agent</div>
        </div>
        <div class="comparison-row">
            <div class="comparison-column">Commissions / Fees</div>
            <div class="comparison-column doctor-homes"><img src="<?php echo esc_url($checkmark_icon_url); ?>" /> None</div>
            <div class="comparison-column"><img src="<?php echo esc_url($crossmark_icon_url); ?>" /> The seller (you) pays 6% on average</div>
        </div>
        <div class="comparison-row">
            <div class="comparison-column">Closing Costs</div>
            <div class="comparison-column doctor-homes"><img src="<?php echo esc_url($checkmark_icon_url); ?>" /> NONE - We pay them all</div>
            <div class="comparison-column"><img src="<?php echo esc_url($crossmark_icon_url); ?>" /> The seller (you) pays 2% on average</div>
        </div>
        <div class="comparison-row">
            <div class="comparison-column">Inspections / Financing</div>
            <div class="comparison-column doctor-homes"><img src="<?php echo esc_url($checkmark_icon_url); ?>" /> None</div>
            <div class="comparison-column"><img src="<?php echo esc_url($crossmark_icon_url); ?>" /> Yes. Around 15% of sales fall through</div>
        </div>
        <div class="comparison-row">
            <div class="comparison-column">Repairs</div>
            <div class="comparison-column doctor-homes"><img src="<?php echo esc_url($checkmark_icon_url); ?>" /> NO - We make a cash offer</div>
            <div class="comparison-column"><img src="<?php echo esc_url($crossmark_icon_url); ?>" /> Negotiated after inspection</div>
        </div>
        <div class="comparison-row">
            <div class="comparison-column">Average Days Until Sold</div>
            <div class="comparison-column doctor-homes"><img src="<?php echo esc_url($checkmark_icon_url); ?>" /> Immediate cash offer</div>
            <div class="comparison-column"><img src="<?php echo esc_url($crossmark_icon_url); ?>" /> 91 days on average</div>
        </div>
        <div class="comparison-row">
            <div class="comparison-column">Number Of Showings</div>
            <div class="comparison-column doctor-homes"><img src="<?php echo esc_url($checkmark_icon_url); ?>" /> 1 - Just us</div>
            <div class="comparison-column"><img src="<?php echo esc_url($crossmark_icon_url); ?>" /> No upper limit</div>
        </div>
        <div class="comparison-row">
            <div class="comparison-column">Closing Date</div>
            <div class="comparison-column doctor-homes"><img src="<?php echo esc_url($checkmark_icon_url); ?>" /> Whenever you choose</div>
            <div class="comparison-column"><img src="<?php echo esc_url($crossmark_icon_url); ?>" /> On average, 30-60 days after offer</div>
        </div>
        <div class="comparison-row">
            <div class="comparison-column">Appraisal Required</div>
            <div class="comparison-column doctor-homes"><img src="<?php echo esc_url($checkmark_icon_url); ?>" /> NONE - We pay for them</div>
            <div class="comparison-column"><img src="<?php echo esc_url($crossmark_icon_url); ?>" /> Yes. Most sales are subject to an appraisal</div>
        </div>
    </div>
</section>