<?php
$arrow_icon_id = 412;
$arrow_icon_url = wp_get_attachment_url($arrow_icon_id);
?>

<form id="dh-lead-form" name="lead_form_v2" class="lead-form" action="/wp-json/custom/v1/submit-form" method="POST" data-redirect="/step-2">
    <input type="hidden" name="street" value="" autocomplete="off">
    <input type="hidden" name="city" value="" autocomplete="off">
    <input type="hidden" name="state" value="" autocomplete="off">
    <input type="hidden" name="zipcode" value="" autocomplete="off">
    
    <div class="lead-form__title">
        <span>Get Your Offer In Record Time</span>
    </div>
    <div class="lead-form__subtitle">
        <span>Fill out the form. We’ll contact you ASAP.</span>
    </div>
    <div class="lead-form__address address-wrapper input input--squared">
        <label for="propertyAddress">Full Address</label>
        <input type="text" id="propertyAddress" name="propertyAddress" data-validation="address-autocomplete" autocomplete="off" placeholder="Property Address..">
    </div>
    <div class="input input--squared">
        <label for="fullName">Seller Name</label>
        <input type="text" id="fullName" name="fullName" placeholder="John Smith" data-validation="name" required>
        <div class="input__message"></div>
    </div>
    <div class="input input--squared">
        <label for="phone">Phone number</label>
        <input type="tel" id="phone" inputmode="numeric" name="phone" placeholder="313 23156342" data-validation="tel-mask" required>
        <div class="input__message"></div>
    </div>
    <div class="input input--squared">
        <label for="email">Email</label>
        <input type="email" id="email" name="email" placeholder="example@mail.com" data-validation="email">
        <div class="input__message"></div>
    </div>
    
    <div class="lead-form__fields-btn">
        <button type="submit" class="form-submit">
            Get My Offer
            <img class="form-btn-arrow" src="<?php echo esc_url($arrow_icon_url); ?>" alt="Arrow Icon">
        </button>
    </div>
    <div class="lead-form__disclaimer">
        <p>Your Information is safe & secure</p>
    </div>
</form>

<script>
  let validationErrors = {
    "required": "This field is required",
    "invalid": "This field is invalid",
    
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
</script>