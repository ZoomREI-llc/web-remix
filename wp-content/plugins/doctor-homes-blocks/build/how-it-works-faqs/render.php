<?php
$faqs = array(
    array(
        "question" => "How quickly can I get a cash offer for my house?",
        "answer" => "You can get a quick cash offer in just 7 minutes! Simply fill out our online form or give us a call, and we’ll provide you with a straightforward cash offer for your home. It’s the fastest way to sell your house fast for cash, no matter its condition."
    ),
    array(
        "question" => "Do I need to make any repairs or clean my house before selling?",
        "answer" => "No, you don’t need to lift a finger! We buy homes as-is, in any condition. There’s no need for repairs or cleaning. We’ll handle everything for you, making it easy to sell your house as is fast."
    ),
    array(
        "question" => "What happens after I accept the cash offer?",
        "answer" => "Once you accept our cash offer, we’ll assign you a dedicated transaction coordinator. They will guide you through every step, assist with any documentation, and ensure that all the paperwork is handled smoothly and efficiently, helping you sell your house fast."
    ),
    array(
        "question" => "How flexible is the closing date?",
        "answer" => "Very flexible! You can choose the closing date that works best for you. Whether you need to close in a few days or prefer to wait a bit longer, we’ll adjust to your schedule to provide you with the convenience and peace of mind you deserve. It’s all part of how we help you sell your house fast."
    ),
    array(
        "question" => "How will I receive my payment once everything is finalized?",
        "answer" => "Once everything is finalized, you’ll receive your payment promptly by wireless deposit or check. This ensures you get your money without any delays or dependencies on loans or funding, making it easy to sell your house fast for cash."
    ),
);

$polygon_icon_id = 406;
$polygon_icon_url = wp_get_attachment_url($polygon_icon_id);
?>

<section class="faq-section">
    <h2 class="faq-title">Frequently Asked Questions</h2>
    <div class="faq-items">
        <?php foreach ($faqs as $faq) : ?>
            <div class="faq-item">
                <div class="faq-question">
                    <?php echo esc_html($faq['question']); ?>
                    <img src="<?php echo esc_url($polygon_icon_url); ?>" alt="">
                </div>
                <div class="faq-answer">
                    <?php echo wp_kses_post($faq['answer']); ?>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
    <a href="<?php echo esc_url(home_url('/faqs')); ?>">More FAQs >></a>
</section>