<?php
$arrow_icon_id = 412;
$arrow_icon_url = wp_get_attachment_url($arrow_icon_id);
?>

<form id="dh-lead-form" method="POST">
    <div class="address-wrapper">
        <input type="text" name="property_address" placeholder="Type Your Property Address" required>
        <button id="form-btn-next" type="button">
            Get My Offer
            <img class="form-btn-arrow" src="<?php echo esc_url($arrow_icon_url); ?>" alt="Arrow Icon">
        </button>
    </div>
    <div class="hidden-fields">
        <input type="text" name="full_name" placeholder="Full Name" required>
        <input type="email" name="email" placeholder="Email" required>
        <input type="tel" name="phone" placeholder="Phone Number" maxlength="16" required>
        <input type="hidden" name="utm_source" value="<?php echo esc_attr($_GET['utm_source']); ?>">
        <input type="hidden" name="utm_campaign" value="<?php echo esc_attr($_GET['utm_campaign']); ?>">
        <input type="hidden" name="utm_medium" value="<?php echo esc_attr($_GET['utm_medium']); ?>">
        <input type="hidden" name="utm_term" value="<?php echo esc_attr($_GET['utm_term']); ?>">
        <input type="hidden" name="utm_content" value="<?php echo esc_attr($_GET['utm_content']); ?>">
        <button type="submit" class="form-submit">
            Get My Offer
            <img class="form-btn-arrow" src="<?php echo esc_url($arrow_icon_url); ?>" alt="Arrow Icon">
        </button>
    </div>
</form>