<?php get_header(); ?>

<main>

    <!-- sub-mv -->
    <div class="p-sub-mv">
        <figure class="p-sub-mv__img">
            <img src="<?php echo get_template_directory_uri() ?>/assets/img/common/contact.jpg" alt="お問い合わせ・資料請求">
        </figure>
        <h2 class="p-sub-mv__title c-section-title c-section-title--sub">お問い合わせ・資料請求</h2>
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
    <section class="l-sub-contact p-sub-contact">
        <div class="p-sub-contact__inner l-inner">
            <div class="p-sub-contact__textBox">
                <p class="p-sub-contact__text">
                    弊社に興味を持って頂きありがとうございます。商談やサービスのご利用、資料請求について下記のフォームよりお問い合わせください。
            </div>
            <div class="p-sub-contact__contents">
                <div class="p-sub-contact__content">
                    <div class="p-sub-contact__head">
                        <p class="p-sub-contact__title">お問い合わせ種別</p>
                        <span class="p-sub-contact__required">必須</span>
                    </div>
                    <div class="p-sub-contact__item p-contact-radio">
                        <label>
                            <input class="p-contact-radio__item" type="radio" name="radio-name"><span>制作依頼</span>
                        </label>
                        <label>
                            <input class="p-contact-radio__item" type="radio" name="radio-name"><span>採用</span>
                        </label>
                        <label>
                            <input class="p-contact-radio__item" type="radio" name="radio-name"><span>IR</span>
                        </label>
                        <label>
                            <input class="p-contact-radio__item" type="radio" name="radio-name"><span>その他</span>
                        </label>
                    </div>
                </div>
                <div class="p-sub-contact__content">
                    <div class="p-sub-contact__head">
                        <p class="p-sub-contact__title">会社名・団体名</p>
                    </div>
                    <div class="p-sub-contact__item p-contact-text">
                        <input class="p-contact-text__text" type="text">
                    </div>
                </div>
                <div class="p-sub-contact__content">
                    <div class="p-sub-contact__head">
                        <p class="p-sub-contact__title">お名前</p>
                        <span class="p-sub-contact__required">必須</span>
                    </div>
                    <div class="p-sub-contact__item p-contact-text">
                        <input class="p-contact-text__text" type="text">
                    </div>
                </div>
                <div class="p-sub-contact__content">
                    <div class="p-sub-contact__head">
                        <p class="p-sub-contact__title">メールアドレス</p>
                        <span class="p-sub-contact__required">必須</span>
                    </div>
                    <div class="p-sub-contact__item p-contact-text">
                        <input class="p-contact-text__text" type="email">
                    </div>
                </div>
                <div class="p-sub-contact__content">
                    <div class="p-sub-contact__head">
                        <p class="p-sub-contact__title">電話番号</p>
                    </div>
                    <div class="p-sub-contact__item p-contact-text">
                        <input class="p-contact-text__text" type="tel">
                    </div>
                </div>
                <div class="p-sub-contact__content">
                    <div class="p-sub-contact__head">
                        <p class="p-sub-contact__title">お問い合わせ内容</p>
                        <span class="p-sub-contact__required">必須</span>
                    </div>
                    <div class="p-sub-contact__item p-contact-textarea">
                        <textarea class="p-contact-textarea__text"></textarea>
                    </div>
                </div>
                <div class="p-sub-contact__content">
                    <div class="p-sub-contact__head">
                        <p class="p-sub-contact__title">PRIVACY POLICY</p>
                    </div>

                </div>
                <div class="p-sub-contact__content p-sub-contact__content--center p-contact-check">
                    <label>
                        <input class="p-contact-check__item" type="checkbox" name="check-name"><span>個人情報の取り扱いについて同意のうえ送信します。</span>
                    </label>
                </div>
                <div class="p-sub-contact__content p-sub-contact__content--button p-contact-button">
                    <input class="p-contact-button__submit" type="submit" value="送信">
                </div>
            </div>
        </div>
    </section>
    <!-- contact -->
</main>

<?php get_footer(); ?>