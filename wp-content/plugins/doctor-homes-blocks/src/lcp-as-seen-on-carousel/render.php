<?php
$logos = [
    'abc',
    'cbs',
    'forbes',
    'fox',
    'nbc',
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
                        <div class="lcp-as-seen-on-carousel__logo">
                            <?php
                            echo get_responsive_image([
                                'image_name'       => 'lcp-as-seen-on-carousel/' . $logos[$index],
                                'alt'              =>  $logos[$index],
                                'additional_attrs' => [
                                    'decoding'      => 'async',
                                    'loading' => 'lazy',
                                ]
                            ]);
                            ?>
                        </div>
                    <?php endfor; ?>
                </div>
            </div>
        </div>
    </div>
</section>