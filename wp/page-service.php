<?php
// ヘッダーを取得
get_header();
?>
<main role="main" class="l-common l-under">
    <div class="l-under-head">
        <div class="m-inner">
            <?php breadcrumb();?>
            <h2 class="-under">
                <span class="en">SERVICE</span>
                <span class="jp">サービス</span>
            </h2>
        </div>
    </div>
    <section class="l-under-service m-inner">
        <div class="m-label02"><p>みらテラが提供するサービス一覧です</p></div>
        <h3 class="m-txt-31">鍼灸サービス</h3>
        <div class="l-under-service__column">
            <div class="head"><span>法人向け</span><span>訪問鍼灸</span></div>
            <div class="body">
                <p><span>オフィスに訪問し、定期的な鍼灸施術を提供いたします。</span><span>鍼灸は目・肩・腰の不調の予防、改善に効果が期待できます。</span><span>会話を交えながらの鍼灸施術を通じて、心身ともにリフレッシュでき、モチベーション向上やオフィス活性化を図ることが可能です。</span><span>また、施術に加え健康相談も行っており、「かかりつけ鍼灸師」として大切な社員様の健康維持の継続を目指しています。</span></p>
                <div class="btn"><a class="m-btn-blue" href="<?php echo home_url();?>/service/business/">詳細を見る</a></div>
            </div>
        </div>
        <div class="l-under-service__column">
            <div class="head"><span>福利厚生導入</span></div>
            <div class="body">
                <p><span>より良い職場環境が、社員の定着、仕事への意欲向上など、安定経営につながります。</span><span>国家資格を有する鍼灸師が行う訪問鍼灸施術は、福利厚生として導入することができます。</span><span>社員の健康を福利厚生でサポートする、社内の活性化や生産性向上とともに、生活の質向上や医療費削減などの社会貢献にもつながります。</span><span>ぜひ、世の中の流れに合った福利厚生の仕組みとして、福岡みらいテラス鍼灸をご利用ください。</span></p>
                <div class="btn"><a class="m-btn-blue" href="<?php echo home_url();?>/service/welfare/">詳細を見る</a></div>
            </div>
        </div>
        <div class="l-under-service__column">
            <div class="head"><span>店舗型鍼灸院</span><span>アットホーム</span><span>はりきゅうひの</span></div>
            <div class="body">
                <p><span>JR古賀駅近くの鍼灸院です。</span><span>「みらいの健康を創る」をコンセプトに、「予防」に特化した施術や、子ども向けの「小児はり施術」をしています。</span><span>優しい鍼、心地の良いお灸、そしてコミュニケーションを大切にする施術をモットーに、様々な不調やお悩みに寄り添って鍼灸施術をしております。</span><span>来た時よりも少しでも笑顔に、そして、ほっと安心できるような鍼灸院を目指しています。</span></p>
                <div class="btn"><a class="m-btn-blue" href="<?php echo home_url();?>/service/customer/">詳細を見る</a></div>
            </div>
        </div>
    </section>

</main>
<?php 
get_footer(); 
?>