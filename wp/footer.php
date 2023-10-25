<?php 
if( !is_front_page() && is_page('contact') ):
?>
<section class="m-contact-under">
    <div class="m-inner">
        <h3 class="head">CONTACT</h3>
        <p class="large">法人向け 訪問診療や福利厚生導入についてのご相談</p>
        <p class="small">お電話、またはメールフォームよりお願いいたします。</p>
        <div class="mail"><a href="<?php echo home_url();?>/contact-b/">
            <svg xmlns="http://www.w3.org/2000/svg" width="20.534" height="15.439" viewBox="0 0 20.534 15.439">
                <g transform="translate(0 -63.519)">
                    <path d="M448.57,174.637l-2.65-2.753,2.65-2.284Z" transform="translate(-428.037 -101.827)" fill="#037cb2"/>
                    <path d="M2.653,171.884,0,174.64V169.6Z" transform="translate(0 -101.827)" fill="#037cb2"/>
                    <path d="M20.534,259v2.535a1.111,1.111,0,0,1-1.11,1.11H1.11A1.11,1.11,0,0,1,0,261.533V259l3.969-4.12,4.533,3.9a2.795,2.795,0,0,0,3.532,0l4.53-3.9Z" transform="translate(0 -183.686)" fill="#037cb2"/>
                    <path d="M20.534,64.626v1.11l-9.683,8.342a.944.944,0,0,1-1.168,0L0,65.736v-1.11a1.108,1.108,0,0,1,1.11-1.107H19.423A1.108,1.108,0,0,1,20.534,64.626Z" transform="translate(0 0)" fill="#037cb2"/>
                </g>
            </svg>
            <span>メールでご相談</span>
        </a></div>
        <div class="tel">
            <p class="tel__head">TEL</p>
            <div class="tel__body">
                <a href="tel:092-942-5521">092-942-5521</a>
                <p>火曜・日曜定休 9:00〜19:00</p>
            </div>
        </div>
    </div>
</section>
<?php endif;?>

<footer role="contentinfo" class="l-footer">
	<div class="m-inner">
		<div class="l-footer__link">
			<div class="l-footer__link__item"><a href="<?php echo home_url();?>/"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/_common/ph_banner01.webp" alt="鍼灸メディア みらテラメソッド MIRATERA METHOD"></a></div>
			<div class="l-footer__link__item"><a href="https://fukuokahariq-pref.org/"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/_common/ph_banner02.webp" alt="公益社団法人 福岡県鍼灸マッサージ師会"></a></div>
		</div>
		<div class="l-footer__logo"><a href="<?php echo home_url();?>/"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/_common/logo_footer.webp" alt="福岡みらいテラス鍼灸 Fukuoka Mirai Terrace Harikyu"></a></div>
		<div class="l-footer__nav">
			<ul class="l-footer__nav__list">
				<li class="l-footer__nav__item"><a href="<?php echo home_url();?>/about/">みらいテラス鍼灸とは</a></li>
				<li class="l-footer__nav__item"><a href="<?php echo home_url();?>/feature/">鍼灸へのこだわり</a></li>
				<li class="l-footer__nav__item"><a href="<?php echo home_url();?>/shinkyu-media/">みらテラ鍼灸メディア</a></li>
				<li class="l-footer__nav__item -modifier">サービス
					<ul class="l-footer__nav__inner">
						<li><a href="<?php echo home_url();?>/service/business/">法人向け 訪問鍼灸</a></li>
						<li><a href="<?php echo home_url();?>/service/welfare/">鍼灸の福利厚生導入支援</a></li>
						<li><a href="<?php echo home_url();?>/service/customer/">アットホームはりきゅうひの</a></li>
					</ul>
				</li>
				<li class="l-footer__nav__item"><a href="<?php echo home_url();?>/harichiryo/">鍼治療について</a></li>
				<li class="l-footer__nav__item"><a href="<?php echo home_url();?>/okyu/">お灸について</a></li>
				<li class="l-footer__nav__item"><a href="<?php echo home_url();?>/company/">会社情報</a></li>
			</ul>
		</div>
	</div>
	<div class="l-footer__copyright"><small>&copy; 2023 fukuoka mirai terrace harikyu.</small></div>
</footer>
<?php wp_footer(); ?>
</body>
</html>
