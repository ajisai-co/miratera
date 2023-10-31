<?php
// ヘッダーを取得
get_header();
?>
<main role="main" class="l-common l-under">
    <div class="l-under-head">
        <div class="m-inner">
            <?php breadcrumb();?>
            <h2 class="-under">
                <span class="en">WELFARE</span>
                <span class="jp">福利厚生導入</span>
            </h2>
        </div>
    </div>
    <section class="l-under-welfare">
        <div class="m-inner">
            <div class="m-label02"><p>時代に合った福利厚生をご提案</p></div>
            <h3 class="m-txt-31"><span>福岡みらいテラス鍼灸は企業を健康にすることで</span><span>働く人々や家族、子供たちの未来を明るくします</span></h3>
            <p class="m-txt-16"><span>〝企業が健康なら日本は元気だ〟を合言葉に、貴社のオフィスに訪問し、鍼施術で健康な人づくりをお届けします。</span><span>日本を支える企業が健康であるためには、まず働く人々が健康である必要があります。</span><span>この健康は、働く人々の家族、そして子供たちの未来も明るく照らします。</span><span>わたしたちは、このような価値を提供していきます。</span></p>
            <div class="m-box-grad01 -welfare">
                <div class="m-label01"><p>よくあるお悩み</p></div>
                <h3 class="m-box-grad01__head"><span>こんなことでお悩みではありませんか？</span></h3>
                <ul class="p-welfare-list">
                        <li>疲労をかかえている社員が多い</li>
                        <li>人材の定着が難しく、採用コストがかかっている</li>
                        <li>今こそ、社員の健康サポートが必要</li>
                        <li>福利厚生を充実させたいが、何をしたらいいかわからない</li>
                        <li>社員の欠勤、休職が多い</li>
                        <li>業務中、繁忙期でもできる福利厚生を探している</li>
                        <li>社員の仕事への意欲、活気を上げたい</li>
                        <li>社員の健康を守りたいが。今の福利厚生では足りないと感じている</li>
                </ul>
                <div class="m-box-grad01__illust"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/under/illust_welfare01.webp" alt="" width="" height="" loading="lazy"></div>
            </div>
            <div class="m-box-grad01">
                <div class="m-label01"><p>よくあるお悩み</p></div>
                <h3 class="m-box-grad01__head"><span>鍼灸の福利厚生導入は</span><span>社員の健康と、より良い職場環境につながります</span></h3>
                <ul class="m-box-grad01__list">
                        <li>
                            <div class="icon"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/under/icon_check.svg" alt="" width="" height="" loading="lazy"></div>
                            <div class="body">
                                <h4 class="head">POINT 01</h4>
                                <p class="txt">社員様の健康サポート</p>
                            </div>
                        </li>
                        <li>
                            <div class="icon"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/under/icon_check.svg" alt="" width="" height="" loading="lazy"></div>
                            <div class="body">
                                <h4 class="head">POINT 02</h4>
                                <p class="txt">職場の生産性向上</p>
                            </div>
                        </li>
                        <li>
                            <div class="icon"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/under/icon_check.svg" alt="" width="" height="" loading="lazy"></div>
                            <div class="body">
                                <h4 class="head">POINT 03</h4>
                                <p class="txt">安定経営を「健康」からサポート</p>
                            </div>
                        </li>
                        <li>
                            <div class="icon"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/under/icon_check.svg" alt="" width="" height="" loading="lazy"></div>
                            <div class="body">
                                <h4 class="head">POINT 04</h4>
                                <p class="txt">鍼灸の福利厚生サポート</p>
                            </div>
                        </li>
                </ul>
                <?php /*
                <div class="m-box-grad01__column -reverse">
                        <div class="sub"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/under/ph_welfare_point01.webp" alt="" width="" height="" loading="lazy"></div>
                        <div class="main">
                            <p class="head">POINT 01</p>
                            <h4><span>〇〇〇〇には〇〇〇〇対策。</span><span>〇〇〇〇を〇〇〇〇することで〇〇〇〇にします。</span></h4>
                            <p class="txt">説明テキストが入ります説明テキストが入ります説明テキストが入ります説明テキストが入ります説明テキストが入ります説明テキストが入ります説明テキストが入ります説明テキストが入ります。説明テキストが入ります説明テキストが入ります説明テキストが入ります説明テキストが入ります説明テキストが入ります説明テキストが入ります説明テキストが入ります説明テキストが入ります。</p>
                        </div>
                </div>
                <div class="m-box-grad01__column">
                        <div class="sub"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/under/ph_welfare_point01.webp" alt="" width="" height="" loading="lazy"></div>
                        <div class="main">
                            <p class="head">POINT 01</p>
                            <h4><span>〇〇〇〇には〇〇〇〇対策。</span><span>〇〇〇〇を〇〇〇〇することで〇〇〇〇にします。</span></h4>
                            <p class="txt">説明テキストが入ります説明テキストが入ります説明テキストが入ります説明テキストが入ります説明テキストが入ります説明テキストが入ります説明テキストが入ります説明テキストが入ります。説明テキストが入ります説明テキストが入ります説明テキストが入ります説明テキストが入ります説明テキストが入ります説明テキストが入ります説明テキストが入ります説明テキストが入ります。</p>
                        </div>
                </div>
                <div class="m-box-grad01__column -reverse">
                        <div class="sub"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/under/ph_welfare_point01.webp" alt="" width="" height="" loading="lazy"></div>
                        <div class="main">
                            <p class="head">POINT 01</p>
                            <h4><span>〇〇〇〇には〇〇〇〇対策。</span><span>〇〇〇〇を〇〇〇〇することで〇〇〇〇にします。</span></h4>
                            <p class="txt">説明テキストが入ります説明テキストが入ります説明テキストが入ります説明テキストが入ります説明テキストが入ります説明テキストが入ります説明テキストが入ります説明テキストが入ります。説明テキストが入ります説明テキストが入ります説明テキストが入ります説明テキストが入ります説明テキストが入ります説明テキストが入ります説明テキストが入ります説明テキストが入ります。</p>
                        </div>
                </div>
                <div class="m-box-grad01__column">
                        <div class="sub"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/under/ph_welfare_point01.webp" alt="" width="" height="" loading="lazy"></div>
                        <div class="main">
                            <p class="head">POINT 01</p>
                            <h4><span>〇〇〇〇には〇〇〇〇対策。</span><span>〇〇〇〇を〇〇〇〇することで〇〇〇〇にします。</span></h4>
                            <p class="txt">説明テキストが入ります説明テキストが入ります説明テキストが入ります説明テキストが入ります説明テキストが入ります説明テキストが入ります説明テキストが入ります説明テキストが入ります。説明テキストが入ります説明テキストが入ります説明テキストが入ります説明テキストが入ります説明テキストが入ります説明テキストが入ります説明テキストが入ります説明テキストが入ります。</p>
                        </div>
                </div>
            </div>
            */?>
            <div class="m-box-grad01">
                <?php /*
                <div class="m-label01"><p>信頼の理由</p></div>
                <h3 class="m-box-grad01__head"><span>導入企業数・業界シェア共に実績が豊富です</span></h3>
                <div class="m-works">
                        <div class="m-works__head"><h4>導入企業は業界を問わず0000社以上</h4></div>
                        <ul class="m-works__list">
                            <li><img src="https://placehold.jp/137x49.png" alt="" width="" height="" loading="lazy"></li>
                            <li><img src="https://placehold.jp/137x49.png" alt="" width="" height="" loading="lazy"></li>
                            <li><img src="https://placehold.jp/137x49.png" alt="" width="" height="" loading="lazy"></li>
                            <li><img src="https://placehold.jp/137x49.png" alt="" width="" height="" loading="lazy"></li>
                            <li><img src="https://placehold.jp/137x49.png" alt="" width="" height="" loading="lazy"></li>
                            <li><img src="https://placehold.jp/137x49.png" alt="" width="" height="" loading="lazy"></li>
                            <li><img src="https://placehold.jp/137x49.png" alt="" width="" height="" loading="lazy"></li>
                            <li><img src="https://placehold.jp/137x49.png" alt="" width="" height="" loading="lazy"></li>
                            <li><img src="https://placehold.jp/137x49.png" alt="" width="" height="" loading="lazy"></li>
                            <li><img src="https://placehold.jp/137x49.png" alt="" width="" height="" loading="lazy"></li>
                            <li><img src="https://placehold.jp/137x49.png" alt="" width="" height="" loading="lazy"></li>
                            <li><img src="https://placehold.jp/137x49.png" alt="" width="" height="" loading="lazy"></li>
                            <li><img src="https://placehold.jp/137x49.png" alt="" width="" height="" loading="lazy"></li>
                            <li><img src="https://placehold.jp/137x49.png" alt="" width="" height="" loading="lazy"></li>
                            <li><img src="https://placehold.jp/137x49.png" alt="" width="" height="" loading="lazy"></li>
                            <li><img src="https://placehold.jp/137x49.png" alt="" width="" height="" loading="lazy"></li>
                            <li><img src="https://placehold.jp/137x49.png" alt="" width="" height="" loading="lazy"></li>
                            <li><img src="https://placehold.jp/137x49.png" alt="" width="" height="" loading="lazy"></li>
                            <li><img src="https://placehold.jp/137x49.png" alt="" width="" height="" loading="lazy"></li>
                            <li><img src="https://placehold.jp/137x49.png" alt="" width="" height="" loading="lazy"></li>
                            <li><img src="https://placehold.jp/137x49.png" alt="" width="" height="" loading="lazy"></li>
                            <li><img src="https://placehold.jp/137x49.png" alt="" width="" height="" loading="lazy"></li>
                            <li><img src="https://placehold.jp/137x49.png" alt="" width="" height="" loading="lazy"></li>
                            <li><img src="https://placehold.jp/137x49.png" alt="" width="" height="" loading="lazy"></li>
                        </ul>
                </div>
                */ ?>
                <ul class="m-list01 -three">
                        <li>
                            <?php /* <div class="m-list01__thumb"><img src="https://placehold.jp/295x200.png" alt=""></div> */ ?>
                            <h4 class="m-list01__head">知熱（ちねつ）灸</h4>
                            <p class="m-list01__txt"><span>米粒大やその半分くらいのもぐさを皮膚の上にのせ、線香で火をつける施術方法で、8割程燃えたところで取り除きます。</span><span>一瞬「チクッ」とする感覚がありますが、皮膚上に専用のシールを貼りその上にお灸をするので、めったにやけどすることはありません。</span><span>ツボに温熱刺激を与えるのですが、体表の余分な熱を発散させ、鎮痛・血行促進の作用があります。また自律神経系や内臓機能にも作用します。</span></p>
                        </li>
                        <li>
                            <?php /* <div class="m-list01__thumb"><img src="https://placehold.jp/295x200.png" alt=""></div> */ ?>
                            <h4 class="m-list01__head">台座灸</h4>
                            <p class="m-list01__txt"><span>台座の上に筒状にしたもぐさをのせて施す方法です。</span><span>皮膚ともぐさの間に少し隙間があるので、マイルドな温かさのお灸です。</span><span>「せんねん灸」とよばれる台座灸は市販もされており、簡単に使えるのでセルフお灸としても人気です。</span><span>血行促進、冷え性に効果が期待できます。</span></p>
                        </li>
                        <li>
                            <?php /* <div class="m-list01__thumb"><img src="https://placehold.jp/295x200.png" alt=""></div> */ ?>
                            <h4 class="m-list01__head">綿花灸</h4>
                            <p class="m-list01__txt"><span>人肌ほどの温かさの綿花の上にもぐさをのせ燃焼させる施術方法です。</span><span>お灸をしている箇所を専用の温度計で測り、皮膚温が40～42度になるまで温めますので、ほんわかとした心地の良いお灸です。</span><span>血行が促進され、疲労回復・鎮痛・筋肉のこりの解消に効果的です。</span></p>
                        </li>
                </ul>
            </div>
            <?php /*
            <div class="m-box-grad01">
                <div class="m-label01"><p>お客様の声</p></div>
                <h3 class="m-box-grad01__head"><span>「効率が上がった」「楽になった」等の声が寄せられています</span></h3>
                <div class="m-box-grad01__comment">
                        <div class="sub"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/under/illust_welfare02.webp" alt="" width="" height="" loading="lazy"></div>
                        <div class="main">
                            <h4>これまで大変だった〇〇〇〇が〇〇〇〇になりました！</h4>
                            <p class="txt">説明テキストが入ります説明テキストが入ります説明テキストが入ります説明テキストが入ります説明テキストが入ります説明テキストが入ります説明テキストが入ります説明テキストが入ります。説明テキストが入ります説明テキストが入ります説明テキストが入ります説明テキストが入ります説明テキストが入ります説明テキストが入ります説明テキストが入ります説明テキストが入ります。</p>
                            <p class="name">〇〇業界　営業担当</p>
                        </div>
                </div>
                <div class="m-box-grad01__comment -reverse">
                        <div class="sub"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/under/illust_welfare02.webp" alt="" width="" height="" loading="lazy"></div>
                        <div class="main">
                            <h4>これまで大変だった〇〇〇〇が〇〇〇〇になりました！</h4>
                            <p class="txt">説明テキストが入ります説明テキストが入ります説明テキストが入ります説明テキストが入ります説明テキストが入ります説明テキストが入ります説明テキストが入ります説明テキストが入ります。説明テキストが入ります説明テキストが入ります説明テキストが入ります説明テキストが入ります説明テキストが入ります説明テキストが入ります説明テキストが入ります説明テキストが入ります。</p>
                            <p class="name">〇〇業界　営業担当</p>
                        </div>
                </div>
                <div class="m-box-grad01__comment">
                        <div class="sub"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/under/illust_welfare02.webp" alt="" width="" height="" loading="lazy"></div>
                        <div class="main">
                            <h4>これまで大変だった〇〇〇〇が〇〇〇〇になりました！</h4>
                            <p class="txt">説明テキストが入ります説明テキストが入ります説明テキストが入ります説明テキストが入ります説明テキストが入ります説明テキストが入ります説明テキストが入ります説明テキストが入ります。説明テキストが入ります説明テキストが入ります説明テキストが入ります説明テキストが入ります説明テキストが入ります説明テキストが入ります説明テキストが入ります説明テキストが入ります。</p>
                            <p class="name">〇〇業界　営業担当</p>
                        </div>
                </div>
                <div class="m-box-grad01__comment -reverse">
                        <div class="sub"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/under/illust_welfare02.webp" alt="" width="" height="" loading="lazy"></div>
                        <div class="main">
                            <h4>これまで大変だった〇〇〇〇が〇〇〇〇になりました！</h4>
                            <p class="txt">説明テキストが入ります説明テキストが入ります説明テキストが入ります説明テキストが入ります説明テキストが入ります説明テキストが入ります説明テキストが入ります説明テキストが入ります。説明テキストが入ります説明テキストが入ります説明テキストが入ります説明テキストが入ります説明テキストが入ります説明テキストが入ります説明テキストが入ります説明テキストが入ります。</p>
                            <p class="name">〇〇業界　営業担当</p>
                        </div>
                </div>
            </div>
            */ ?>
        </div>
    </section>

</main>
<?php 
// フッターを取得
get_footer(); 
?>