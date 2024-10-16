<?php
$logos = [
    'abc.webp',
    'cbs.webp',
    'forbes.webp',
    'fox.webp',
    'nbc.webp',
];
$clones = 4;
$index = -1;
?>
<section id='how-it-works' class="lcp-as-seen-on-carousel-wrapper">
    <div class="lcp-as-seen-on-carousel">
        <div class="lcp-as-seen-on-carousel__container">
            <span class="lcp-as-seen-on-carousel__text">Featured in:</span>
            <div class="lcp-as-seen-on-carousel__logos-wrapper">
                <div class="lcp-as-seen-on-carousel__logos">
                    <?php for ($i = 0; $i < count($logos) * $clones; $i++): $index = $index >= count($logos) - 1 ? 0 : ($index + 1); ?>
                        <div class="lcp-as-seen-on-carousel__logo"><img src="<?= plugins_url('src/lcp-as-seen-on-carousel/assets/'.$logos[$index], dirname(__FILE__, 2)) ?>" alt="<?= explode('.', $logos[$index])[0] ?>"></div>
                    <?php endfor; ?>
                </div>
            </div>
        </div>
    </div>
</section>