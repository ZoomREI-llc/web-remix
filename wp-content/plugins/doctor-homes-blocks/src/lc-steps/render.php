<section class="lc-steps">
    <div class="lc-steps__text">
        <h2>House Sales Are Complicated, Right? Not With Us - Just 3 Easy Steps</h2>
        <p>We’ll make a fair cash offer on your home in under 7 minutes.</p>
    </div>
    <div class="lc-steps__steps">
        <div class="step">
            <div class="step__img">
                <?php
                echo get_responsive_image([
                    'image_name'       => 'lc-steps/step1',
                    'alt'              => 'Sharing Details',
                    'additional_attrs' => [
                        'decoding'      => 'async',
                        'loading' => 'lazy',
                    ]
                ]);
                ?>
            </div>
            <div class="step__content">
                <div class="step__title">
                    <span class="step__number">1</span>
                    <h3>Share your details with us</h3>
                </div>
                <p>We only need your address, name, and contact details to get started. Just fill in the form above.</p>
            </div>
        </div>
        <div class="step">
            <div class="step__img">
                <?php
                echo get_responsive_image([
                    'image_name'       => 'lc-steps/step2',
                    'alt'              => 'Get an immediate cash offer',
                    'additional_attrs' => [
                        'decoding'      => 'async',
                        'loading' => 'lazy',
                    ]
                ]);
                ?>
            </div>
            <div class="step__content">
                <div class="step__title">
                    <span class="step__number">2</span>
                    <h3>Get an immediate cash offer</h3>
                </div>
                <p>We’ll call back with a cash offer in under 7 minutes.</p>
            </div>
        </div>
        <div class="step">
            <div class="step__img">
                <?php
                echo get_responsive_image([
                    'image_name'       => 'lc-steps/step3',
                    'alt'              => 'Close and get paid',
                    'additional_attrs' => [
                        'decoding'      => 'async',
                        'loading' => 'lazy',
                    ]
                ]);
                ?>
            </div>
            <div class="step__content">
                <div class="step__title">
                    <span class="step__number">3</span>
                    <h3>Close and get paid</h3>
                </div>
                <p>We’ll do the hard work for you. No paperwork is required and we’ll work to your timeline.</p>
            </div>
        </div>
    </div>
</section>