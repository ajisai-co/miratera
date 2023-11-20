<?php
// ヘッダーを取得
get_header();
?>
<main role="main" class="l-common l-summary -contact">
    <?php breadcrumb();?>
    <section class="p-contact">
        <div class="p-contact__sub">
            <h2 class="p-contact__head">ご予約に関するお問い合わせ</h2>
            <p class="p-contact__lead">ご予約は<?php /*お電話、または*/ ?>メールフォームよりお願いいたします。</p>
            <div class="p-contact__box">
                <p class="p-contact__box__head">お問い合わせ・ご相談できること</p>
                <ul>
                    <li>・ご予約をとりたい</li>
                    <li>・ご予約空き状況を確認したい</li>
                    <li>・症状が鍼灸適応か知りたい</li>
                    <li>・詳しい料金体系を知りたい</li>
                </ul>
            </div>
            <?php /*
            <div class="p-contact__tel">
                <p class="head">お電話からも承っておりますので<br class="u-device-sp">ご連絡ください</p>
                <div class="tel">
                    <p class="tel__head">TEL</p>
                    <div class="tel__body">
                        <a href="tel:092-942-5521">092-942-5521</a>
                        <p>火曜・日曜定休 9:00〜19:00</p>
                    </div>
                </div>
            </div>
            */ ?>
        </div>
        <div class="p-contact__main p-contact-form">
            <?php
            // コンテンツを取得
            if(have_posts()): while(have_posts()): the_post();
            the_content();
            endwhile; endif; wp_reset_postdata();
            ?>
        </div>
    </section>
</main>
<?php
// フッターを取得
get_footer(); 
?>