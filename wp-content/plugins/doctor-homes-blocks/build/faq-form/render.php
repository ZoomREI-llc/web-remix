<?php

$phone_img = plugins_url('src/faq-form/assets/phone.svg', dirname(__FILE__, 2));

$phoneNumber = '(510) 945-3588';
?>

<section id='benefits' class="faq-form">
	<div class="faq-form-title"><h2>Didn't find the answer you were looking for?</h2></div>
	<div class="faq-form-description"><h3>Give us a call--we're happy to help!</h3></div>
	<a href="tel:<?php echo $phoneNumber; ?>" class="faq-form-number">
		<div class="faq-form-number__img">
			<img src="<?php echo $phone_img; ?>" alt="">
		</div>
		<div class="faq-form-number__text"><span><?php echo $phoneNumber; ?></span></div>
	</a>

	<form class="faq-form-main">
		<div class="faq-form-main__title">
			<h3>Prefer to write? Send us a message here.</h3>
		</div>
		<div class="faq-form-forms">
			<div class="faq-form-line">
				<div class="faq-form-form required input">
					<label for="address">Your Address</label>
					<input id="address" name="address" type="text" required>
				</div>
				<div class="faq-form-form required input">
					<label for="name">Full Name</label>
					<input id="name" name="name" type="text" required>
				</div>
			</div>
			<div class="faq-form-line">
				<div class="faq-form-form required input">
					<label for="email">Email</label>
					<input id="email" name="email" type="email" data-validation="email" required>
				</div>
				<div class="faq-form-form required input">
					<label for="phone">Phone Number</label>
					<input id="phone" name="phone" type="tel" data-validation="phone" required>
				</div>
			</div>
		</div>
		<div class="faq-form-select">
			<div class="faq-form-select__title"><span>Where did you hear about us?</span></div>
			<div class="faq-form-select__content">
				<div class="faq-form-radio input">
					<input type="radio" id="web" name="hear_from" value="web">
					<label for="web">Web</label>
				</div>
				<div class="faq-form-radio input">
					<input type="radio" id="tv" name="hear_from" value="TV Commercial">
					<label for="tv">TV Commercial</label>
				</div>
				<div class="faq-form-radio input">
					<input type="radio" id="radio" name="hear_from" value="Radio">
					<label for="radio">Radio</label>
				</div>
				<div class="faq-form-radio input">
					<input type="radio" id="letter" name="hear_from" value="Letter or Postcard">
					<label for="letter">Letter or Postcard</label>
				</div>
				<div class="faq-form-radio input">
					<input type="radio" id="word" name="hear_from" value="Word of Mouth">
					<label for="word">Word of Mouth</label>
				</div>
			</div>
		</div>
		<div class="faq-form-message required input">
			<label for="message">Message</label>
			<textarea id="message" name="message" placeholder="Write your message..." rows="30" required></textarea>
		</div>
		<button type="submit" class="faq-form-btn">
			<span>Send Message</span>
		</button>
	</form>
</section>
