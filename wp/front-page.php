<?php get_header();?>
<main role="main" class="l-common p-front">

    <section class="p-front-hero">
        <div class="p-front-hero__bg">
            <picture>
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/front/ph_hero_pc.webp">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/front/ph_hero_sp.webp" alt="" width="" height="" loading="lazy">
            </picture>
            <div class="p-front-hero__txt">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/front/txt_front.svg" alt="" width="" height="" loading="lazy">
            </div>
        </div>
    </section>
    <section class="p-front-about">
        <div class="sub">
            <div class="txt">
                <span class="head">院長</span>
                <span class="jp">日野 智之</span>
                <span class="en">Hino Satoshi</span>
            </div>
            <div class="img"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/front/ph_front01.webp" alt="" width="" height="" loading="lazy"></div>
        </div>
        <div class="main">
            <h3><span>みらいテラス</span><span>鍼灸とは</span></h3>
            <div class="m-label02"><p>ABOUT US</p></div>
            <h4><span class="u-device-sp">健康な人づくりから、</span><span class="u-device-sp">元気な街づくりを。</span></h4>
            <p><span>私たちは鍼灸の技術を活かし、働く人々の健康な日々をサポートし、</span><span>企業の安定的な運営を支え、成長に必要不可欠な要素として貢献しています。</span><span>これを通じて、より良い社会の創造に貢献する使命を担っています。</span></p>
            <div class="btn"><a href="<?php echo home_url();?>/about/">詳細を見る</a></div>
        </div>
    </section>
    <section class="p-front-service">
        <div class="p-front-service__body">
            <h3><span>企業向け</span><span>鍼灸サービス</span></h3>
            <div class="m-label02"><p>SERVICE for Business</p></div>
            <h4><span class="u-device-sp">オフィスに訪問し、</span><span class="u-device-sp">定期的な鍼灸治療を提供。</span></h4>
            <p><span>鍼灸は目・肩・腰の不調、メンタル不調や慢性的な疲労など働く人々をとりまく健康リスクに対して</span><span>効果を発揮し、うつ病や体調不良による休職や離職リスクの未然低下が期待できます。</span></p>
        </div>
    </section>
    <section class="p-front-support">
        <div class="m-inner">
            <div class="txt">
                <h4><span><span class="u-device-sp">社員の健康を、</span><span class="u-device-sp">会社の福利厚生で守る。</span></span><span><span class="u-device-sp">より良い職場環境が、</span><span class="u-device-sp">安定経営に繋がる時代。</span></span></h4>
                <p><span>会社の福利厚生として、福岡みらいテラス鍼灸をご利用いただけます。</span><span>簡単な条件をクリアすれば、福利厚生費として経費計上することができ、</span><span>節税しながら社員の健康を守ることができます。</span></p>
                <div class="img"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/front/ph_front03.webp" alt="" width="" height="" loading="lazy"></div>
                <div class="p-front-support__btn">
                        <div class="btn"><a href="<?php echo home_url();?>/service/business/">法人向け 訪問鍼灸</a></div>
                        <div class="btn"><a href="<?php echo home_url();?>/service/welfare/">鍼灸の福利厚生導入支援</a></div>
                </div>
            </div>
            <?php /*
            <ul class="m-list">
                <?php
                    $args = new WP_Query(
                        array(
                            'post_type' => 'post',
                            'category_name' => 'business',
                            'posts_per_page' => '4',
                        )
                    );
                    if ( $args->have_posts() ) : while ( $args->have_posts() ) : $args->the_post();
                ?>
                <li>
                    <div class="thumb"><?php ajsai_the_post_thumbnail()?></div>
                    <div class="body">
                        <h4><?php the_title(); ?></h4>
                        <p><?php the_excerpt(); ?></p>
                    </div>
                    <div class="more"><a href="<?php the_permalink(); ?>">MORE</a></div>
                </li>
                <?php endwhile; endif; wp_reset_postdata(); ?>
            </ul>
            */ ?>
        </div>
    </section>
    <section class="p-front-commit">
        <div class="m-inner">
            <h3><span>鍼灸へのこだわり</span></h3>
            <div class="m-label02"><p>SHINKYU</p></div>
            <h4>いたくない鍼、あつくない灸。</h4>
            <p><span>世間から鍼灸にもたれているイメージを1歩超えて、福岡みらいテラス鍼灸のこだわりをご紹介。</span><span>痛みが取れるだけではない価値を提供するために日々邁進しております。</span></p>
            <h4>丁寧なカウンセリングと、先進の技術、確かな施術。</h4>
            <p><span>院長の日野がカウンセリングから施術まで一貫して行い、根本の原因にアプローチしていきます。</span><span>「鍼灸は初めて」という方がほとんどですが、皆さま笑顔で帰られますのでご安心ください。</span></p>
            <div class="btn"><a href="<?php echo home_url();?>/feature/">詳細を見る</a></div>
            <?php /*
            <ul class="m-list">
                <?php
                    $args = new WP_Query(
                        array(
                            'post_type' => 'post',
                            'category_name' => 'commit',
                            'posts_per_page' => '4',
                        )
                    );
                    if ( $args->have_posts() ) : while ( $args->have_posts() ) : $args->the_post();
                ?>
                <li>
                    <div class="thumb"><?php ajsai_the_post_thumbnail()?></div>
                    <div class="body">
                        <h4><?php the_title(); ?></h4>
                        <p><?php the_excerpt(); ?></p>
                    </div>
                    <div class="more"><a href="<?php the_permalink(); ?>">MORE</a></div>
                </li>
                <?php endwhile; endif; wp_reset_postdata(); ?>
            </ul>
            */ ?>
        </div>
    </section>
    <section class="p-front-person">
        <div class="p-front-person__body">
            <h3><span>個人向け</span><span>アットホームはりきゅうひの</span></h3>
            <div class="m-label02"><p>SERVICE for Person</p></div>
            <h4><span class="u-device-sp">JR「古賀」駅そば、</span><span class="u-device-sp">お気軽にご来院ください。</span></h4>
            <p><span>「辛い、痛いを、この街からひとつずつ無くしたい」という想いでお客様と向き合っています。</span><span>一人ひとりの健康づくりを通して、この街を活気ある元気な街にしたいと願っています。</span></p>
            <div class="btn"><a href="<?php echo home_url();?>/service/customer/">詳細を見る</a></div>
        </div>
        <?php /*
        <ul class="m-list m-inner">
            <?php
                $args = new WP_Query(
                    array(
                        'post_type' => 'post',
                        'category_name' => 'person',
                        'posts_per_page' => '4',
                    )
                );
                if ( $args->have_posts() ) : while ( $args->have_posts() ) : $args->the_post();
            ?>
            <li>
                <div class="thumb"><?php ajsai_the_post_thumbnail()?></div>
                <div class="body">
                    <h4><?php the_title(); ?></h4>
                    <p><?php the_excerpt(); ?></p>
                </div>
                <div class="more"><a href="<?php the_permalink(); ?>">MORE</a></div>
            </li>
            <?php endwhile; endif; wp_reset_postdata(); ?>
        </ul>
        */ ?>
    </section>
    <?php 
    $args = new WP_Query(
        array(
            'post_type' => 'information',
            'posts_per_page' => '5',
        )
    );
    if ( $args->have_posts() ) :
    ?>
    <section class="p-front-info m-inner">
        <h3><span>お知らせ</span></h3>
        <div class="m-label02"><p>NEWS</p></div>
        <ul class="p-front-info__list">
            <?php while ( $args->have_posts() ) : $args->the_post(); ?>
            <li><a href="<?php the_permalink(); ?>">
                <time datetime="<?php the_time('Y/m/d'); ?>"><?php the_time('Y/m/d'); ?></time>
                <h4><?php the_title(); ?></h4>
                <div class="more">MORE</div>
            </a></li>
            <?php endwhile; ?>
        </ul>
        <div class="btn"><a href="<?php echo home_url();?>/information/">NEWS一覧</a></div>
    </section>
    <?php endif; wp_reset_postdata();?>
    <section class="p-front-contact">
        <div class="m-inner">
            <h3 class="p-front-contact__head">
                <span class="en">CONTACT</span>
                <span class="jp">お問い合わせ</span>
            </h3>
            <div class="p-front-contact__column">
                <div class="p-front-contact__item">
                    <div class="head"><span>福岡みらいテラス鍼灸</span><span>（訪問鍼灸）</span></div>
                    <p>オフィスに訪問し、定期的な鍼灸施術を提供いたします。会話を交えながらの鍼灸施術を通じて、心身ともにリフレッシュでき、モチベーション向上やオフィス活性化を図ることが可能です。また、施術に加え健康相談も行っており、「かかりつけ鍼灸師」として大切な社員様の健康維持の継続を目指しています。</p>
                    <div class="btns"><a href="<?php echo home_url();?>/contact-b/">お問い合わせ</a></div>
                </div>
                <div class="p-front-contact__item">
                    <div class="head"><span>アットホームはりきゅうひの</span><span>（店舗鍼灸）</span></div>
                    <p>優しい鍼（はり）と心地よいお灸を心掛け、コミュニケーションを大切にする施術をモットーにしております。腰痛や肩痛から自律神経症状、がん治療の緩和ケアなど、さまざまな不調やお悩みに寄り添いながら鍼灸施術を行っています。訪れる皆さんが少しでも笑顔になり、ほっと安心できる鍼灸院であることを願い、日々施術に取り組んでいます。</p>
                    <div class="tel">
                        <div class="tel__head">TEL</div>
                        <div class="tel__body">
                            <a href="tel:0929425521">092-942-5521</a>
                            <p>火曜・日曜定休 9:00〜19:00</p>
                        </div>
                    </div>
                    <div class="btns">
                        <a href="https://lin.ee/sS3hw6u" target="_blank">LINE</a>
                        <a href="https://www.instagram.com/athomeharikyu_hino/" target="_blank">instagram</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<?php get_footer();?>