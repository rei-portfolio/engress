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

    <!-- container -->
    <div class="l-container">
        <div class="l-container__inner l-inner">

            <!-- single -->
            <div class="p-single l-single">
                <!-- <div class="p-single__inner l-inner"> -->


                <?php if (have_posts()) : ?>
                    <?php while (have_posts()) : the_post(); ?>

                        <div class="p-single__category">
                            <!-- カテゴリー -->
                            <?php
                            $category = get_the_category();
                            if ($category[0]) {
                                echo '<a href="' . get_category_link($category[0]->term_id) . '">' . $category[0]->name . '</a>';
                            }
                            ?>
                        </div>

                        <h1 class="p-single__title"><?php the_title(); ?></h1>

                        <div class="p-single__info">
                            <!-- WP Social Bookmarking Light -->
                            <?php echo do_shortcode('[socialBtns]');  ?>

                            <time datetime="<?php the_time('c'); ?>" class="p-single__date"><?php the_time('Y-m-d'); ?></time>
                        </div>

                        <?php if (has_post_thumbnail()) : ?>
                            <figure class="p-single__img">
                                <?php the_post_thumbnail(); ?>
                            </figure>
                        <?php endif; ?>


                        <div class="p-single__body">
                            <?php the_content(); ?>
                        </div>

                    <?php endwhile; ?>
                <?php endif; ?>

                <!-- </div> -->
            </div>

        </div>
    </div>
    <!-- ../container -->

    <!-- contact -->
    <section class="p-contact l-single-contact">
        <?php get_template_part('includes/contact'); ?>
    </section>
    <!-- ../contact -->

</main>
<!-- ../main -->


<?php get_footer(); ?>