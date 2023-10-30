<!DOCTYPE html>
<html lang="ja">
<head>
<?php 
// Google analyticsのコードを読み込み
require_once(dirname(__FILE__)."/templates/analytics.php"); ?>
<meta charset="UTF-8"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
<meta name="viewport" content="width=device-width,initial-scale=1"/>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&family=Montserrat:wght@400;500;700&display=swap" rel="stylesheet">
<?php wp_head(); ?>
</head>
<body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-T93VQCPF"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<header role="banner" class="l-header">
	<h1 class="l-header__logo"><a href="<?php echo home_url();?>/"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/_common/logo_small.webp" alt=""></a></h1>

	<div class="l-header__hum js-navBtn">
		<span class="txt">MENU</span>
		<span class="bar"></span>
		<span class="bar"></span>
	</div>

	<nav class="l-header__nav js-navTarget">
		<ul class="l-header__nav__list">
			<li class="l-header__nav__item"><a href="<?php echo home_url();?>/about/">みらいテラス鍼灸とは</a></li>
			<li class="l-header__nav__item"><a href="<?php echo home_url();?>/feature/">鍼灸へのこだわり</a></li>
			<li class="l-header__nav__item"><a href="<?php echo home_url();?>/shinkyu-media/">みらテラ鍼灸メディア</a></li>
			<li class="l-header__nav__item -modifier"><a href="<?php echo home_url();?>/service/">サービス</a>
				<div class="l-header__nav__inner">
					<div class="head">みらテラ福岡の提供するサービス一覧</div>
					<div class="column">
						<p>法人の方</p>
						<a href="<?php echo home_url();?>/service/business/">法人向け 訪問鍼灸</a>
						<a href="<?php echo home_url();?>/service/welfare/">鍼灸の福利厚生導入支援</a>
					</div>
					<div class="column">
						<p>個人の方</p>
						<a href="<?php echo home_url();?>/service/customer/">アットホームはりきゅうひの</a>
					</div>
				</div>
			</li>
			<li class="l-header__nav__item"><a href="<?php echo home_url();?>/harichiryo/">鍼治療について</a></li>
			<li class="l-header__nav__item"><a href="<?php echo home_url();?>/okyu/">お灸について</a></li>
			<li class="l-header__nav__item"><a href="<?php echo home_url();?>/company/">会社情報</a></li>
		</ul>
		<div class="l-header__contact u-device-sp"><a href="<?php echo home_url();?>/contact-b/">お問い合わせ</a></div>
	</nav>

	<div class="l-header__contact u-device-pc"><a href="<?php echo home_url();?>/contact-b/">お問い合わせ</a></div>
</header>