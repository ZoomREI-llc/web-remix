<?php
$faqs = [
    [
        'question' => 'Is a “cash home buying” company right for me?',
        'answer' => 'Believe it or not, most sellers we’ve helped weren’t desperate or facing foreclosure. They come to us because, well, who wants repair headaches or endless showings? We buy houses for cash as they are, no hassle. Get an instant cash offer for your house, quick and easy!'
    ],
    [
        'question' => 'Why should I choose Doctor Homes?',
        'answer' => 'We offer a fast, hassle-free process to sell your home. We buy houses in any condition, providing a fair cash offer and closing on your timeline.'
    ],
    [
        'question' => 'How are you different from a real estate agent?',
        'answer' => 'We buy houses directly from homeowners, without listing, showing, or waiting for a buyer. No commissions, no fees, no repairs needed.'
    ],
    [
        'question' => 'Do I need to clean before I move out?',
        'answer' => 'No, you don’t need to clean. We’ll take care of everything. Just take what you want and leave the rest!'
    ],
];
?>
<div class="faq-section">
    <?php foreach ($faqs as $faq) : ?>
        <div class="faq-item">
            <div class="faq-question">
                <?php echo esc_html($faq['question']); ?>
            </div>
            <div class="faq-answer">
                <?php echo esc_html($faq['answer']); ?>
            </div>
        </div>
    <?php endforeach; ?>
</div>