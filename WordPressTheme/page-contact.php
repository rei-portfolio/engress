<?php get_header(); ?>

<main>

    <!-- sub-mv -->
    <div class="p-sub-mv">
        <figure class="p-sub-mv__img">
            <img src="<?php echo get_template_directory_uri() ?>/assets/img/common/contact.jpg" alt="お問い合わせ・資料請求">
        </figure>
        <h1 class="p-sub-mv__title">お問い合わせ・<br class="u-hidden-tab" />資料請求</h1>
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

    <!-- contact -->
    <div class="l-sub-contact p-sub-contact">
        <div class="p-sub-contact__inner l-inner">
            <div class="p-sub-contact__textBox">
                <p class="p-sub-contact__text">
                    弊社に興味を持って頂きありがとうございます。商談やサービスのご利用、資料請求について下記のフォームよりお問い合わせください。
                </p>
            </div>

            <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>
                    <!-- 自動挿入されるpやbrタグを削除 -->
                    <?php remove_filter('the_content', 'wpautop'); ?>
                    
                    <?php the_content(); ?>
                <?php endwhile; ?>
            <?php endif; ?>

        </div>
    </div>
    <!-- contact -->
</main>

<?php get_footer(); ?>