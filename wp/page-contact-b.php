<?php
// ヘッダーを取得
get_header();
?>
<main role="main" class="l-common l-summary -contact">
    <?php breadcrumb();?>
    <section class="p-contact">
        <div class="p-contact__sub">
            <h2 class="p-contact__head"><span>訪問診療・福利厚生導入に関する</span><span>お問い合わせ・ご相談</span></h2>
            <p class="p-contact__lead">訪問鍼灸や、福利厚生の導入に興味を持っていただきありがとうございます。<br>ご利用についてはフォームよりお問い合わせください。</p>
            <div class="p-contact__box">
                <p class="p-contact__box__head">お問い合わせ・ご相談できること</p>
                <ul>
                    <li>・訪問診療について詳しく知りたい</li>
                    <li>・詳しい料金体系を知りたい</li>
                    <li>・一度対面してお話ししたい</li>
                    <li>・福利厚生の導入について相談したい</li>
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