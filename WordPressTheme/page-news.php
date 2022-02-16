<?php get_header(); ?>
<!-- main -->
<main>

    <!-- sub-mv -->
    <div class="p-sub-mv">
        <figure class="p-sub-mv__img">
            <img src="<?php echo get_template_directory_uri() ?>/assets/img/news/news-mv.jpg" alt="コース・料金">
        </figure>
        <h2 class="p-sub-mv__title">ニュース</h2>
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

    <!-- news -->
    <section class="p-sub-news l-sub-news">
        <div class="p-sub-news__inner l-inner">
            <h2 class="p-sub-news__title c-sub-section-title">お知らせ一覧</h2>
            <ul class="p-sub-news__items">
                <li class="p-sub-news__item p-news-info">
                    <time datetime="<?php the_time('c'); ?>" class="p-news-info__date"><?php the_time('Y-m-d'); ?></time>
                    <h3 class="p-news-info__sub-title">
                        <a href="">
                        お知らせのタイトルテキストテキストテキストテキストテキストテキストテキスト
                        </a>
                    </h3>
                </li>
                <li class="p-sub-news__item p-news-info">
                    <time datetime="<?php the_time('c'); ?>" class="p-news-info__date"><?php the_time('Y-m-d'); ?></time>
                    <h3 class="p-news-info__sub-title">
                        <a href="">
                        お知らせのタイトルテキストテキストテキストテキストテキストテキストテキスト
                        </a>
                    </h3>
                </li>

            </ul>
        </div>

    </section>
    <!-- ../news -->

    <!-- contact -->
    <section class="p-contact l-archive-contact">
        <?php get_template_part('includes/contact'); ?>
    </section>
    <!-- ../contact -->
</main>
<!-- ../main -->
<?php get_footer(); ?>