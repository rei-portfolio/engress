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
            <!-- main-contents -->
            <div class="l-main-contents">

                <!-- single -->
                <article class="p-single">

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

                </article>
                <!-- single -->

                <!-- pickup -->
                <section class="p-pickup l-pickup">
                    <h2 class="p-pickup__title">おすすめの記事</h2>
                    <ul class="p-pickup__items">

                        <!-- タグ判定 -->
                        <!-- https://cotodama.co/wordpress_cat_tag_list/ -->
                        <?php
                        $tag_posts = get_posts(array(
                            'post_type' => 'post', // 投稿タイプ
                            'tag'    => 'pickup', // タグをスラッグで指定する場合
                            'posts_per_page' => 3, // 表示件数
                        ));
                        global $post;
                        if ($tag_posts) : foreach ($tag_posts as $post) : setup_postdata($post); ?>

                                <li class="p-pickup__item">
                                    <?php if (has_post_thumbnail()) : ?>
                                        <figure class="p-pickup__img">
                                            <?php the_post_thumbnail(); ?>
                                        </figure>
                                    <?php else : ?>
                                        <figure class="p-pickup__img">
                                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/common/no-img.png" alt="" />
                                        </figure>
                                    <?php endif; ?>
                                    <div class="p-pickup__body">
                                        <div class="p-pickup__category">
                                            <!-- カテゴリー -->
                                            <?php
                                            $category = get_the_category();
                                            if ($category[0]) {
                                                echo '<a href="' . get_category_link($category[0]->term_id) . '">' . $category[0]->name . '</a>';
                                            }
                                            ?>
                                        </div>
                                        <time datetime="<?php the_time('c'); ?>" class="p-pickup__date"><?php the_time('Y-m-d'); ?></time>
                                        <h3 class="p-pickup__sub-title">
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
                                    </div>
                                </li>

                        <?php endforeach;
                        endif;
                        wp_reset_postdata(); ?>

                    </ul>
                </section>
                <!-- ../pickup -->

            </div>
            <!-- main-contents -->

            <!-- sidebar -->
            <?php get_sidebar(); ?>
            <!-- ../sidebar -->

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