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

    <!-- thanks -->
    <div class="p-thanks l-thanks js-scroll-trigger is-show">
        <div class="p-thanks__inner l-inner">
            <p class="p-thanks__text">お問い合わせいただきありがとうございます<br />内容を確認した後、担当者よりご連絡いたします</p>
            <a href="<?php echo esc_url(home_url('/')); ?>" class="p-thanks__link">ホームへ戻る</a>
        </div>
    </div>
    <!-- ../thanks -->

</main>
<!-- ../main -->

<?php get_footer(); ?>