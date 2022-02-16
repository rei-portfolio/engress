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
                    <h3 class="p-case-card__title">TOEFL iBT 100点を突破してコロンビア大学大学院に進学できました！</h3>
                    <figure class="p-case-card__img">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/img/top/case01.png" alt="toefl ibt 100点を突破してコロンビア大学大学院に進学できました">
                    </figure>
                    <div class="p-case-card__body">
                        <div class="p-case-card__info">
                            <span class="p-case-card__category">会社員</span>
                            <span class="p-case-card__name">T.Fujiyamaさん</span>
                        </div>
                        <p class="p-case-card__up">3ヶ月でTOEFL80→108点</p>
                    </div>
                </li>
                <li class="p-card-list__item p-case-card">
                    <h3 class="p-case-card__title">半年でTOEFL 40点→100点を達成！コロンビア大学大学院に合格</h3>
                    <figure class="p-case-card__img">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/img/top/case02.png" alt="toefl ibt 100点を突破してコロンビア大学大学院に進学できました">
                    </figure>
                    <div class="p-case-card__body">
                        <div class="p-case-card__info">
                            <span class="p-case-card__category">大学生
                            </span>
                            <span class="p-case-card__name">Y.Takiyamaさん</span>
                        </div>
                        <p class="p-case-card__up">6ヶ月でTOEFL40→100点</p>
                    </div>
                </li>
                <li class="p-card-list__item p-case-card">
                    <h3 class="p-case-card__title">早稲田大学 国際教養学部AO入試合格！TOEFL iBT 109点</h3>
                    <figure class="p-case-card__img">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/img/top/case03.png" alt="toefl ibt 100点を突破してコロンビア大学大学院に進学できました">
                    </figure>
                    <div class="p-case-card__body">
                        <div class="p-case-card__info">
                            <span class="p-case-card__category">高校生</span>
                            <span class="p-case-card__name">M.Yamadaさん</span>
                        </div>
                        <p class="p-case-card__up">5ヶ月でTOEFL68→109点</p>
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
                    <li class="p-blog__item">
                        <figure class="p-blog__img">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/common/blog01.jpg" alt="">
                        </figure>
                        <div class="p-blog__body">
                            <h3 class="p-blog__sub-title">
                                <a href="">
                                    Engress説明会in大阪の模様をお伝えします
                                </a>
                            </h3>
                            <time datetime="<?php the_time('c'); ?>" class="p-blog__date"><?php the_time('Y-m-d'); ?></time>
                        </div>
                    </li>
                    <li class="p-blog__item">
                        <figure class="p-blog__img">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/common/blog01.jpg" alt="">
                        </figure>
                        <div class="p-blog__body">
                            <h3 class="p-blog__sub-title">
                                <a href="">
                                    Engress説明会in大阪の模様をお伝えします
                                </a>
                            </h3>
                            <time datetime="<?php the_time('c'); ?>" class="p-blog__date"><?php the_time('Y-m-d'); ?></time>
                        </div>
                    </li>
                </ul>
            </section>
            <!-- ../blog -->
            <!-- news -->
            <section class="p-news l-news">
                <h2 class="p-news__title c-section-title c-section-title--sub">お知らせ</h2>
                <ul class="p-news__items">
                    <li class="p-news__item">
                        <time datetime="<?php the_time('c'); ?>" class="p-news__date"><?php the_time('Y-m-d'); ?></time>
                        <h3 class="p-news__sub-title">
                            <a href="">
                                2021年のスケジュールについて
                            </a>
                        </h3>
                    </li>
                    <li class="p-news__item">
                        <time datetime="<?php the_time('c'); ?>" class="p-news__date"><?php the_time('Y-m-d'); ?></time>
                        <h3 class="p-news__sub-title">
                            <a href="">
                                2021年のスケジュールについて
                            </a>
                        </h3>
                    </li>
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