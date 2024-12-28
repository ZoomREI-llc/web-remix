<?php
$selectedMarket = isset($attributes['selectedMarket']) ? esc_html($attributes['selectedMarket']) : 'Saint Louis';
?>
<section class="lcp-sell-today">
    <div class="lcp-sell-today__bg">
        <?php
        echo get_responsive_image([
            'image_name'       => 'lcp-sell-today/bg',
            'alt'              => 'Background Decoration',
            'class '          => 'lcp-sell-today__fon',
            'additional_attrs' => [
                'decoding'      => 'async',
                'loading' => 'lazy',
            ]
        ]);
        ?>
    </div>
    <div class="grid-container">
        <div class="lcp-sell-today__content">
            <div class="lcp-sell-today__titles">
                <div class="lcp-sell-today__subtitle">SELL YOUR HOUSE TODAY</div>
                <h1 class="title-1">We Make It Incredibly Easy To Sell Your House In <?= $selectedMarket ?></h1>
            </div>

            <p>Whatever your circumstances, no matter the condition of your house, we’re happy to buy. Contact us today for an immediate cash offer, and let’s get that house sold!</p>

            <a href="#lcp-form" class="cta-btn btn lcp-sell-today__button">
                Get My Offer
                <svg width="23" height="19" viewBox="0 0 23 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M13.7795 2.76551L12.388 4.19462L12.3882 4.19482L12.389 4.19568L12.3927 4.1992L12.4072 4.21338L12.4645 4.26921L12.6827 4.48227C12.871 4.66617 13.1401 4.92945 13.4631 5.24642C14.1094 5.88069 14.97 6.7285 15.8296 7.58507C15.9435 7.6985 16.0571 7.81192 16.1701 7.92488H2.30469C1.20012 7.92488 0.304688 8.82031 0.304688 9.92488C0.304688 11.0295 1.20012 11.9249 2.30469 11.9249H15.9395C15.9029 11.9614 15.8663 11.9979 15.8296 12.0344C14.97 12.891 14.1094 13.7388 13.463 14.373C13.1401 14.69 12.871 14.9533 12.6827 15.1372L12.4645 15.3503L12.4072 15.4061L12.3927 15.4203L12.389 15.4238L12.3882 15.4247L12.388 15.4248L13.7832 16.8577L12.3879 15.4249C11.5966 16.1955 11.5798 17.4617 12.3504 18.2531C13.121 19.0444 14.3872 19.0612 15.1786 18.2906L13.7832 16.8577C15.1786 18.2906 15.1786 18.2906 15.1787 18.2905L15.1789 18.2902L15.18 18.2892L15.1838 18.2855L15.1989 18.2707L15.2573 18.2138L15.4781 17.9983C15.6681 17.8126 15.9393 17.5473 16.2647 17.228C16.9152 16.5896 17.7836 15.7341 18.653 14.8678C19.5201 14.0038 20.3973 13.12 21.0615 12.4281C21.391 12.0849 21.6841 11.7722 21.9012 11.5264C22.0063 11.4075 22.1182 11.2765 22.2129 11.1521C22.2573 11.0938 22.328 10.998 22.3969 10.8826C22.4307 10.8258 22.4871 10.7265 22.5405 10.5984C22.5775 10.5095 22.6994 10.2112 22.6994 9.80971C22.6994 9.40819 22.5775 9.10992 22.5405 9.021C22.4871 8.89291 22.4307 8.79358 22.3969 8.73688C22.328 8.62147 22.2573 8.5256 22.2129 8.46733C22.1182 8.34294 22.0063 8.21194 21.9012 8.09302C21.6841 7.8472 21.391 7.53458 21.0615 7.19137C20.3973 6.49948 19.5201 5.61564 18.653 4.7516C17.7836 3.8853 16.9152 3.02981 16.2647 2.39149C15.9393 2.07216 15.6681 1.80682 15.4781 1.62118L15.2573 1.40566L15.1989 1.34872L15.1838 1.334L15.18 1.33022L15.1789 1.32923L15.1787 1.32897C15.1786 1.32891 15.1786 1.32887 13.9038 2.63796L15.1786 1.32886C14.3872 0.558249 13.121 0.575053 12.3504 1.3664C11.5798 2.15774 11.5966 3.42396 12.3879 4.19458L13.7795 2.76551Z" fill="white"></path>
                </svg>
            </a>

            <div class="lcp-sell-today__reviews">
                <div class="lcp-sell-today__reviews-stars-wrapper">
                    <?php for ($i = 0; $i < 5; $i++): ?>
                        <span class="lcp-sell-today__star"><?php
                                                            echo get_responsive_image([
                                                                'image_name'       => 'lcp-sell-today/star',
                                                                'alt'              => 'Star',
                                                                'additional_attrs' => [
                                                                    'decoding'      => 'async',
                                                                    'loading' => 'lazy',
                                                                ]
                                                            ]);
                                                            ?></span>
                    <?php endfor; ?>
                </div>
                <div class="lcp-sell-today__reviews-text">
                    <p>Rated <strong>4.7/5</strong> | Based on <strong>100+</strong> reviews</p>
                </div>
            </div>

            <ul class="lcp-sell-today__statistic--list">
                <li class="lcp-sell-today__statistic--item">
                    <div class="lcp-sell-today__statistic--amunt">$36M+</div>
                    <div class="lcp-sell-today__statistic--text">Saved <br>Fees</div>
                </li>
                <li class="lcp-sell-today__statistic--item">
                    <div class="lcp-sell-today__statistic--amunt">1,500+</div>
                    <div class="lcp-sell-today__statistic--text">HOUSES <br>BOUGHT</div>
                </li>
                <li class="lcp-sell-today__statistic--item">
                    <div class="lcp-sell-today__statistic--amunt">96%</div>
                    <div class="lcp-sell-today__statistic--text">SATISFIED <br>CUSTOMERS</div>
                </li>
            </ul>
        </div>
    </div>
</section>