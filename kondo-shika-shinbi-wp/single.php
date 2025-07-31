<?php
/**
 * 投稿テンプレート
 * =====================================================
 * @package  growp
 * @license  GPLv2 or later
 * @since 1.0.0
 * @see http://codex.wordpress.org/Template_Hierarchy
 * =====================================================
 */
// ページヘッダーの設定
add_filter( 'growp/page_header/title', function () {
	$categories = get_the_category();
	foreach ($categories as $category) {
		$category_name = $category->name;
	}
    return $category_name;
} );
add_filter( 'growp/page_header/image', function () {
	return GUrl::asset( '/assets/images/pagehead-news.jpg' );
} );
// カラム設定
add_action("growp/wrapper", function () {
	return "twocolumn";
});
while ( have_posts() ) :
	the_post();
	?>
	<?php get_template_part('content', 'pan'); // パンくず ?>
    <div class="c-post-head">
        <h1 class="c-post-head__title u-mbs is-bottom is-xs"><?php the_title(); ?></h1>
        <div class="c-post-head__sup">
            <div class="c-post-head__label  c-label">
	            <?php
	            if(is_category('column')) {
		            $cats = get_the_category();
		            foreach($cats as $cat) {
			            if ( $cat->parent ) {
				            echo $cat->cat_name;
			            }
		            }
	            } else {
		            echo GTag::get_first_term( get_the_ID(), "category", "name" );
	            }
	            ?>
            </div>
            <div class="c-post-head__date"><?php echo get_the_date()?></div>
        </div>
    </div>
    <div class="c-post-content">


        <?php the_content()?>
		
    </div>
    <nav class="c-post-navs">
	    <?php
	        GNav::the_post_nav();
	    ?>
    </nav>
<?php
endwhile; // end of the loop.
