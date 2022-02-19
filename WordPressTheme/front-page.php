<?php get_header(); ?>

<!-- url -->
<?php
$home = esc_url(home_url('/'));
$price = esc_url(home_url('/price/'));
$works = esc_url(home_url('/works/'));
$culture = esc_url(home_url('/culture/'));
$topics = esc_url(home_url('/topics/'));
$contact = esc_url(home_url('/contact/'));

?>

<main>
    <!-- mv -->
    <section class="p-mv">
        <h2 class="p-mv__title">
            TOEFL対策はEngress</h2>
        <p class="p-mv__text">
            日本人へのTOEFL指導歴豊かな講師陣の<br />コーチング型TOEFLスクール
        </p>
        <div class="p-mv__btn">
            <a href="<?php echo $contact ?>" class="c-main-btn">資料請求</a>
        </div>
        <a href="<?php echo $contact ?>" class="p-mv__link">お問い合わせ</a>
    </section>
    <!-- ../mv -->

    <!-- ask -->
    <section class="p-ask">
        <div class="p-ask__inner l-inner">
            <p class="p-ask__title c-section-title">
                TOEFL学習で<br class="u-hidden-tab" />こんな悩みありませんか？
            </p>
            <ul class="p-ask__items">
                <li class="p-ask__item">勉強の習慣が<br class="u-hidden-sp" />身についていない</li>
                <li class="p-ask__item">勉強しているはず<br class="u-hidden-sp" />なのに点数が伸びない</li>
                <li class="p-ask__item">正しい勉強方法が<br class="u-hidden-sp" />わからない</li>
            </ul>
            <div class="p-ask__content p-border-box">
                <div class="p-border-box__inner">
                    <h2 class="p-border-box__title c-section-title">
                        Engressは<br />
                        <span class="p-border-box__under">TOEFLに特化したスクール</span>
                        です
                    </h2>
                    <p class="p-border-box__text">
                        完全オーダーメイドで、<br class="u-hidden-tab" />１人１人の悩みに合わせた最適な指導で<br class="u-hidden-sp" />TOEFLの苦手分野を克服します。
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- ../ask -->

    <!-- feature -->
    <section class="p-feature l-feature">
        <div class="p-feature__inner l-inner">
            <h2 class="p-feature__title c-section-title">TOEFL対策に特化したEngress3つの強み</h2>
            <div class="p-feature__item p-box1">
                <div class="p-box1__body">
                    <span class="p-box1__category">特長 １</span>
                    <h3 class="p-box1__title">TOEFLに最適化された<br />無駄のないカリキュラム</h3>
                    <p class="p-box1__text">
                        TOEFLではビジネス英語には登場しない数多くの学術的内容が出題されます。そのため、ベースとなる知識も必要になります。Engressでは過去1000題を分析し、最適なカリキュラムを組んでいます。
                    </p>
                </div>
                <figure class="p-box1__img">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/top/feature01.jpg" alt="TOEFLに最適化された無駄のないカリキュラム">
                </figure>
            </div>
            <div class="p-feature__item p-box1">
                <figure class="p-box1__img p-box1__img--even">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/top/feature02.jpg" alt="TOEFLに最適化された無駄のないカリキュラム">
                </figure>
                <div class="p-box1__body p-box1__body--even">
                    <span class="p-box1__category">特長 ２</span>
                    <h3 class="p-box1__title">日本人指導歴10年以上の<br />経験豊富な講師陣</h3>
                    <p class="p-box1__text">
                        TOEFLではビジネス英語には登場しない数多くの学術的内容が出題されます。そのため、ベースとなる知識も必要になります。Engressでは過去1000題を分析し、最適なカリキュラムを組んでいます。
                    </p>
                </div>
            </div>
            <div class="p-feature__item p-box1">
                <div class="p-box1__body">
                    <span class="p-box1__category">特長 ３</span>
                    <h3 class="p-box1__title">平均3ヶ月でTOEFL iBT20点アップ</h3>
                    <p class="p-box1__text">
                        TOEFLではビジネス英語には登場しない数多くの学術的内容が出題されます。そのため、ベースとなる知識も必要になります。Engressでは過去1000題を分析し、最適なカリキュラムを組んでいます。
                    </p>
                </div>
                <figure class="p-box1__img">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/top/feature03.jpg" alt="TOEFLに最適化された無駄のないカリキュラム">
                </figure>
            </div>
        </div>
    </section>
    <!-- ../feature -->

    <!-- price -->
    <div class="p-price l-price">
        <div class="p-price__inner l-inner">
            <div class="p-price__bg">
                <p class="p-price__text">Engressの料金プランはこちら</p>
                <div class="p-price__btn">
                    <a href="" class="c-border__btn">料金を見てみる</a>
                </div>
            </div>
        </div>
    </div>
    <!-- ../price -->

    <!-- success -->
    <section class="p-success l-success">
        <div class="l-inner success__inner">
            <h2 class="p-success__title c-section-title">TOEFL成功事例</h2>
            <ul class="p-success__items p-card-list">
                <li class="p-card-list__item p-case-card">
                    <!-- acf -->
                    <h3 class="p-case-card__title"><?php the_field('case_text'); ?></h3>
                    <!-- altタグ指定する場合 -->
                    <?php
                    $image = get_field('case_img'); //フィールド名はcase_img
                    if (!empty($image)) {
                        $url = $image['url']; //画像のURLを変数$urlに代入
                        $alt = $image['alt']; //画像のaltを変数$altに代入
                    ?>
                        <figure class="p-case-card__img">
                            <img src="<?php echo $url; ?>" alt="<?php echo $alt; ?>">
                        </figure>
                    <?php } ?>
                    <div class="p-case-card__body">
                        <div class="p-case-card__info">
                            <span class="p-case-card__category"><?php the_field('case_category'); ?></span>
                            <span class="p-case-card__name"><?php the_field('case_name'); ?></span>
                        </div>
                        <p class="p-case-card__up"><?php the_field('case_up'); ?></p>
                    </div>
                </li>
                <li class="p-card-list__item p-case-card">
                    <h3 class="p-case-card__title"><?php the_field('case_text_2'); ?></h3>
                    <?php
                    $image = get_field('case_img_2');
                    if (!empty($image)) {
                        $url = $image['url'];
                        $alt = $image['alt'];
                    ?>
                        <figure class="p-case-card__img">
                            <img src="<?php echo $url; ?>" alt="<?php echo $alt; ?>">
                        </figure>
                    <?php } ?>
                    <div class="p-case-card__body">
                        <div class="p-case-card__info">
                            <span class="p-case-card__category"><?php the_field('case_category_2'); ?>
                            </span>
                            <span class="p-case-card__name"><?php the_field('case_name_2'); ?></span>
                        </div>
                        <p class="p-case-card__up"><?php the_field('case_up_2'); ?></p>
                    </div>
                </li>
                <li class="p-card-list__item p-case-card">
                    <h3 class="p-case-card__title"><?php the_field('case_text_3'); ?></h3>
                    <?php
                    $image = get_field('case_img_3');
                    if (!empty($image)) {
                        $url = $image['url'];
                        $alt = $image['alt'];
                    ?>
                        <figure class="p-case-card__img">
                            <img src="<?php echo $url; ?>" alt="<?php echo $alt; ?>">
                        </figure>
                    <?php } ?>


                    <div class="p-case-card__body">
                        <div class="p-case-card__info">
                            <span class="p-case-card__category"><?php the_field('case_category_3'); ?></span>
                            <span class="p-case-card__name"><?php the_field('case_name_3'); ?></span>
                        </div>
                        <p class="p-case-card__up"><?php the_field('case_up_3'); ?></p>
                    </div>
                </li>
            </ul>
        </div>
    </section>
    <!-- ../success -->

    <!-- use -->
    <section class="p-use l-use">
        <div class="p-use__inner l-inner">
            <h2 class="p-use__title c-section-title">ご利用の流れ</h2>
            <ol class="p-use__items p-order-list">
                <li class="p-order-list__item">
                    <span class="p-order-list__number">01</span>
                    <div class="p-order-list__content">

                        <h3 class="p-order-list__title">お問い合わせ</h3>
                        <p class="p-order-list__text">まずはフォームまたはお電話からお申し込みください。</p>
                    </div>
                </li>
                <li class="p-order-list__item">
                    <span class="p-order-list__number">02</span>
                    <div class="p-order-list__content">

                        <h3 class="p-order-list__title">ヒアリング</h3>
                        <p class="p-order-list__text">現在の学習状況やTOEFLスコア、目標のスコアをお聞きします。</p>
                    </div>

                </li>
                <li class="p-order-list__item">
                    <span class="p-order-list__number">03</span>
                    <div class="p-order-list__content">

                        <h3 class="p-order-list__title">学習プランのご提供</h3>
                        <p class="p-order-list__text">目標達成のために最適な学習プランをご提案致します。</p>
                    </div>

                </li>
                <li class="p-order-list__item">
                    <span class="p-order-list__number">04</span>
                    <div class="p-order-list__content">

                        <h3 class="p-order-list__title">ご入会</h3>
                        <p class="p-order-list__text">お申込み完了後、レッスンがスタートします。</p>
                    </div>

                </li>

            </ol>
        </div>
    </section>
    <!-- ../use -->

    <!-- question -->
    <section class="p-question l-question">
        <div class="p-question__inner l-inner">
            <h2 class="p-question__title c-section-title">
                よくある質問
            </h2>
            <div class="p-question__accordion p-accordion">
                <h3 class="p-accordion__title js-accordion-title js-accordion-title--first">
                    Engressはサラリーマンでも学習を続けられるでしょうか？
                </h3>
                <div class="p-accordion__text js-accordion-text--first">
                    Engressは各個人に最適な学習プランをご提供しております。サラリーマンの方でも継続できます。
                </div>
                <h3 class="p-accordion__title js-accordion-title">
                    教材はオリジナルのものを使用しているのでしょうか？
                </h3>
                <div class="p-accordion__text">
                    Engressは各個人に最適な学習プランをご提供しております。サラリーマンの方でも継続できます。
                </div>
                <h3 class="p-accordion__title js-accordion-title">
                    講師に日本人はいますか？
                </h3>
                <div class="p-accordion__text">
                    Engressは各個人に最適な学習プランをご提供しております。サラリーマンの方でも継続できます。
                </div>
                <h3 class="p-accordion__title js-accordion-title">
                    TOEFL以外の海外大学合格のサポートもしてもらえるのでしょうか？
                </h3>
                <div class="p-accordion__text">
                    Engressは各個人に最適な学習プランをご提供しております。サラリーマンの方でも継続できます。
                </div>
            </div>
        </div>
    </section>
    <!-- //question -->

    <!-- section-box -->
    <div class="l-section-box">
        <div class="l-section-box__inner l-inner">

            <!-- blog -->
            <section class="p-blog l-blog">
                <h2 class="p-blog__title c-section-title c-section-title--sub">ブログ</h2>
                <ul class="p-blog__items">

                    <?php
                    $blog_query = new WP_Query(
                        array(
                            'post_type'      => 'post',
                            'posts_per_page' => 3,
                        )
                    );
                    ?>
                    <?php if ($blog_query->have_posts()) : ?>
                        <?php while ($blog_query->have_posts()) : ?>
                            <?php $blog_query->the_post(); ?>

                            <li class="p-blog__item">
                                <?php if (has_post_thumbnail()) : ?>
                                    <figure class="p-blog__img">
                                        <?php the_post_thumbnail(); ?>
                                    </figure>
                                <?php else : ?>
                                    <figure class="p-blog__img">
                                        <img src="<?php echo get_template_directory_uri() ?>/assets/img/common/no-img.png" alt="" />
                                    </figure>
                                <?php endif; ?>

                                <div class="p-blog__body">
                                    <div class="p-blog__category">
                                        <!-- カテゴリー -->
                                        <?php
                                        $category = get_the_category();
                                        if ($category[0]) {
                                            echo '<a href="' . get_category_link($category[0]->term_id) . '">' . $category[0]->name . '</a>';
                                        }
                                        ?>
                                    </div>
                                    <h3 class="p-blog__sub-title">
                                        <a href="<?php the_permalink(); ?>">
                                            <!-- 文字数制限 -->
                                            <?php
                                            if (mb_strlen($post->post_title, 'UTF-8') > 50) {
                                                $title = mb_substr($post->post_title, 0, 50, 'UTF-8');
                                                echo $title . '……';
                                            } else {
                                                echo $post->post_title;
                                            }
                                            ?>
                                        </a>
                                    </h3>

                                    <time datetime="<?php the_time('c'); ?>" class="p-blog__date"><?php the_time('Y-m-d'); ?></time>
                                </div>
                            </li>

                        <?php endwhile; ?>
                    <?php endif; ?>
                    <?php wp_reset_postdata(); ?>

                </ul>
            </section>
            <!-- ../blog -->
            <!-- news -->
            <section class="p-news l-news">
                <h2 class="p-news__title c-section-title c-section-title--sub">お知らせ</h2>
                <ul class="p-news__items">

                    <?php
                    $news_query = new WP_Query(
                        array(
                            'post_type'      => 'news',
                            'posts_per_page' => 3,
                        )
                    );
                    ?>
                    <?php if ($news_query->have_posts()) : ?>
                        <?php while ($news_query->have_posts()) : ?>
                            <?php $news_query->the_post(); ?>

                            <li class="p-news__item">
                                <time datetime="<?php the_time('c'); ?>" class="p-news__date"><?php the_time('Y-m-d'); ?></time>
                                <h3 class="p-news__sub-title">
                                    <a href="<?php the_permalink(); ?>">
                                        <!-- 文字数制限 -->
                                        <?php
                                        if (mb_strlen($post->post_title, 'UTF-8') > 50) {
                                            $title = mb_substr($post->post_title, 0, 50, 'UTF-8');
                                            echo $title . '……';
                                        } else {
                                            echo $post->post_title;
                                        }
                                        ?>
                                    </a>
                                </h3>
                            </li>

                        <?php endwhile; ?>
                    <?php endif; ?>
                    <?php wp_reset_postdata(); ?>

                </ul>
            </section>
            <!-- ../news -->

        </div>
    </div>

    <!-- ../section-box -->

    <!-- contact -->
    <section class="p-contact l-contact">
        <?php get_template_part('includes/contact'); ?>
    </section>
    <!-- ../contact -->
</main>

<?php get_footer(); ?>