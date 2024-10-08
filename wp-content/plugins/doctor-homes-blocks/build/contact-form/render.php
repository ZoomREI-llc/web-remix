<?php
$phone_icon_id = 581;
$phone_icon_url = wp_get_attachment_url($phone_icon_id);

$letter_icon_id = 580;
$letter_icon_url = wp_get_attachment_url($letter_icon_id);

$location_icon_id = 579;
$location_icon_url = wp_get_attachment_url($location_icon_id);

$tick_icon_id = 585;
$tick_icon_url = wp_get_attachment_url($tick_icon_id);

$airplane_icon_id = 584;
$airplane_icon_url = wp_get_attachment_url($airplane_icon_id);
?>
<section class="dh-contact-form" style="--tick-url: url('<?php echo esc_url($tick_icon_url); ?>');">
    <div class="contact-form__headings">
        <h1>Contact Us</h1>
        <h2>Any question or remarks? Just write us a message!</h2>
    </div>
    <div class="contact-form__content">
        <div class="contact-form__details">
            <div class="contact-form__details-text">
                <h3>Reach Out To Us</h3>
                <p>Get a cash offer for your house. No cleaning, no repairs, no fees. Fast, easy, and hassle-free!</p>
            </div>
            <div class="contact-form__details-items">
                <div class="contact-form__contact-detail">
                    <img src="<?php echo esc_url($phone_icon_url); ?>" alt="">
                    <a href="tel:+1 (234) 374-6637">
                        <span>+1 (234) 374-6637</span>
                    </a>
                </div>
                <div class="contact-form__contact-detail">
                    <img src="<?php echo esc_url($letter_icon_url); ?>" alt="">
                    <a href="mailto:hello@doctorhomes.com">
                        <span>hello@doctorhomes.com</span>
                    </a>
                </div>
                <div class="contact-form__contact-detail">
                    <img src="<?php echo esc_url($location_icon_url); ?>" alt="">
                    <span>1990 N California Blvd, Ste. 46,</br>
                        Walnut Creek, CA 94596</span>
                </div>
            </div>
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
        <div class="contact-form__success">
            <h3>Thank you for submitting your inquiry.</h3>
            <p>We will get in touch with you as soon as we can.</p>
        </div>
        <img class="contact-form__airplane" src="<?php echo esc_url($airplane_icon_url); ?>" alt="">
    </div>
</section>