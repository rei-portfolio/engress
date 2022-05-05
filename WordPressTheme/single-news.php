<?php get_header(); ?>

<!-- パンくず -->
<div class="l-breadcrumb">
    <div class="l-inner">
        <?php if (function_exists('bcn_display')) {
            bcn_display();
        } ?>
    </div>
</div>
<!-- ../パンくず -->

<!-- main -->
<main>

    <!-- single -->
    <article class="p-news-single l-news-single js-scroll-trigger is-show">
        <div class="p-news-single__inner l-inner">

            <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>
                    <!-- カテゴリーがあれば -->
                    <?php if (has_category()) : ?>
                        <div class="p-news-single__category">
                            <?php
                            $category = get_the_category();
                            if ($category[0]) {
                                echo '<a href="' . get_category_link($category[0]->term_id) . '">' . $category[0]->name . '</a>';
                            }
                            ?>
                        </div>
                    <?php endif; ?>

                    <h1 class="p-news-single__title"><?php the_title(); ?></h1>
                    <time datetime="<?php the_time('c'); ?>" class="p-news-single__date"><?php the_time('Y-m-d'); ?></time>

                    <div class="p-news-single__body">
                        <?php the_content(); ?>
                    </div>

                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </article>
    <!-- single -->

    <!-- contact -->
    <section class="p-contact l-single-contact js-scroll-trigger is-show">
        <?php get_template_part('includes/contact'); ?>
    </section>
    <!-- ../contact -->

</main>
<!-- ../main -->


<?php get_footer(); ?>