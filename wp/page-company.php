<?php
// ヘッダーを取得
get_header();
?>
<main role="main" class="l-common l-summary">
    <?php breadcrumb();?>
    <h2>会社情報</h2>
    <section class="l-summary-company">
        <h3>会社概要</h3>
        <div class="l-summary-company__column">
            <div class="head">商号</div>
            <div class="body">福岡みらいテラス鍼灸</div>
        </div>
        <div class="l-summary-company__column">
            <div class="head">代表</div>
            <div class="body">院長　日野 智之</div>
        </div>
        <div class="l-summary-company__column">
            <div class="head">事業内容</div>
            <div class="body">
                <p>「企業向け訪問鍼灸」<br>オフィスに訪問し、定期的な鍼灸施術を提供</p>
                <p>「店舗型鍼灸院：アットホームはりきゅうひの」<br>個人様向けに、店舗型鍼灸院にて鍼灸施術を提供</p>
            </div>
        </div>
        <div class="l-summary-company__column">
            <div class="head">設立</div>
            <div class="body">2023年11月</div>
        </div>
        <div class="l-summary-company__column">
            <div class="head">所在地</div>
            <div class="body">〒81103101 福岡県古賀市天神1-1-20-102</div>
        </div>
        <?php /*
        <div class="l-summary-company__column">
            <div class="head">TEL</div>
            <div class="body">092-942-5521</div>
        </div>
        */ ?>
        <div class="l-summary-company__column">
            <div class="head">E-mail</div>
            <div class="body">athomeharikyuhino@gmail.com</div>
        </div>
    </section>
    <section class="l-summary-company">
        <h2>ミッション・ビジョン</h2>
        <h3>ミッション（社会的使命）</h3>
        <div class="company-grad-box01">笑顔の人づくり元気な街づくり</div>
        <p>働く人、経営者、家族・・・すべての人に健康を通して笑顔を提供したいと考えています。笑顔であふれた街には活気があり、それは街の経済面にも活力をもたらしてくれます。すべての人が笑顔になる価値を提供し、元気な街につなげていくことが、私たち福岡みらいテラス鍼灸のミッションです。</p>
        <h3 class="-mt">ビジョン（企業理念）</h3>
        <div class="company-grad-box01">鍼灸のちからで働く人の健康を支え企業の成長を支える</div>
        <p>人生の大半を職場で過ごしている人が大多数です。そのような人々の大切な時間を、悔いなく過ごしてもらいたい。<br>鍼灸施術を通して、企業様の成長に不可欠である働く人の健康を第一に支え、共に歩んでいきたいと考えています。</p>
    </section>
    <section class="l-summary-company__intro">
        <div class="sub"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/under/ph_company.webp" alt="" width="" height="" loading="lazy"></div>
        <div class="main">
            <p class="lead">福岡みらいテラス鍼灸 代表</p>
            <h3><span class="jp">日野 智之</span><span class="en">Hino Satoshi</span></h3>
            <p class="m-txt-16"><span>大学卒業後、通販会社に勤務。</span><span>父の病気・介護をきっかけに、退職し鍼灸の道を志す。</span><span>2015年、福岡県古賀市に鍼灸院「アットホームはりきゅうひの」開業。</span><span>「ミライの健康を創る」、「要介護になっても楽しく暮らせる街を創る」を理念に日々の臨床に携わる。</span><span>鍼灸院開業しながら、障害福祉デイサービスに機能訓練指導員として出向。</span></p>
            <div class="m-company-grad-box02">
                <div class="m-txt-16">所属</div>
                <ul>
                    <li class="m-txt-14">(公社)日本鍼灸師会　地域ケア推進委員</li>
                    <li class="m-txt-14">(公社)福岡県鍼灸マッサージ師会　理事　広報普及部長</li>
                    <li class="m-txt-14">宗像糟屋鍼灸マッサージ師会　副会長　学術部長</li>
                </ul>
            </div>
            <?php /*
            <div class="btns">
                <a class="m-btn-blue" href="" target="_blank">X（旧Twitter）</a>
                <a class="m-btn-blue" href="" target="_blank">Facebook</a>
            </div>
            */?>
        </div>
    </section>
</main>
<?php
// フッターを取得
get_footer(); 
?>