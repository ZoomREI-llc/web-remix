<?php

$background_image_url = plugins_url('src/lcp-sell-today/assets/last-block-fon.webp', dirname(__FILE__, 2));
$star_icon_url = plugins_url('src/lcp-sell-today/assets/star.svg', dirname(__FILE__, 2));
$arrow_icon_url = plugins_url('src/lcp-sell-today/assets/cta-arrow.svg', dirname(__FILE__, 2));

$selectedMarket = isset($attributes['selectedMarket']) ? esc_html($attributes['selectedMarket']) : 'Saint Louis';
?>
<section class="lcp-sell-today-wrapper">
         <div class="lcp-sell-today__media">
            <img src="<?php echo esc_url($background_image_url); ?>" alt="" class="lcp-sell-today__fon">
         </div>
    <div class="lcp-sell-today">

        <div class=" cw-hero__content">
            <div class="cw-hero__titles">
                <div class="cw-hero__subtitle">SELL YOUR HOUSE TODAY</div>
                <h1>We Make It Incredibly Easy To Sell Your House In <?=$selectedMarket?></h1>
                <p>Whatever your circumstances, no matter the condition of your house, we’re happy to buy. Contact us today for an immediate cash offer, and let’s get that house sold!</p>
            </div>

            <div class="cw-hero__footer-block">
               <a class="cta-btn cw-hero__cta" href="#lcp-form">Get my offer<img src="<?php echo esc_url($arrow_icon_url); ?>" alt="Arrow"></a>
               <div class="cw-hero__reviews">
                   <div class="cw-hero__reviews-stars-wrapper">
                       <span class="cw-hero__star"><img src="<?php echo esc_url($star_icon_url); ?>" alt="star"></span>
                       <span class="cw-hero__star"><img src="<?php echo esc_url($star_icon_url); ?>" alt="star"></span>
                       <span class="cw-hero__star"><img src="<?php echo esc_url($star_icon_url); ?>" alt="star"></span>
                       <span class="cw-hero__star"><img src="<?php echo esc_url($star_icon_url); ?>" alt="star"></span>
                       <span class="cw-hero__star"><img src="<?php echo esc_url($star_icon_url); ?>" alt="star"></span>
                   </div>
                   <div class="cw-hero__reviews-text">
                       <p>Rated <strong>4.7/5</strong> Based on <strong>100+</strong> reviews</p>
                   </div>
               </div>
            </div>


            <ul class="cw-hero__statistic--list">
                <li class="cw-hero__statistic--item">
                    <div class="cw-hero__statistic--amunt">36M+</div>
                    <div class="cw-hero__statistic--text">Saved <br>Fees</div>
                </li>
                <li class="cw-hero__statistic--item">
                    <div class="cw-hero__statistic--amunt">1,500+</div>
                    <div class="cw-hero__statistic--text">HOUSES <br>BOUGHT</div>
                </li>
                <li class="cw-hero__statistic--item">
                    <div class="cw-hero__statistic--amunt">96%</div>
                    <div class="cw-hero__statistic--text">SATISFIED <br>CUSTOMERS</div>
                </li>
            </ul>
        </div>
    </div>
</section>
