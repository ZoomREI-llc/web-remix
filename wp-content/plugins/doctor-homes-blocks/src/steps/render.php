<?php
$time_logo_id = 451;
$time_logo_url = wp_get_attachment_url($time_logo_id);

$document_logo_id = 450;
$document_logo_url = wp_get_attachment_url($document_logo_id);

$paid_logo_id = 563;
$paid_logo_url = wp_get_attachment_url($paid_logo_id);
?>

<section class="how-it-works">
    <div class="how-it-works__text">
        <h2>How it Works</h2>
        <p>Learn how we can help you sell your house faster than you ever imagined!</p>
    </div>
    <div class="how-it-works__steps">
        <div class="step">
            <div class="step__icon">
                <img src="<?php echo esc_url($time_logo_url); ?>" alt="Clock Icon">
            </div>
            <div class="step__content">
                <h3>Step 1</h3>
                <h4>Get An Immediate Cash Offer</h4>
                <p>Fill out the form or give us a call, and get a straightforward cash offer for your home.</p>
            </div>
        </div>
        <div class="step">
            <div class="step__icon">
                <img src="<?php echo esc_url($document_logo_url); ?>" alt="Document Icon">
            </div>
            <div class="step__content">
                <h3>Step 2</h3>
                <h4>Let Us Do The Hard Work</h4>
                <p>We manage all the details, making the process stress-free for you.</p>
            </div>
        </div>
        <div class="step">
            <div class="step__icon">
                <img src="<?php echo esc_url($paid_logo_url); ?>" alt="Money Icon">
            </div>
            <div class="step__content">
                <h3>Step 3</h3>
                <h4>Close And Get Paid</h4>
                <p>Receive your payment quickly on a timeline that suits your needs.</p>
            </div>
        </div>
    </div>
</section>