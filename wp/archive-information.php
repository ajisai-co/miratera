<?php
// ヘッダーを取得
get_header();
?>
<main role="main" class="l-common l-under">
    <div class="l-under-head -media">
        <div class="m-inner">
            <?php breadcrumb();?>
            <h2 class="-under">
                <span class="en">NEWS</span>
                <span class="jp">お知らせ</span>
            </h2>
        </div>
    </div>
    <ul class="p-front-info__list m-inner -media">
        <?php
            $paged = get_query_var('paged');
            $args = new WP_Query(
                array(
                    'post_type' => 'information',
                    'posts_per_page' => '20',
                    'paged' => $paged,
                )
            );
            if ( $args->have_posts() ) : while ( $args->have_posts() ) : $args->the_post();
        ?>
        <li><a href="<?php the_permalink(); ?>">
            <time datetime="<?php the_time('Y/m/d'); ?>"><?php the_time('Y/m/d'); ?></time>
            <h4><?php the_title(); ?></h4>
            <div class="more">MORE</div>
        </a></li>
        <?php endwhile; endif; wp_reset_postdata(); ?>
    </ul>
    <?php if(function_exists('pagination')){ pagination(); }?>
</main>
<?php 
// フッターを取得
get_footer(); 
?>