<?php
/*
 * Template Name: Blog Top (News)
 */
/**
 * ブログのトップページ
 * =====================================================
 * @package  growp
 * @license  GPLv2 or later
 * @since 1.0.0
 * @see http://codex.wordpress.org/Template_Hierarchy
 * =====================================================
 */
// ページヘッダーの設定
add_filter( 'growp/page_header/title', function () {
	return '更新情報';
} );
add_filter( 'growp/page_header/image', function () {
	return GUrl::asset( '/assets/images/pagehead-news.jpg' );
} );
// カラム設定
add_action("growp/wrapper", function () {
	return "twocolumn";
});
if ( have_posts() ) :
	?>

    <div class="c-content-box  is-news">
        <div class="c-content-box__inner">
            <div class="c-content-box__content">
	            <?php
	            while ( have_posts() ) :
		            the_post();
		            GTemplate::get_project( "post-item" );
	            endwhile;
	            ?>
            </div>
        </div>
	<?php
        // ページネーション
        echo GNav::get_paging_nav();
	?>
		
	</div>
<?php endif;/*
$paged_num = (get_query_var('paged')) ? get_query_var('paged') : 1;
$infolist = new WP_Query( array(
    'post_type' => 'post',
    'paged' => $paged_num,
    'posts_per_page' => 10,
));
if ( $infolist->have_posts() ) :
	?>

    <div class="c-content-box  is-news">
        <div class="c-content-box__inner">
            <div class="c-content-box__content">
	            <?php
while ( $infolist->have_posts() ) : $infolist->the_post();

			GTemplate::get_project( "post-item" );
endwhile; ?>
            </div>
        </div>
		<div class="archive_page_navi">
			<?php if(function_exists('wp_pagenavi')){ wp_pagenavi(array('query' => $infolist)); } ?>
		</div>

	</div>
<?php endif; wp_reset_postdata();*/
		

