<?php get_header();?>
<!-- メインコンテンツ -->
<main role="main" class="p-common p-single">
	<?php 
	// コンテンツを取得
	if(have_posts()): while(have_posts()): the_post();
	 the_content();
	endwhile; endif; wp_reset_postdata();
	?>
</main>
<?php get_footer();?>