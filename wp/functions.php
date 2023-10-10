<?php

/* 
ファンクション
必要のないものはコメントアウトする。

*/
require_once('functions/init.php');
// require_once('functions/custom_ogp.php');
require_once('functions/custom_thumbnail.php');
require_once('functions/post_content_expert.php');
require_once('functions/pagination.php');
require_once('functions/bread_crumbs.php');

/* wp_headの制御 */
// タイトルタグの設置
add_theme_support( 'title-tag' );
// wpバージョン情報削除
remove_action('wp_head', 'wp_generator');
// js削除
remove_action('wp_head', 'wp_print_head_scripts', 9);
/* 絵文字削除 */
remove_action( 'wp_head',             'print_emoji_detection_script', 7 );
remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
remove_action( 'wp_print_styles',     'print_emoji_styles' );
remove_action( 'admin_print_styles',  'print_emoji_styles' );
// Global Stylesの削除
add_action( 'wp_enqueue_scripts', 'remove_my_global_styles' );
function remove_my_global_styles() {
	wp_dequeue_style( 'global-styles' );
}
//wp_headに追加
function adds_head() {
	echo '<link rel="shortcut icon" href="'.get_template_directory_uri().'/assets/images/_common/favicon.ico"/>'."\n";
	echo '<link rel="apple-touch-icon-precomposed" href="'.get_template_directory_uri().'/assets/images/_common/touchicon.png"/>'."\n";
	echo '<link rel="stylesheet" href="'.get_template_directory_uri().'/assets/css/style.css"/>'."\n";
}
add_action('wp_head', 'adds_head');

//wp_footerに追加
function adds_footer() {
	echo '<script src="//ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>'."\n";
	echo '<script src="'.get_template_directory_uri().'/assets/js/init.js"></script>'."\n";
}
add_action('wp_footer', 'adds_footer');
	

/**
 * pre_get_posts
 * メインクエリを一時的に使ってループ
 * カテゴリなどの自動取得にはこちらの関数が便利 : get_queried_object()
 */
add_action( 'pre_get_posts', 'my_pre_get_posts' );
function my_pre_get_posts( $query ) {
    if ( is_admin() || ! $query -> is_main_query() ) return;
    
    // is_~の条件分岐タグを使ってページごとの設定をする
    // if ( $query -> is_home() ) {
    //     $paged = get_query_var('paged');
    //     $query -> set( 'posts_per_page', '' );
    //     $query -> set( 'paged', $paged );
    // }
}


/**
 * ショートコード
 * ファイルのパスや、URLをWP管理画面の投稿から使えるようにするショートコード
 * 
 */
function filePath_sc() {
    $filepath = get_template_directory_uri();
    return $filepath;
}
add_shortcode('filePath', 'filePath_sc');

function linkPath_sc() {
    $linkPath = home_url();
    return $linkPath;
}
add_shortcode('linkPath', 'linkPath_sc');

/**
 * my_wp_kses_allowed_html
 * 管理画面でショートコードを使った際に、一部のタグでショートコードが認識されない問題を解決する
 * $tagsの部分に認識されないタグ名をいれる
 */
add_filter( 'wp_kses_allowed_html', 'my_wp_kses_allowed_html', 10, 2 );
function my_wp_kses_allowed_html( $tags, $context ) {
    $tags['source']['srcset'] = true;
    return $tags;
}

/**
 * shotrcode_name
 * ショートコード用の関数
 * returnで返す内容を書くことで、画面に表示する内容が変わる
 */
// function shotrcode_name($attr) {
// 	return 'ショートコード';
// }
// add_shortcode('short', 'shotrcode_name');


/**
 * disable_author_archive
 * サイトurl/?author=1でアクセスした際にユーザー名が表示されるのを防ぐ
 * セキュリティ対策の1つ。ただ、投稿者の一覧ページを作る際はこちらをコメントアウトする必要がある。
 */
add_filter( 'author_rewrite_rules', '__return_empty_array' );
function disable_author_archive() {
if( $_GET['author'] || preg_match('#/author/.+#', $_SERVER['REQUEST_URI']) ){
    wp_redirect( home_url( '/404.php' ) );
    exit;
}
}
add_action('init', 'disable_author_archive');