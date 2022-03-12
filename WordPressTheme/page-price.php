<?php get_header(); ?>
<!-- main -->
<main>

    <!-- sub-mv -->
    <div class="p-sub-mv">
        <figure class="p-sub-mv__img">
            <img src="<?php echo get_template_directory_uri() ?>/assets/img/price/price-mv.jpg" alt="コース・料金">
        </figure>
        <h1 class="p-sub-mv__title">コース・料金</h1>
    </div>
    <!-- ../sub-mv -->

    <!-- パンくず -->
    <div class="l-breadcrumb">
        <div class="l-inner">
            <?php if (function_exists('bcn_display')) {
                bcn_display();
            } ?>
        </div>
    </div>
    <!-- ../パンくず -->

    <!-- price-plan -->
    <section class="p-price-plan l-price-plan">
        <div class="p-price-plan__inner l-inner">
            <h2 class="p-price-plan__title c-sub-section-title">料金体系</h2>
            <div class="p-price-plan__box">
                <p class="p-price-plan__join">入会金 <br class="u-hidden-tab" />39,800円</p>
                <p class="p-price-plan__month">月額費用</p>
            </div>
            <p class="p-price-plan__text">Engressのカリキュラムは完全オーダーメイドのため、カリキュラム内のサポート内容によって料金が変動します。おすすめのスタンダードプランでは、進学先に合わせたサポートまで包括的に行います。</p>
        </div>
    </section>
    <!-- .../price-plan -->

    <!-- price-list -->
    <section class="p-price-lost l-price-list">

        <div class="p-price-list__inner l-inner">
            <h2 class="p-price-list__title c-sub-section-title">料金表</h2>

            <div class="p-price-list__scroll js-scrollable">
                <ul class="p-price-list__items p-table">
                    <li class="p-table__item">
                        <h3 class="p-table__title">
                            基礎プラン
                        </h3>
                        <div class="p-table__body">
                            <div class="p-table__block">
                                <!-- acf -->
                                <p class="p-table__price"><?php the_field('price'); ?></p>
                                <p class="p-table__month">*月額（税抜価格）</p>
                            </div>
                            <div class="p-table__content">
                                <p class="p-table__text">カリキュラム作成</p>
                                <p class="p-table__text">TOEFL学習サポート</p>
                                <p class="p-table__text">週一回のビデオMTG</p>
                            </div>
                        </div>
                    </li>
                    <li class="p-table__item">
                        <h3 class="p-table__title">
                            演習プラン
                        </h3>
                        <div class="p-table__body">

                            <div class="p-table__block">
                                <p class="p-table__price"><?php the_field('price_2'); ?></p>
                                <p class="p-table__month">*月額（税抜価格）</p>
                            </div>
                            <div class="p-table__content">
                                <p class="p-table__text">カリキュラム作成</p>
                                <p class="p-table__text">TOEFL学習サポート</p>
                                <p class="p-table__text">週一回のビデオMTG</p>
                                <p class="p-table__text">月二回の模試（解説付き）</p>
                            </div>
                        </div>

                    </li>
                    <li class="p-table__item">
                        <h3 class="p-table__title p-table__title--pickup">
                            <span class="p-table__br">
                                おすすめ
                            </span>
                            志望校対策プラン
                        </h3>
                        <div class="p-table__body">

                            <div class="p-table__block">
                                <p class="p-table__price p-table__price--pickup"><?php the_field('price_3'); ?></p>
                                <p class="p-table__month">*月額（税抜価格）</p>
                            </div>
                            <div class="p-table__content">
                                <p class="p-table__text">カリキュラム作成</p>
                                <p class="p-table__text">TOEFL学習サポート</p>
                                <p class="p-table__text">週一回のビデオMTG</p>
                                <p class="p-table__text">月二回の模試（解説付き）</p>
                                <p class="p-table__text">週一の英語面接対策</p>
                            </div>
                        </div>

                    </li>
                    <li class="p-table__item">
                        <h3 class="p-table__title">
                            フレックスプラン
                        </h3>
                        <div class="p-table__body">

                            <div class="p-table__block">
                                <p class="p-table__price"><?php the_field('price_4'); ?></p>
                                <p class="p-table__month">*月額（税抜価格）</p>
                            </div>
                            <div class="p-table__content">
                                <p class="p-table__text p-table__text--none">＊別途ご相談ください</p>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <!-- ../price-list -->

    <!-- contact -->
    <section class="p-contact l-price-contact">
        <?php get_template_part('includes/contact'); ?>
    </section>
    <!-- ../contact -->
</main>
<!-- ../main -->
<?php get_footer(); ?>