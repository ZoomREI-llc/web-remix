<?php
$faqs = array(
    array(
        "question" => "Is a “cash home buying” company right for me?",
        "answer" => "Believe it or not, most sellers we’ve helped weren’t desperate or facing foreclosure. They come to us because, well, who wants repair headaches or endless showings? We buy houses for cash as they are, no hassle. Get an instant cash offer for your house, quick and easy!"
    ),
    array(
        "question" => "Why should I choose Doctor Homes?",
        "answer" => "We’re at the top of Google for a reason. Our customers love us because we deliver what we promise.<br/>We’re dedicated to getting you the best cash offer for your house, even if it means connecting you with other trusted buyers.<br/>We genuinely care and go the extra mile without expecting anything back."
    ),
    array(
        "question" => "How are you different from a real estate agent?",
        "answer" => "Agents don’t buy your house; they list it, charge fees, and you deal with costs and showings.<br/>We’re cash buyers, directly purchasing your house or connecting you with others who do. Skip the agent hassle – get a quick offer and close on your timeline.<br/>We cover selling expenses."
    ),
    array(
        "question" => "Do I need to clean before I move out?",
        "answer" => "Don’t stress, we buy any house in any condition. Take what you need, leave the rest. Fridge food, clothes, furniture – we’ve seen it all.<br/>Simplify your move – keep what you want, and we’ll handle the rest hassle-free.<br/>Anything decent? We donate to local charities."
    ),
    array(
        "question" => "Will I get a fair price for my property?",
        "answer" => "Great question! We pay fair prices, but not always full market value.<br/>For houses needing repairs, we calculate fair prices by subtracting repair costs. Sometimes, we offer market value but might explore seller financing if an all-cash deal doesn’t fit."
    ),
    array(
        "question" => "My house is in terrible condition, will you still buy it?",
        "answer" => "We buy homes AS-IS in any condition.<br/>The more the fix-ups, the better for us! Absolutely, we’ll buy your house even if it’s rough. You might be surprised by our offer."
    ),
);
?>

<section class="faq-section">
    <h2 class="faq-title">Frequently Asked Questions</h2>
    <div class="faq-items">
        <?php foreach ($faqs as $faq) : ?>
            <div class="faq-item">
                <div class="faq-question">
                    <?php echo esc_html($faq['question']); ?>
                    <?php echo get_responsive_image('sell-fast-faqs/polygon', 'Polygon Icon'); ?>
                </div>
                <div class="faq-answer">
                    <?php echo wp_kses_post($faq['answer']); ?>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
    <a href="<?php echo esc_url(home_url('/faqs')); ?>">More FAQs >></a>
</section>