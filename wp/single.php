<?php get_header();?>
<!-- メインコンテンツ -->
<main role="main" class="p-common p-single">
	<?php breadcrumb();?>
	<?php if(have_posts()): while(have_posts()): the_post();?>
	<article>
	<h1><?php the_title();?></h1>
	<?php the_content();?>
	</article>
	<?php endwhile; endif; wp_reset_postdata();?>
</main>
<?php get_footer();?>