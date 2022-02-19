<footer class="p-footer <?php if (is_page(19)) {
                            echo 'l-contact-footer';
                        } else if (is_page(132) || is_404()) {
                            echo 'l-position-footer';
                        } else {
                            echo 'l-footer';
                        } ?>">
    <div class="p-footer__bgc">
        <div class="p-footer__inner l-inner">
            <ul class="p-footer__items">
                <div class="p-footer__list">
                    <li class="p-footer__item"><a href="">ホーム</a></li>
                    <li class="p-footer__item"><a href="">お知らせ</a></li>
                </div>
                <div class="p-footer__list">
                    <li class="p-footer__item"><a href="">ブログ</a></li>
                    <li class="p-footer__item"><a href="">コース・料金</a></li>
                </div>
            </ul>

            <div class="p-footer__block">
                <div class="p-footer__logo c-logo">
                    <a href="<?php echo esc_url(home_url('/')); ?>" class="c-logo__link">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/img/common/logo.svg" alt="エングレス" />
                    </a>
                </div>
                <div class="p-footer__info">
                    <div class="p-footer__tell c-tell">
                        <div class="c-tell__img">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/common/white-tell.png" alt="">
                        </div>
                        <p class="c-tell__number">0123-456-7890</p>
                    </div>
                    <p class="p-footer__hour">平日08:00〜20:00</p>
                </div>
            </div>
        </div>
    </div>
    <div class="p-footer__copy c-copy l-inner">&copy; 2020 Engress.</div>

</footer>
<?php wp_footer(); ?>
</body>

</html>