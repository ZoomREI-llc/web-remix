<?php
$btnText = isset($attributes['btnText']) ? esc_html($attributes['btnText']) : '';
$short_id = substr(wp_generate_uuid4(), 0, 8);
$form_config = [
    "handler" => "/wp-json/custom/v1/lead-form-v2",
    "redirect" => $attributes['redirectUrl'],
    "webhooks" => $attributes['webhooks'],
    "query" => $attributes['redirectQuery']
];
?>
<script type="application/json" id="form-config-<?= $short_id ?>"><?= json_encode($form_config) ?></script>
<form id="<?= $short_id ?>" name="lead_form_v2" class="lead-form-contact" method="POST" style="--loader-gif: url('<?php echo get_image_url('lead-form-contact/loader'); ?>');">
    <input type="hidden" name="entry_id" value="<?= $short_id ?>" autocomplete="off">
    <input type="hidden" name="street" value="" autocomplete="off">
    <input type="hidden" name="city" value="" autocomplete="off">
    <input type="hidden" name="state" value="" autocomplete="off">
    <input type="hidden" name="zipcode" value="" autocomplete="off">

    <div class="lead-form-contact__row">
        <div class="lead-form-contact__address address-wrapper input input--underline">
            <label for="propertyAddress">Full Address <span style="color: #FF0000">*</span></label>
            <input type="text" id="propertyAddress" name="propertyAddress" data-validation="address-autocomplete" autocomplete="off" placeholder="Full Address">
        </div>
        <div class="input input--underline">
            <label for="fullName">Seller Name <span style="color: #FF0000">*</span></label>
            <input type="text" id="fullName" name="fullName" placeholder="Full name" data-validation="name" required>
            <div class="input__message"></div>
        </div>
    </div>
    <div class="lead-form-contact__row">
        <div class="input input--underline">
            <label for="email">Email <span style="color: #FF0000">*</span></label>
            <input type="email" id="email" name="email" placeholder="example@mail.com" data-validation="email" required>
            <div class="input__message"></div>
        </div>
        <div class="input input--underline">
            <label for="phone">Phone number <span style="color: #FF0000">*</span></label>
            <input type="tel" id="phone" inputmode="numeric" name="phone" placeholder="(888) 888 - 888" data-validation="tel-mask" required>
            <div class="input__message"></div>
        </div>
    </div>
    <div class="lead-form-contact__row">
        <div class="input input--checkboxes">
            <label>Where did you hear about us?</label>
            <div class="input__row">
                <label class="input--radio">
                    <input type="radio" name="heard_about_us" value="Web">
                    <span>Web</span>
                </label>
                <label class="input--radio">
                    <input type="radio" name="heard_about_us" value="TV Commercial">
                    <span>TV Commercial</span>
                </label>
                <label class="input--radio">
                    <input type="radio" name="heard_about_us" value="Radio">
                    <span>Radio</span>
                </label>
                <label class="input--radio">
                    <input type="radio" name="heard_about_us" value="Letter or Postcard">
                    <span>Letter or Postcard</span>
                </label>
                <label class="input--radio">
                    <input type="radio" name="heard_about_us" value="Word of Mouth">
                    <span>Word of Mouth</span>
                </label>
            </div>
            <div class="input__message"></div>
        </div>
    </div>
    <div class="lead-form-contact__row">
        <div class="input input--underline">
            <label for="message">Message <span style="color: #FF0000">*</span></label>
            <textarea id="message" name="message" placeholder="Write your message..." required></textarea>
            <div class="input__message"></div>
        </div>
    </div>

    <div class="lead-form-contact__btn">
        <button type="submit" class="form-submit">
            <?= $btnText ?>
            <?php echo get_responsive_image('lead-form-contact/cta-arrow', 'Arrow Icon', 'form-btn-arrow'); ?>
        </button>
    </div>
</form>

<script>
  if(typeof validationErrors === 'undefined') {
    let validationErrors = {
      "required": "This field is required",
      "invalid": "This field is invalid",

      "address-autocomplete": {
        "addressAutocomplete": "Please re-enter and select your address from the dropdown"
      },
      "email": {
        "regex": "The E-mail must be a valid email address.",
        "required": "E-mail is required."
      },
      "name": {
        "required": "Please enter your full name."
      },
      "tel-mask": {
        "required": "Please enter your phone number.",
        "telMask": "Phone number is invalid."
      },
    }
  }
</script>