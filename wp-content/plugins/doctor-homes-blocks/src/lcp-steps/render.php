<?php
$selectedMarket = isset($attributes['selectedMarket']) ? esc_html($attributes['selectedMarket']) : 'Saint Louis';
?>

<section class="lcp-steps">
    <div class="grid-container">
        <div class="lcp-steps__text">
            <h2 class="title-2">Sell Your House in <?=$selectedMarket?> in 3 Easy Steps</h2>
            <p class="title-4">Ready to skip the hassle? See how we Buy homes faster than anyone else!</p>
        </div>

        <div class="lcp-steps__step">
            <div class="lcp-steps__step-icon">
                <?php echo get_responsive_image('lcp-steps/time', 'Clock Icon'); ?>
            </div>
            <div class="lcp-steps__step-content">
                <h3 class="title-1">Step 1</h3>
                <h4>Get An Immediate Cash Offer</h4>
                <p class="title-4">Fill out the form or give us a call, and get a cash offer for your home.</p>
            </div>
        </div>
        <div class="lcp-steps__step">
            <div class="lcp-steps__step-icon">
                <?php echo get_responsive_image('lcp-steps/document', 'Document Icon'); ?>
            </div>
            <div class="lcp-steps__step-content">
                <h3 class="title-1">Step 2</h3>
                <h4>Let Us Do The Hard Work</h4>
                <p class="title-4">We manage all the details, making the process stress-free for you.</p>
            </div>
        </div>
        <div class="lcp-steps__step">
            <div class="lcp-steps__step-icon">
                <?php echo get_responsive_image('lcp-steps/get-paid', 'Get Paid Icon'); ?>
            </div>
            <div class="lcp-steps__step-content">
                <h3 class="title-1">Step 3</h3>
                <h4>Close And Get Paid</h4>
                <p class="title-4">Receive your payment quickly on a timeline that suits your needs.</p>
            </div>
        </div>
    </div>
</section>