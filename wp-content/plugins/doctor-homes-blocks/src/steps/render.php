<section class="how-it-works">
    <div class="grid-container">
        <div class="how-it-works__text">
            <h2 class="title-2">How it Works</h2>
            <p class="title-4">Learn how we can help you sell your house faster than you ever imagined!</p>
        </div>

        <div class="step">
            <div class="step__icon">
                <?php
                echo get_responsive_image([
                    'image_name'       => 'steps/time',
                    'alt'              => 'Clock Icon',
                    'additional_attrs' => [
                        'decoding'      => 'async',
                        'loading' => 'lazy',
                    ]
                ]);
                ?>
            </div>
            <div class="step__content">
                <h3 class="title-1">Step 1</h3>
                <h4>Get An Immediate Cash Offer</h4>
                <p class="title-4">Fill out the form or give us a call, and get a straightforward cash offer for your home.</p>
            </div>
        </div>
        <div class="step">
            <div class="step__icon">
                <?php
                echo get_responsive_image([
                    'image_name'       => 'steps/document',
                    'alt'              => 'Document Icon',
                    'additional_attrs' => [
                        'decoding'      => 'async',
                        'loading' => 'lazy',
                    ]
                ]);
                ?>
            </div>
            <div class="step__content">
                <h3 class="title-1">Step 2</h3>
                <h4>Let Us Do The Hard Work</h4>
                <p class="title-4">We manage all the details, making the process stress-free for you.</p>
            </div>
        </div>
        <div class="step">
            <div class="step__icon">
                <?php
                echo get_responsive_image([
                    'image_name'       => 'steps/get-paid',
                    'alt'              => 'Get Paid Icon',
                    'additional_attrs' => [
                        'decoding'      => 'async',
                        'loading' => 'lazy',
                    ]
                ]);
                ?>
            </div>
            <div class="step__content">
                <h3 class="title-1">Step 3</h3>
                <h4>Close And Get Paid</h4>
                <p class="title-4">Receive your payment quickly on a timeline that suits your needs.</p>
            </div>
        </div>
    </div>
</section>