<?php get_header(); ?>

<main>

    <!-- sub-mv -->
    <div class="p-sub-mv">
        <figure class="p-sub-mv__img">
            <img src="<?php echo get_template_directory_uri() ?>/assets/img/common/contact.jpg" alt="お問い合わせ・資料請求">
        </figure>
        <h2 class="p-sub-mv__title">お問い合わせ・<br class="u-hidden-tab" />資料請求</h2>
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
                    <label class="p-sub-contact__title">会社名</label>
                    <div class="p-sub-contact__item p-contact-text">
                        <input class="p-contact-text__text" type="text" placeholder="Engress">
                    </div>
                </div>
                <div class="p-sub-contact__content">
                    <p class="p-sub-contact__title">氏名</p>
                    <div class="p-sub-contact__item p-contact-text">
                        <input class="p-contact-text__text" type="text" placeholder="田中　太郎">
                    </div>
                </div>
                <div class="p-sub-contact__content">
                    <p class="p-sub-contact__title">メールアドレス</p>
                    <div class="p-sub-contact__item p-contact-text">
                        <input class="p-contact-text__text" type="email" placeholder="example@example.com">
                    </div>
                </div>
                <div class="p-sub-contact__content">
                    <p class="p-sub-contact__title">電話番号</p>
                    <div class="p-sub-contact__item p-contact-text">
                        <input class="p-contact-text__text" type="tel" placeholder="01-2345-6789">
                    </div>
                </div>

                <div class="p-sub-contact__content p-sub-contact__content--radio">
                    <div class="p-sub-contact__head">
                        <p class="p-sub-contact__title">
                            お問い合わせの種類を選択してください
                            <span class="p-sub-contact__bold">
                                （資料請求の方は資料請求を選択ください）
                            </span>
                        </p>
                    </div>
                    <div class="p-sub-contact__item p-contact-radio">
                        <label>
                            <input class="p-contact-radio__item" type="radio" name="radio-name"><span>商談のご相談</span>
                        </label>
                        <label>
                            <input class="p-contact-radio__item" type="radio" name="radio-name"><span>サービスに関するお問い合わせ</span>
                        </label>
                        <label>
                            <input class="p-contact-radio__item" type="radio" name="radio-name"><span>サービスに関するお問い合わせ</span>
                        </label>
                        <label>
                            <input class="p-contact-radio__item" type="radio" name="radio-name"><span>その他</span>
                        </label>
                    </div>
                </div>

                <div class="p-sub-contact__content p-sub-contact__content--textarea">
                    <p class="p-sub-contact__title">お問い合わせ内容</p>
                    <div class="p-sub-contact__item p-contact-textarea">
                        <textarea class="p-contact-textarea__text" placeholder="入力して下さい"></textarea>
                    </div>
                </div>


                <div class="p-sub-contact__content p-sub-contact__content--check p-contact-check">
                    <div class="p-sub-contact__head">
                        <a href="" class="p-sub-contact__privacy">プライバシーポリシー</a>
                        に同意の上、送信ください。
                    </div>
                    <div class="p-sub-contact__item p-sub-contact__item--check p-contact-check">
                        <label>
                            <input class="p-contact-check__item" type="checkbox" name="check-name"><span>プライバシーポリシーに同意する</span>
                        </label>
                    </div>
                </div>
                <div class="p-sub-contact__content p-sub-contact__content--button p-contact-button">
                    <input class="p-contact-button__submit" type="submit" value="送信する">
                </div>
            </div>
        </div>
    </section>
    <!-- contact -->
</main>

<?php get_footer(); ?>