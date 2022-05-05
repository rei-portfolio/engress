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
    <section class="p-sub-blog l-sub-blog js-scroll-trigger is-show">
        <div class="p-sub-blog__inner l-inner">
            <!-- ページタイトル -->
            <h2 class="p-sub-blog__title c-sub-section-title"><?php the_archive_title(''); ?></h2>
            <ul class="p-sub-blog__items">

                <?php if (have_posts()) : ?>
                    <?php while (have_posts()) : the_post(); ?>

                        <li class="p-sub-blog__item p-blog-box">
                            <a href="<?php the_permalink(); ?>">
                                <?php if (has_post_thumbnail()) : ?>
                                    <figure class="p-blog-box__img">
                                        <?php the_post_thumbnail(); ?>
                                    </figure>
                                <?php else : ?>
                                    <figure class="p-blog-box__img">
                                        <img src="<?php echo get_template_directory_uri() ?>/assets/img/common/no-img.png" alt="" />
                                    </figure>
                                <?php endif; ?>

                                <div class="p-blog-box__body">
                                    <time datetime="<?php the_time('c'); ?>" class="p-blog-box__date"><?php the_time('Y-m-d'); ?></time>
                                    <h3 class="p-blog-box__sub-title">
                                        <!-- 文字数制限 -->
                                        <?php show_limit_title(); ?>
                                    </h3>
                                    <div class="p-blog-box__text"><?php the_excerpt(); ?></div>
                                </div>
                            </a>
                        </li>

                    <?php endwhile; ?>
                <?php endif; ?>

            </ul>
            <div class="l-pagenavi">
                <?php wp_pagenavi(); ?>
            </div>
        </div>

    </section>
    <!-- ../blog -->

    <!-- contact -->
    <section class="p-contact l-archive-contact js-scroll-trigger is-show">
        <?php get_template_part('includes/contact'); ?>
    </section>
    <!-- ../contact -->

</main>
<!-- ../main -->
<?php get_footer(); ?>