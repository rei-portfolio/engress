<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="format-detection" content="telephone=no">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <!-- index -->
  <meta name="robots" content="noindex" />
  <link rel="stylesheet" href="https://unpkg.com/scroll-hint@latest/css/scroll-hint.css">
  <script src="https://unpkg.com/scroll-hint@latest/js/scroll-hint.min.js"></script>
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>

  <!-- header -->
  <header class="l-header p-header">

    <div class="p-header__inner">
      <div class="p-header__left">
        <!-- トップと下層でタグ変更 -->
        <?php if (is_front_page()) {
          echo '<h1 class="p-header__logo c-logo">';
        } else {
          echo '<div class="p-header__logo c-logo">';
        } ?>
        <a href="<?php echo esc_url(home_url('/')); ?>" class="c-logo__link">
          <img src="<?php echo get_template_directory_uri() ?>/assets/img/common/logo.svg" alt="エングレス" />
        </a>
        <?php if (is_front_page()) {
          echo '</h1>';
        } else {
          echo '</div>';
        } ?>

        <nav class="p-header-pc-nav p-pc-nav">
          <ul class="p-pc-nav__items">
            <li class="p-pc-nav__item"><a href="<?php echo esc_url(home_url('/')) ?>">ホーム</a></li>
            <!-- /.p-pc-nav__item -->
            <li class="p-pc-nav__item"><a href="<?php echo esc_url(home_url('/news/')) ?>">お知らせ</a></li>
            <!-- /.p-pc-nav__item -->
            <li class="p-pc-nav__item"><a href="<?php echo esc_url(home_url('/blog/')) ?>">ブログ</a></li>
            <!-- /.p-pc-nav__item -->
            <li class="p-pc-nav__item"><a href="<?php echo esc_url(home_url('/price/')); ?>">コース・料金</a></li>
            <!-- /.p-pc-nav__item -->
          </ul>
          <!-- /.p-pc-nav__items -->
        </nav>
        <!-- /.p-pc-nav -->
      </div>

      <div class="p-header__right">
        <div class="p-header__info">
          <p class="p-header__hour">平日08:00〜20:00</p>
          <div class="p-header__tell c-tell">
            <div class="c-tell__img">
              <img src="<?php echo get_template_directory_uri() ?>/assets/img/common/black-tell.png" alt="">
            </div>
            <p class="c-tell__number">0123-456-7890</p>
          </div>
        </div>

        <div class="p-header__btn">
          <a href="<?php echo esc_url(home_url('/contact/')) ?>" class="c-small-btn c-small-btn--document">資料請求</a>
        </div>
        <div class="p-header__btn">
          <a href="<?php echo esc_url(home_url('/contact/')) ?>" class="c-small-btn c-small-btn--contact">お問い合わせ</a>
        </div>
      </div>


      <button type="button" id="js-hamburger" class="c-hamburger p-header__hamburger" aria-controls="js-sp-nav" aria-expanded="false" aria-label="メニューを開閉する">
        <span class="c-hamburger__line"></span>
      </button>

      <!-- sp-nav -->
      <nav class="p-header__sp-nav p-sp-nav" id="js-sp-nav" aria-hidden="true">
        <ul class="p-sp-nav__items">
          <li class="p-sp-nav__item"><a href="<?php echo esc_url(home_url('/')); ?>">ホーム</a></li>
          <!-- /.p-sp-nav__item -->
          <li class="p-sp-nav__item"><a href="<?php echo esc_url(home_url('/news/')) ?>">お知らせ</a></li>
          <!-- /.p-sp-nav__item -->
          <li class="p-sp-nav__item"><a href="<?php echo esc_url(home_url('/blog/')) ?>">ブログ</a></li>
          <!-- /.p-sp-nav__item -->
          <li class="p-sp-nav__item"><a href="<?php echo esc_url(home_url('/price/')); ?>">コース・料金</a></li>
          <!-- /.p-sp-nav__item -->
        </ul>
      </nav>
      <!-- //.sp-nav -->
    </div>

    <!-- /.p-header__inner -->
  </header>
  <!-- ../header -->