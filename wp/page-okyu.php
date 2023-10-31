<?php
// ヘッダーを取得
get_header();
?>
<main role="main" class="l-common l-under">
    <div class="l-under-head">
        <div class="m-inner">
            <?php breadcrumb();?>
            <h2 class="-under">
                <span class="en">OKYU</span>
                <span class="jp">お灸について</span>
            </h2>
        </div>
    </div>
    <section class="l-under-intro m-inner">
        <div class="l-under-intro__sub -pc"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/under/ph_okyu01.webp" alt=""></div>
        <div class="l-under-intro__main -okyu">
            <h3>心地の良い温かさのお灸</h3>
            <div class="l-under-intro__sub -sp"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/under/ph_okyu01.webp" alt=""></div>
            <p>お灸はヨモギの葉を乾燥させて精製した「艾（もぐさ）」を使います。これを米粒やその半分くらいの大きさにして皮膚上で燃焼させ、ツボに温熱刺激を与える施術方法です。</p>
            <p>昔は「直接灸」といって艾を皮膚上に直接のせて焼ききっていたので、「熱い」「やけどする」「跡が残る」というイメージがあるかと思いますが、現在はやけどさせないように、「間接灸」といって皮膚上に専用のシールを貼りその上にお灸をしたり、台座の上に艾をのせて施す「台座灸」などを使用して身体への負担が軽くなるよう、心地良い温かさのお灸をしています。</p>
            <p>お身体の状態に応じ、熱さの程度をお聞きしながら一人ひとりに合わせた温感を調節して施していきます。</p>
        </div>
    </section>
    <section class="l-under-section m-inner">
        <div class="m-treatment">
            <h3 class="m-treatment__head">お灸治療での対応症状一覧</h3>
            <p class="m-treatment__lead">お灸施術は身体に温熱刺激を与え、それにより起こる生体反応を利用して症状の緩和や予防に働きます。</p>
            <ul class="m-treatment__list">
                <li>頭痛</li>
                <li>肩痛</li>
                <li>腰痛</li>
                <li>膝痛</li>
                <li>筋・筋膜緊張の緩和</li>
                <li>関節可動域の維持・増大</li>
                <li>自律神経の調整</li>
                <li>ホルモン機能の調整</li>
                <li>免疫力・自然治癒力の向上</li>
                <li>冷え性・むくみ</li>
                <li>婦人科疾患</li>
                <li>不妊症、逆子</li>
            </ul>
        </div>
        <div class="m-box-grad01">
            <h3 class="m-box-grad01__head">お灸のやけどについて</h3>
            <p class="m-box-grad01__txt"><span>当院のお灸はやけどリスクの低い「間接灸」と「台座灸」の治療方法を採用しています。</span><span>その日の体調やお肌の状態によってやけどをしてしまう可能性がありますが、体調や肌の状態に合わせて注意深く施術します。熱さを感じた場合は、遠慮せずにお知らせいただくようお願いしております。</span><span>私たちは心地よい温かさのお灸を提供し、安心して施術を受けていただけます。</span></p>
        </div>
        <div class="m-column01">
            <h3 class="m-column01__head">お灸の種類について</h3>
            <p class="m-column01__txt"><span>市販されているお灸もありますが、福岡みらいテラス鍼灸では症状や治療箇所に合わせてお灸用のモグサを変えています。</span><span>お灸の施術に使うモグサは以下のような種類があります。</span></p>
            <ul class="m-list01">
                <li>
                        <?php /* <div class="m-list01__thumb"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/under/ph_okyu02.webp" alt=""></div> */ ?>
                        <h4 class="m-list01__head">知熱（ちねつ）灸</h4>
                        <p class="m-list01__txt"><span>米粒大やその半分くらいのもぐさを皮膚の上にのせ、線香で火をつける施術方法で、8割程燃えたところで取り除きます。</span><span>一瞬「チクッ」とする感覚がありますが、皮膚上に専用のシールを貼りその上にお灸をするので、めったにやけどすることはありません。</span><span>ツボに温熱刺激を与えるのですが、体表の余分な熱を発散させ、鎮痛・血行促進の作用があります。また自律神経系や内臓機能にも作用します。</span></p>
                </li>
                <li>
                        <?php /* <div class="m-list01__thumb"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/under/ph_okyu03.webp" alt=""></div> */ ?>
                        <h4 class="m-list01__head">台座灸</h4>
                        <p class="m-list01__txt"><span>台座の上に筒状にしたもぐさをのせて施す方法です。</span><span>皮膚ともぐさの間に少し隙間があるので、マイルドな温かさのお灸です。</span><span>「せんねん灸」とよばれる台座灸は市販もされており、簡単に使えるのでセルフお灸としても人気です。</span><span>血行促進、冷え性に効果が期待できます。</span></p>
                </li>
                <li>
                        <?php /* <div class="m-list01__thumb"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/under/ph_okyu04.webp" alt=""></div> */ ?>
                        <h4 class="m-list01__head">綿花灸</h4>
                        <p class="m-list01__txt"><span>人肌ほどの温かさの綿花の上にもぐさをのせ燃焼させる施術方法です。</span><span>お灸をしている箇所を専用の温度計で測り、皮膚温が40～42度になるまで温めますので、ほんわかとした心地の良いお灸です。</span><span>血行が促進され、疲労回復・鎮痛・筋肉のこりの解消に効果的です。</span></p>
                </li>
                <li>
                        <?php /* <div class="m-list01__thumb"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/under/ph_okyu05.webp" alt=""></div> */ ?>
                        <h4 class="m-list01__head">灸頭鍼（きゅうとうしん）</h4>
                        <p class="m-list01__txt"><span>鍼の柄の部分にもぐさを取り付けて燃焼させる、温熱療法です。</span><span>ふんわりとしたマイルドな温かさで、鍼とお灸の作用を兼ね揃えた効果的な施術方法です。</span><span>血行促進・冷え性・筋肉のこりの解消に効果的です。</span></p>
                </li>
            </ul>
        </div>
        <?php /*
        <div class="m-column01">
            <h3 class="m-column01__head">お灸治療について</h3>
            <p class="m-column01__txt">お灸治療のやり方・心配事・メンタルヘルス</p>
        </div>
        */?>
        <div class="m-column01">
            <h3 class="m-column01__head">お灸治療の流れ</h3>
            <ul class="m-list02">
                <li class="m-list02__item">
                    <div class="icon"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/under/icon_flow04.svg" alt=""></div>
                    <h4 class="m-list02__head">お灸の説明</h4>
                    <p class="m-list02__txt">お灸をする前に、症状の確認とそれに適切なお灸の説明をします。</p>
                </li>
                <li class="m-list02__item">
                    <div class="icon"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/under/icon_flow05.svg" alt=""></div>
                    <h4 class="m-list02__head">様々なお灸を使用</h4>
                    <p class="m-list02__txt">症状に合わせてモグサの種類を変えて施します。</p>
                </li>
                <li class="m-list02__item">
                    <div class="icon"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/under/icon_flow06.svg" alt=""></div>
                    <h4 class="m-list02__head">やけどリスクの低いお灸</h4>
                    <p class="m-list02__txt">皮膚上に専用のシールを貼ったり、綿花を置いたりして、やけどの無いお灸を提供します。</p>
                </li>
                <li class="m-list02__item">
                    <div class="icon"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/under/icon_flow07.svg" alt=""></div>
                    <h4 class="m-list02__head">心地よい温かさ</h4>
                    <p class="m-list02__txt">施灸箇所の温度管理を行い、熱さを確認しながら施しますので、心地よい温かさのお灸です。</p>
                </li>
            </ul>
        </div>
        <div class="m-column01 -modifier">
            <h3 class="m-column01__head"><span class="sp">お灸治療時に患者様にご用意・</span><span class="sp">ご配慮いただきたいもの</span></h3>
            <ul class="m-list01">
                <li>
                    <?php /* <div class="m-list01__thumb"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/under/ph_okyu10.webp" alt=""></div> */ ?>
                    <h4 class="m-list01__head">肩、腰、膝を出しやすい服</h4>
                    <p class="m-list01__txt">施術着もありますが、ご自身でお持ちいただく場合は肩や腰、膝が出しやすいゆったりとした服装が望ましいです。</p>
                </li>
                <li>
                    <?php /* <div class="m-list01__thumb"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/under/ph_okyu10.webp" alt=""></div> */ ?>
                    <h4 class="m-list01__head">前後に激しい運動はNG</h4>
                    <p class="m-list01__txt">施術でお身体が活性化されますので、施術前後の激しい運動は控えていただいております。</p>
                </li>
                <li>
                    <?php /* <div class="m-list01__thumb"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/under/ph_okyu10.webp" alt=""></div> */ ?>
                    <h4 class="m-list01__head">施術後の入浴</h4>
                    <p class="m-list01__txt">施術後から一時間以上あけての入浴は問題ありません。<br>施術した日は、長時間の入浴や岩盤浴は極力控えてください。</p>
                </li>
            </ul>
        </div>
    </section>
    <?php 
    $args = new WP_Query(
        array(
            'post_type' => 'faq',
            'posts_per_page' => '-1',
            'tax_query' => array(
                array(
                    'taxonomy' => 'faq_cat',
                    'field' => 'slug',
                    'terms' => 'okyu',
                )
            ),
        )
    );
    if ( $args->have_posts() ) : 
    ?>
    <section class="m-box-grad02 m-inner">
        <div class="m-label01"><p>よくあるご質問</p></div>
        <h3>よくご質問いただく内容をご紹介します</h3>
        <div class="m-faq">
            <ol class="m-faq__list">
                <?php
                    while ( $args->have_posts() ) : $args->the_post();
                ?>
                <li>
                    <h4><?php the_title(); ?></h4>
                    <p><?php the_content(); ?></p>
                </li>
                <?php endwhile;  ?>
            </ol>
        </div>
    </section>
    <?php endif; wp_reset_postdata();?>
    <div class="m-link m-inner">
        <div class="m-link__head">
            <h3>鍼治療を提供中<br class="u-device-sp">のサービス<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="387" height="36" viewBox="0 0 387 36"><defs><clipPath><rect width="387" height="36" transform="translate(458 3356)" fill="#fff" stroke="#707070" stroke-width="1"/></clipPath></defs><g transform="translate(-458 -3356)" clip-path="url(#clip-path)"><path d="M-5050.5,60.943l3.358-5.928A2,2,0,0,1-5045.4,54H-4899a25.835,25.835,0,0,0,10.12-2.042,25.917,25.917,0,0,0,8.266-5.573,25.916,25.916,0,0,0,5.573-8.265A25.834,25.834,0,0,0-4873,28a25.83,25.83,0,0,0-2.042-10.119,25.916,25.916,0,0,0-5.573-8.265,25.921,25.921,0,0,0-8.265-5.573A25.839,25.839,0,0,0-4899,2h-304a25.836,25.836,0,0,0-10.12,2.042,25.917,25.917,0,0,0-8.266,5.573,25.922,25.922,0,0,0-5.573,8.265A25.83,25.83,0,0,0-5229,28a25.834,25.834,0,0,0,2.042,10.12,25.923,25.923,0,0,0,5.573,8.265,25.917,25.917,0,0,0,8.266,5.573A25.836,25.836,0,0,0-5203,54h147.4a2,2,0,0,1,1.74,1.014l3.36,5.929m0,4.057-5.1-9H-5203a28,28,0,0,1-28-28,28,28,0,0,1,28-28h304a28,28,0,0,1,28,28,28,28,0,0,1-28,28h-146.4Z" transform="translate(5702 3324)" fill="#037cb2"/></g></svg></h3>
        </div>
        <ul class="m-link__list">
            <li><a href="<?php echo home_url();?>/service/business/">
                <span class="jp">法人向け訪問診療</span>
                <span class="en">for BUSINESS</span>
            </a></li>
            <li><a href="<?php echo home_url();?>/service/welfare/">
                <span class="jp">福利厚生導入支援</span>
                <span class="en">WELFARE</span>
            </a></li>
            <li><a href="<?php echo home_url();?>/service/customer/">
                <span class="jp">店舗型鍼灸院</span>
                <span class="jp">アットホーム<br>はりきゅうひの</span>
                <span class="en">for PERSON</span>
            </a></li>
        </ul>
    </div>
</main>
<?php
// フッターを取得
get_footer(); 
?>