<!DOCTYPE html>
<html lang="ja">
<head>
<?php 
// Google analyticsのコードを読み込み
require_once(dirname(__FILE__)."/templates/analytics.php"); ?>
<meta charset="UTF-8"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
<meta name="viewport" content="width=device-width,initial-scale=1"/>
<?php wp_head(); ?>
</head>
<body>
<!-- ヘッダー -->
<header role="banner" class="l-header">
	
</header>

<?php 
if( is_front_page() ){
	require_once(dirname(__FILE__)."/templates/mainvisual.php");
}else{
	require_once(dirname(__FILE__)."/templates/pagevisual.php");
}
?>