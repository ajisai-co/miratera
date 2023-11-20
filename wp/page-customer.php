<?php
// ヘッダーを取得
get_header();
?>
<main role="main" class="l-common l-under">
    <div class="l-under-head">
        <div class="m-inner">
            <?php breadcrumb();?>
            <h2 class="-under">
                <span class="en">for PERSON</span>
                <span class="jp">個人向け アットホームはりきゅうひの</span>
            </h2>
        </div>
    </div>
    <section class="l-under-person">
        <div class="m-label02"><p>店舗型鍼灸院</p></div>
        <h3 class="m-txt-31"><span>アットホームはりきゅうひの</span></h3>
        <div class="l-under-person__column m-inner">
            <div class="main">
                <h3>「みらいの健康を創る」</h3>
                <p>2015年に福岡県古賀市にて「アットホームはりきゅうひの」を開業し、再発しにくい身体づくりを目指す施術や、子どもたちの未来を考慮した「小児はり施術」を提供しています。</p>
                <p><span>当院では、優しい鍼（はり）と心地よいお灸を心掛け、コミュニケーションを大切にする施術をモットーにしております。腰痛や肩痛から自律神経症状、がん治療の緩和ケアなど、さまざまな不調やお悩みに寄り添いながら鍼灸施術を行っています。</span><span>私たちは、訪れる皆さんが少しでも笑顔になり、ほっと安心できる鍼灸院であることを願い、日々施術に取り組んでいます。</span></p>
            </div>
            <div class="sub"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/under/ph_person01.webp" alt="" width="" height="" loading="lazy"></div>
        </div>
        <div class="l-under-person__bg">
            <div class="m-inner">
                <div class="m-treatment">
                        <h3 class="m-treatment__head">施術サービス</h3>
                        <p class="m-treatment__lead">当日予約、19時以降の予約は別途500円かかります。</p>
                        <ul class="m-treatment__list -white">
                            <li>はり・灸による全身治療</li>
                            <li>美容鍼灸</li>
                        </ul>
                </div>
                <ul class="m-pricelist">
                        <li class="m-pricelist__item">
                            <h4 class="m-pricelist__head">はり・灸による全身治療</h4>
                            <p class="m-pricelist__lead"><span>鍼とお灸を使い、全身の治療を行い、根本的な改善を目指します。</span><span>優しい鍼と心地よいお灸を提供しておりますので、初めて鍼やお灸を受ける方も安心してご利用いただけます。</span></p>
                            <ul class="m-pricelist__inner">
                                <li>
                                    <div class="column">
                                            <div class="lbl">料金</div>
                                            <div class="price">¥3,800<span>(税込)</span></div>
                                            <div class="time">40分 ~ 60分</div>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <li class="m-pricelist__item">
                            <h4 class="m-pricelist__head">美容鍼灸</h4>
                            <p class="m-pricelist__lead">お化粧を落とさずに受けられる美容鍼と、お身体の鍼灸を組み合わせたセットです。お顔とお身体、どちらもスッキリさせたい方におすすめです。</p>
                            <ul class="m-pricelist__inner">
                                <li>
                                    <div class="column">
                                            <div class="lbl">料金</div>
                                            <div class="price">¥6,600<span>(税込)</span></div>
                                            <div class="time">60分 ~ 90分</div>
                                    </div>
                                </li>
                            </ul>
                        </li>
                </ul>
                <div class="m-btn-tran"><a href="<?php echo home_url();?>/contact-c/">鍼・お灸のご予約はこちら</a></div>
            </div>
        </div>
        <h3>ご利用の流れ</h3>
        <ul class="m-list02 m-inner">
            <li class="m-list02__item">
                <div class="icon"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/under/icon_flow05.svg" alt=""></div>
                <h4 class="m-list02__head">ご予約</h4>
                <p class="m-list02__txt"><span><?php /*お電話、または*/ ?>WEB予約から承っております。</span><span>ご不明なことなどありましたらお気軽にお問い合わせください。</span></p>
            </li>
            <li class="m-list02__item">
                <div class="icon"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/under/icon_flow06.svg" alt=""></div>
                <h4 class="m-list02__head">カウンセリング・検査</h4>
                <p class="m-list02__txt">ご記入いただいたカウンセリングシートをもとに、お身体の状態、お悩みをお聞かせいただきます。<br>また、東洋医学に基づいた検査にてお身体の状態をさらに詳しく診させていただきます。</p>
            </li>
            <li class="m-list02__item">
                <div class="icon"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/under/icon_flow07.svg" alt=""></div>
                <h4 class="m-list02__head">施術</h4>
                <p class="m-list02__txt">鍼とお灸を組み合わせた、お一人おひとりに合わせたオーダーメイド施術です。</p>
            </li>
            <li class="m-list02__item">
                <div class="icon"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/under/icon_flow04.svg" alt=""></div>
                <h4 class="m-list02__head">アフターカウンセリング</h4>
                <p class="m-list02__txt">施術後のお身体の状態を確認。<br>今後の施術期間、間隔についてご説明します。また、ご自宅でできるセルフケアなどもご提案いたします。</p>
            </li>
        </ul>
        <?php /*
        <div class="m-column01 m-inner">
            <h3 class="m-column01__head">事前にご準備いただく必要があるもの</h3>
            <ul class="m-list03">
                <li>・何か入ります</li>
                <li>・何か入ります</li>
                <li>・何か入ります</li>
                <li>・何か入ります</li>
                <li>・何か入ります</li>
                <li>・何か入ります</li>
                <li>・何か入ります</li>
                <li>・何か入ります</li>
                <li>・何か入ります</li>
                <li>・何か入ります</li>
                <li>・何か入ります</li>
                <li>・何か入ります</li>
            </ul>
        </div>
        */?>
        <div class="l-under-person__column -modifier">
            <h3><span>みんなで創ろうみらいの健康</span><span>「治療ギフト」の取り組み</span></h3>
            <div class="main">
                    <p>「みらいの健康を創ることを目的とした、0歳から15歳までの子どもたちを対象とした取り組みです。</p>
                    <p>患者様は通常通り治療を受け、その治療費を「治療ギフトポイント」としてポイント化し、当院で保管しています。治療ギフトポイントは、0歳から15歳の子どもたちが施術を受ける際に利用できます。</p>
                    <p>普段皆さんが受ける施術が、子どもたちへの施術に役立っています。鍼灸施術を通じて、私たちは『子育て世代の力になりたい』、そして『皆さんの施術を未来の健康に繋げたい』という思いを込めて、この取り組みを開始しました。」</p>
                    <p><span>～子ども達の施術で多い症状～</span><span>・ぜんそく・便秘・かんの虫・アトピー性皮膚炎・夜尿症・スポーツ疾患</span><span>などがあります。</span><span>施術には「刺さない子ども向け専用の鍼」を使用します。</span><span>不安、不明な点はお気軽にご相談ください。</span></p>
            </div>
            <div class="sub"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/under/ph_person02.webp" alt="" width="" height="" loading="lazy"></div>
        </div>
        <div class="m-treatment m-inner">
            <h3 class="m-treatment__head">鍼・お灸治療での対応症状一覧</h3>
            <ul class="m-treatment__list">
                <li>慢性的な肩こり</li>
                <li>慢性腰痛</li>
                <li>四十肩／五十肩(肩関節周囲炎)</li>
                <li>ぎっくり腰</li>
                <li>坐骨神経痛</li>
                <li>足のしびれ、冷え、むくみ</li>
                <li>めまい</li>
                <li>頭痛</li>
                <li>眼精疲労</li>
                <li>顎関節症</li>
                <li>腱鞘炎</li>
            </ul>
        </div>
    </section>
</main>

<section class="m-contact-under -access">
    <div class="m-inner">
        <h3 class="head">ACCESS</h3>
        <div class="m-contact-under__column">
            <div class="m-contact-under__info">
                <dl>
                    <dt>住所</dt>
                    <dd>〒811-3101 福岡県 古賀市 天神1丁目1-20-102</dd>
                </dl>
                <dl>
                    <dt>最寄駅</dt>
                    <dd>JR古賀駅<br>JR古賀駅西口より徒歩5分</dd>
                </dl>
                <dl>
                    <dt>駐車場</dt>
                    <dd>有り</dd>
                </dl>
                <dl>
                    <dt>営業時間</dt>
                    <dd>
                        <table>
                            <tr>
                                <th class="table-head-l">診療時間</th>
                                <th>月</th>
                                <th>火</th>
                                <th>水</th>
                                <th>木</th>
                                <th>金</th>
                                <th class="table-head-lightblue">土</th>
                                <th class="table-head-red">日</th>
                            </tr>
                            <tr>
                                <td>9:00~12:00</td>
                                <td>●</td>
                                <td>-</td>
                                <td>●</td>
                                <td>●</td>
                                <td>●</td>
                                <td>●</td>
                                <td>-</td>
                            </tr>
                            <tr>
                                <td>13:00~19:00</td>
                                <td>●</td>
                                <td>-</td>
                                <td>●</td>
                                <td>●</td>
                                <td>●</td>
                                <td>●</td>
                                <td>-</td>
                            </tr>
                        </table>
                    </dd>
                </dl>
            </div>
            <div class="m-contact-under__map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3318.148046952337!2d130.46077758565062!3d33.73098766574327!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x35418805f3325b43%3A0x1f93bf0020d325f0!2z44Ki44OD44OI44Ob44O844Og44Gv44KK44GN44KF44GG44Gy44Gu!5e0!3m2!1sja!2sjp!4v1698631954227!5m2!1sja!2sjp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
</section>

<section class="m-contact-under">
    <div class="m-inner">
        <h3 class="head">CONTACT</h3>
        <p class="large">アットホームはりきゅうひの</p>
        <p class="small">ご予約は<?php /*お電話、または*/ ?>メールフォームよりお願いいたします。</p>
        <div class="mail"><a href="<?php echo home_url();?>/contact-c/">
            <svg xmlns="http://www.w3.org/2000/svg" width="20.534" height="15.439" viewBox="0 0 20.534 15.439">
                <g transform="translate(0 -63.519)">
                    <path d="M448.57,174.637l-2.65-2.753,2.65-2.284Z" transform="translate(-428.037 -101.827)" fill="#037cb2"/>
                    <path d="M2.653,171.884,0,174.64V169.6Z" transform="translate(0 -101.827)" fill="#037cb2"/>
                    <path d="M20.534,259v2.535a1.111,1.111,0,0,1-1.11,1.11H1.11A1.11,1.11,0,0,1,0,261.533V259l3.969-4.12,4.533,3.9a2.795,2.795,0,0,0,3.532,0l4.53-3.9Z" transform="translate(0 -183.686)" fill="#037cb2"/>
                    <path d="M20.534,64.626v1.11l-9.683,8.342a.944.944,0,0,1-1.168,0L0,65.736v-1.11a1.108,1.108,0,0,1,1.11-1.107H19.423A1.108,1.108,0,0,1,20.534,64.626Z" transform="translate(0 0)" fill="#037cb2"/>
                </g>
            </svg>
            <span>ご予約のお問い合わせ</span>
        </a></div>
        <?php /*
        <div class="tel">
            <p class="tel__head">TEL</p>
            <div class="tel__body">
                <a href="tel:092-942-5521">092-942-5521</a>
                <p>火曜・日曜定休 9:00〜19:00</p>
            </div>
        </div>
        */?>
    </div>
</section>
<?php 
// フッターを取得
get_footer(); 
?>