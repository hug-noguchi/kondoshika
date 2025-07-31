<?php
/**
 * アーカイブテンプレート（お知らせ）
 * =====================================================
 * @package  growp
 * @license  GPLv2 or later
 * @since 1.0.0
 * @see http://codex.wordpress.org/Template_Hierarchy
 * =====================================================
 */
// ページヘッダーの設定
add_filter( 'growp/page_header/title', function () {
	return '矯正の事例集';
} );
add_filter( 'growp/page_header/image', function () {
	return GUrl::asset( '/assets/images/pagehead-case_of_correction.jpg' );
} );
// カラム設定
add_action("growp/wrapper", function () {
	return "twocolumn";
});
if ( have_posts() ) :
	get_template_part('content', 'pan'); // パンくず
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
<?php endif;
