<?php get_header(); ?>
<!-- main -->
<main>

    <!-- sub-mv -->
    <div class="p-sub-mv">
        <figure class="p-sub-mv__img">
            <img src="<?php echo get_template_directory_uri() ?>/assets/img/news/news-mv.jpg" alt="コース・料金">
        </figure>
        <h1 class="p-sub-mv__title">ニュース</h1>
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

                <?php if (have_posts()) : ?>
                    <?php while (have_posts()) : the_post(); ?>

                        <li class="p-sub-news__item p-news-info">
                            <time datetime="<?php the_time('c'); ?>" class="p-news-info__date"><?php the_time('Y-m-d'); ?></time>
                            <h3 class="p-news-info__sub-title">
                                <a href="<?php the_permalink(); ?>">
                                    <!-- 文字数制限 -->
                                    <?php
                                    if (mb_strlen($post->post_title, 'UTF-8') > 42) {
                                        $title = mb_substr($post->post_title, 0, 42, 'UTF-8');
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

            </ul>
            <div class="l-pagenavi">
                <?php wp_pagenavi(); ?>
            </div>
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