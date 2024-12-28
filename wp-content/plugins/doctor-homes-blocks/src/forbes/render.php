<div class="quote-section">
    <div class="grid-container">
        <div class="quote-section__container">
            <?php
            echo get_responsive_image([
                'image_name'       => 'forbes/forbes',
                'alt'              => 'Forbes',
                'class'           => 'quote-section__forbes-logo',
                'additional_attrs' => [
                    'decoding'      => 'async',
                    'loading' => 'lazy',
                ]
            ]);
            ?>
            <p><span> <?php
                        echo get_responsive_image([
                            'image_name'       => 'forbes/quotation-mark',
                            'alt'              => 'Quotation Mark',
                            'class'           => 'quote-section__quote-logo',
                            'additional_attrs' => [
                                'decoding'      => 'async',
                                'loading' => 'lazy',
                            ]
                        ]);
                        ?>
                </span> Quite often investors are willing to pay cash for a home and with the recent tightening of financial restrictions, coupled with the growing number of complaints about low appraisals, having a cash buyer has become even more appealing.</p>
        </div>
    </div>
</div>