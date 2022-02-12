<?php get_header(); ?>
<!-- main -->
<main>

    <!-- sub-mv -->
    <div class="p-sub-mv">
        <picture class="p-sub-mv__img">
            <img src="<?php echo get_template_directory_uri() ?>/assets/img/price/price-mv.jpg" alt="コース・料金">
        </picture>
        <h2 class="p-sub-mv__title c-section-title c-section-title--sub">コース・料金</h2>
    </div>
    <!-- ../sub-mv -->

    <!-- price-plan -->
    <section class="p-price-plan l-price-plan">
        <div class="p-price-plan__inner l-inner">
            <h2 class="p-price-plan__title c-sub-title">料金体系</h2>
            <div class="p-price-plan__box">
                <p class="p-price-plan__join">入会金 39,800円</p>
                <p class="p-price-plan__month">月額費用</p>
            </div>
            <p class="p-price-plan__text">Engressのカリキュラムは完全オーダーメイドのため、カリキュラム内のサポート内容によって料金が変動します。おすすめのスタンダードプランでは、進学先に合わせたサポートまで包括的に行います。</p>
        </div>
    </section>
    <!-- .../price-plan -->

    <!-- price-table -->
    <section class="p-price-table l-price-table">
        <div class="p-price-table__inner l-inner">
            <h2 class="p-price-table__title c-sub-title">料金表</h2>
            <table class="p-price-table__items">

                <tr class="p-price-table__item">
                    <th class="p-price-table__title">基礎プラン</th>
                    <th>基礎プラン</th>
                    <th>おすすめ<br />志望校対策プラン</th>
                    <th>フレックスプラン</th>
                </tr>

                <tr>
                    <td>59,000円~</td>
                    <td>75,000円~</td>
                    <td>95,000円~</td>
                    <td>60,000円~</td>
                </tr>

                <tr>
                    <td>*月額（税抜価格）</td>
                    <td>*月額（税抜価格）</td>
                    <td>*月額（税抜価格）</td>
                    <td>*月額（税抜価格）</td>
                </tr>

                <tr>
                    <td>カリキュラム作成</td>
                    <td>カリキュラム作成</td>
                    <td>カリキュラム作成</td>
                    <td>＊別途ご相談ください</td>
                </tr>
                <tr>
                    <td>TOEFL学習サポート</td>
                    <td>TOEFL学習サポート</td>
                    <td>TOEFL学習サポート</td>
                </tr>
                <tr>
                    <td>週一回のビデオMTG</td>
                    <td>週一回のビデオMTG</td>
                    <td>週一回のビデオMTG</td>
                </tr>

            </table>
        </div>
    </section>
    <!-- ../price-table -->

    <!-- contact -->
    <?php get_template_part('includes/contact'); ?>
    <!-- ../contact -->
</main>
<!-- ../main -->
<?php get_footer(); ?>