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
    )
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
    <a href="#">More FAQs >></a>
</section>