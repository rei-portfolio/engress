<?php get_header(); ?>
<!-- main -->
<main>

    <!-- sub-mv -->
    <div class="p-sub-mv">
        <figure class="p-sub-mv__img">
            <img src="<?php echo get_template_directory_uri() ?>/assets/img/blog/blog-mv.jpg" alt="コース・料金">
        </figure>
        <h2 class="p-sub-mv__title">ブログ</h2>
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

    <!-- blog -->
    <section class="p-sub-blog l-sub-blog">
        <div class="p-sub-blog__inner l-inner">

            <h2 class="p-sub-blog__title c-sub-section-title">新着一覧</h2>
            <ul class="p-sub-blog__items">
                <li class="p-sub-blog__item p-blog-box">
                    <figure class="p-blog-box__img">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/img/common/blog01.jpg" alt="">
                    </figure>
                    <div class="p-blog-box__body">
                        <time datetime="<?php the_time('c'); ?>" class="p-blog-box__date"><?php the_time('Y-m-d'); ?>2020-12-01</time>
                        <h3 class="p-blog-box__sub-title">
                            <a href="">
                                ブログタイトルテキストテキストテキストテキストテキストテキストテキスト
                            </a>
                        </h3>
                        <p class="p-blog-box__text">記事の冒頭文テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
                    </div>
                </li>
                

            </ul>
        </div>

    </section>
    <!-- ../blog -->

    <!-- contact -->
    <section class="p-contact l-archive-contact">
        <?php get_template_part('includes/contact'); ?>
    </section>
    <!-- ../contact -->
</main>
<!-- ../main -->
<?php get_footer(); ?>