<?php
$selectedMarket = isset($attributes['selectedMarket']) ? esc_html($attributes['selectedMarket']) : 'Saint Louis';

$faqs = [
    [
        "question" => "Why should I choose Doctor Homes?",
        "answer" => "We’re top-rated on Google because we deliver on our promises. Our customers in $selectedMarket love us. We’ll get you the best cash offer for your property, even if it means connecting you with other trusted buyers."
    ],
    [
        "question" => "How are you different from a real estate agent in $selectedMarket?",
        "answer" => "Agents list your property, charge fees, and you handle costs and showings. We buy your property in $selectedMarket directly or connect you with buyers. Skip the hassle – get a quick offer, close on your timeline."
    ],
    [
        "question" => "My property in $selectedMarket is in terrible condition, will you still buy it?",
        "answer" => "We buy properties AS-IS in any condition. The more the fix-ups, the better for us! We’ll buy your $selectedMarket house even if it’s rough. You might be surprised by our offer."
    ],
    [
        "question" => "I'm going through a major life change and need to sell my home quickly. Can you help me?",
        "answer" => "We understand that life changes like relocation, divorce, medical issues, or unexpected events can make selling your home urgent. We offer a fast purchase process, fair pricing, and a straightforward approach, avoiding traditional real estate hurdles."
    ],
    [
        "question" => "I'm a rental property owner in $selectedMarket, dealing with property management issues. Can you help me?",
        "answer" => "We understand the challenges landlords in $selectedMarket face: problematic tenants, high maintenance costs, or poor financial returns. We offer a fast purchase process, fair pricing, and a straightforward approach, avoiding traditional real estate hurdles."
    ],
    [
        "question" => "I need to sell my inherited property in $selectedMarket quickly and move - Are You the best choice?",
        "answer" => "We specialize in fast and flexible property sales for inherited property owners in $selectedMarket. No repairs needed, no commissions, and a flexible timeline that suits your needs."
    ]
];

?>

<section class="faq-section">
    <div class="grid-container">
        <h2 class="faq-title title-2">Frequently Asked Questions</h2>
        <div class="faq-section__content">
            <div class="faq-items">
                <?php foreach ($faqs as $faq) : ?>
                    <div class="faq-item">
                        <div class="faq-question">
                            <?php echo esc_html($faq['question']); ?>
                            <?php echo get_responsive_image('lcp-faqs/polygon', 'Polygon Icon'); ?>
                        </div>
                        <div class="faq-answer">
                            <?php echo wp_kses_post($faq['answer']); ?>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
            <a href="<?php echo esc_url(home_url('/faqs')); ?>">More FAQs >></a>
        </div>
    </div>
</section>