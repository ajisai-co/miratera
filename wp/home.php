<?php
// ヘッダーを取得
get_header();
?>
<main role="main" class="l-common l-under">
    <div class="l-under-head -media">
        <div class="m-inner">
            <?php breadcrumb();?>
            <h2 class="-under">
                <span class="en">SHINKYU-MEDHIA</span>
                <span class="jp">みらテラ鍼灸メディア</span>
            </h2>
        </div>
    </div>
    <ul class="m-list m-inner -media">
        <?php
            $paged = get_query_var('paged');
            $args = new WP_Query(
                array(
                    'post_type' => 'post',
                    'posts_per_page' => '20',
                    'paged' => $paged,
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
    <?php if(function_exists('pagination')){ pagination(); }?>
</main>
<?php 
// フッターを取得
get_footer(); 
?>