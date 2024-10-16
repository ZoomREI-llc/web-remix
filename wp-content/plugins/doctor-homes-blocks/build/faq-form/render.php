<?php

$phone_img = plugins_url('src/faq-form/assets/phone.svg', dirname(__FILE__, 2));

$tick_icon_url = plugins_url('src/faq-form/assets/tick.svg', dirname(__FILE__, 2));

$phoneNumber = isset($attributes['phoneNumber']) ? esc_html($attributes['phoneNumber']) : '';
?>

<section class="faq-form" style="--tick-url: url('<?php echo esc_url($tick_icon_url); ?>');">
	<div class="faq-form-title"><h2>Didn't find the answer you were looking for?</h2></div>
	<div class="faq-form-description"><h3>Give us a call--we're happy to help!</h3></div>
	<a href="tel:<?php echo $phoneNumber; ?>" class="faq-form-number">
		<div class="faq-form-number__img">
			<img src="<?php echo $phone_img; ?>" alt="">
		</div>
		<div class="faq-form-number__text"><span><?php echo $phoneNumber; ?></span></div>
	</a>

	<div class="faq-form-main">
        <div class="faq-form-wrap">
            <div class="faq-form-main__title">
                <h3>Prefer to write? Send us a message here.</h3>
            </div>
    
            <form id="contact-form" method="POST">
                <fieldset class="contact-form__input">
                    <label class="required-label" for="address">Your Address</label>
                    <input type="text" name="address" required>
                </fieldset>
                <fieldset class="contact-form__input">
                    <label class="required-label" for="full_name">Full Name</label>
                    <input type="text" name="full_name" required>
                </fieldset>
                <fieldset class="contact-form__input">
                    <label class="required-label" for="email">Email</label>
                    <input type="email" name="email" required>
                </fieldset>
                <fieldset class="contact-form__input">
                    <label class="required-label" for="phone">Phone Number</label>
                    <input type="tel" name="phone" maxlength="16" required>
                </fieldset>
                <fieldset class="contact-form__radio">
                    <legend>Where did you hear about us?</legend>
                    <div class="contact-form__radio-choices">
                        <div class="contact-form__radio-choice">
                            <input type="radio" id="contactSource1" name="contact" value="email" />
                            <label for="contactSource1">Web</label>
                        </div>
    
                        <div class="contact-form__radio-choice">
                            <input type="radio" id="contactSource2" name="contact" value="phone" />
                            <label for="contactSource2">TV Commercial</label>
                        </div>
    
                        <div class="contact-form__radio-choice">
                            <input type="radio" id="contactSource3" name="contact" value="mail" />
                            <label for="contactSource3">Radio</label>
                        </div>
    
                        <div class="contact-form__radio-choice">
                            <input type="radio" id="contactSource4" name="contact" value="mail" />
                            <label for="contactSource4">Letter or Postcard</label>
                        </div>
    
                        <div class="contact-form__radio-choice">
                            <input type="radio" id="contactSource5" name="contact" value="mail" />
                            <label for="contactSource5">Word of Mouth</label>
                        </div>
                    </div>
                </fieldset>
                <fieldset class="contact-form__message">
                    <label class="required-label" for="message">Message</label>
                    <textarea name="message" rows="6" placeholder="Write your message..."></textarea>
                </fieldset>
                <button type="submit" class="form-submit">Send Message</button>
            </form>
        </div>
        <div class="contact-form__success">
            <h3>Thank you for submitting your inquiry.</h3>
            <p>We will get in touch with you as soon as we can.</p>
        </div>
	</div>
</section>
