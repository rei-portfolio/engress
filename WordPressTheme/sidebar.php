<aside class="l-side-contents">

    <!-- relate -->
    <div class="p-relate l-relate">
        <div class="p-relate__title">
            <div class="c-side-title">関連記事</div>
        </div>
        <ul class="p-relate__items">

            <?php
            // 同じカテゴリから記事を3件呼び出す
            $categories = get_the_category($post->ID);

            $category_ID = array();

            foreach ($categories as $category) :
                array_push($category_ID, $category->cat_ID);
            endforeach;

            $args = array(
                // 今読んでいる記事を除く
                'post__not_in' => array($post->ID),
                'posts_per_page' => 3,
                'category__in' => $category_ID,
                // ランダムに記事を選ぶ
                'orderby' => 'rand',
            );
            $query = new WP_Query($args);
            if ($query->have_posts()) :
                while ($query->have_posts()) :
                    $query->the_post();
            ?>

                    <li class="p-relate__item">
                        <a href="<?php the_permalink(); ?>">
                            <?php if (has_post_thumbnail()) : ?>
                                <figure class="p-relate__img">
                                    <?php the_post_thumbnail(); ?>
                                </figure>
                            <?php else : ?>
                                <figure class="p-relate__img">
                                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/common/no-img.png" alt="" />
                                </figure>
                            <?php endif; ?>
                            <h3 class="p-relate__sub-title">
                                <!-- 文字数制限 -->
                                <?php show_limit_title(40); ?>
                            </h3>
                        </a>
                    </li>

            <?php endwhile;
            endif; ?>
            <?php wp_reset_postdata(); ?>

        </ul>
    </div>
    <!-- ../relate -->

    <!-- category -->
    <div class="p-category l-category">
        <div class="p-category__title">
            <div class="c-side-title">カテゴリー</div>
        </div>
        <ul class="p-category__items">

            <!-- カテゴリー一覧 -->
            <?php
            $categories = get_categories();
            foreach ($categories as $category) : ?>

                <li class="p-category__item">
                    <h3 class="p-category__sub-title">
                        <!-- カテゴリー -->
                        <a href="<?php echo get_category_link($category->term_id); ?>"><?php echo $category->name; ?></a>
                    </h3>
                </li>

            <?php endforeach; ?>

        </ul>
    </div>
    <!-- ../category -->

</aside>