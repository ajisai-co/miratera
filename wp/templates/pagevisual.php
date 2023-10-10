<?php
/**
 * 下層ページのメインビジュアル
 * modifierのクラス名も条件分岐と一緒に書き換えればOK
 */

$visual_title = '';
$visual_subtitle = '';
$visual_slug = '';

if( is_home() ){
	$visual_title = '記事一覧ページ';
	$visual_subtitle = 'english';
	$visual_slug = '-home';
}elseif( is_single() ){
	$visual_title = '記事詳細';
	$visual_subtitle = 'english';
	$visual_slug = '-single';
}elseif( is_post_type_archive() || is_tax() ){
	$visual_title = 'カスタム投稿一覧、タクソノミー一覧';
	$visual_subtitle = 'english';
	$visual_slug = '-custom_post';
}elseif( is_page() ){
	$visual_title = '固定ページ';
	$visual_subtitle = 'english';
	$visual_slug = '-page';
}else{
	$visual_title = 'その他';
	$visual_subtitle = 'english';
	$visual_slug = '-other';
}
?>
<div class="m-pagevisual <?php echo $visual_slug;?>">
	<div class="m-pagevisual__title"><?php echo $visual_title;?></div>
	<div class="m-pagevisual__subtitle"><?php echo $visual_subtitle;?></div>
</div>